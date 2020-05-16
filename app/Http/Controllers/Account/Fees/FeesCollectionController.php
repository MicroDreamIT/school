<?php
//The Edu Mis

namespace App\Http\Controllers\Account\Fees;

use App\Http\Controllers\CollegeBaseController;
use App\Models\AlertSetting;
use App\Models\FeeHead;
use App\Models\PaymentMethod;
use App\Traits\AccountingScope;
use App\Traits\SmsEmailScope;
use Illuminate\Http\Request;
use Stripe\Stripe;
use App\Models\Faculty;
use App\Models\FeeCollection;
use App\Models\FeeMaster;
use App\Models\Semester;
use App\Models\Student;
use Carbon\Carbon;
use view, URL;
use ViewHelper;
class FeesCollectionController extends CollegeBaseController
{
    protected $base_route = 'account.fees.collection';
    protected $view_path = 'account.fees.collection';
    protected $panel = 'Fees Collection';
    protected $filter_query = [];

    use SmsEmailScope;

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['student'] = Student::select('students.id','students.reg_no','students.reg_date', 'students.first_name',
            'students.middle_name', 'students.last_name','students.faculty','students.semester','ai.mobile_1', 'pd.father_first_name', 'pd.father_middle_name',
            'pd.father_last_name','students.academic_status','students.status')
            ->where(function ($query) use ($request) {
                $this->commonStudentFilterCondition($query, $request);
            })
            ->join('parent_details as pd', 'pd.students_id', '=', 'students.id')
            ->join('addressinfos as ai', 'ai.students_id', '=', 'students.id')
            ->get();

        $data['faculties'] = $this->activeFaculties();
        $data['batch'] = $this->activeBatch();
        $data['academic_status'] = $this->activeStudentAcademicStatus();

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;

        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function view(Request $request, $id)
    {
        $data = [];
        $today = Carbon::parse(today())->format('Y-m-d');
        $data['student'] = Student::select('students.id','students.reg_no','students.reg_date', 'students.first_name',
            'students.middle_name', 'students.last_name','students.faculty','students.semester','students.date_of_birth',
            'students.email', 'ai.mobile_1', 'pd.father_first_name', 'pd.father_middle_name', 'pd.father_last_name',
            'students.student_image','students.status')
            ->where('students.id','=',$id)
            ->join('parent_details as pd', 'pd.students_id', '=', 'students.id')
            ->join('addressinfos as ai', 'ai.students_id', '=', 'students.id')
            ->first();

        $data['fee_master'] = $data['student']->feeMaster()->orderBy('fee_due_date','desc')->get();
        $data['fee_collection'] = $data['student']->feeCollect()->get();

        $data['student']->payment_today = $data['student']->feeCollect()->where('date','=',$today)->sum('paid_amount');

        /*total Calculation on Table Foot*/
        $data['student']->fee_amount = $data['student']->feeMaster()->sum('fee_amount');
        $data['student']->discount = $data['student']->feeCollect()->sum('discount');
        $data['student']->fine = $data['student']->feeCollect()->sum('fine');
        $data['student']->paid_amount = $data['student']->feeCollect()->sum('paid_amount');
        $data['student']->balance =
            ($data['student']->fee_amount - ($data['student']->paid_amount + $data['student']->discount))+ $data['student']->fine;

        //for fee add modal data
        $feeHeadAll = FeeHead::Active()->orderby('fee_head_title')->get();
        $data['fee_heads'] = $feeHeadAll->pluck('fee_head_title','id');
        //Create an array of option attribute
        $data['fee_head_attributes'] =  $feeHeadAll->mapWithKeys(function ($feeHead) {
            return [$feeHead->id => ['data-feeHead-amount' => $feeHead->fee_head_amount]];
        })->all();

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;
        return view(parent::loadDataToView($this->view_path.'.collect.index'), compact('data'));
    }

    public function add(Request $request, $id)
    {
        $data = [];
        $data['fee_master'] = FeeMaster::select('id', 'students_id', 'semester', 'fee_head','fee_due_date','fee_amount','status')
            ->where('students_id','=',$data['student']->id)
            ->get();


        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;


        return view(parent::loadDataToView($this->view_path.'.collect.add'), compact('data'));
    }

    public function store(Request $request)
    {
        $amt = ($request->paid_amount - $request->fine) + $request->discount ;
        if($amt > + $request->due_amount){
            return response()->json(['danger', 'Due Amount : '.$request->due_amount.' , But you want to receive Amount with Discount :'.$amt]);
        }

        $request->request->add(['created_by' => auth()->user()->id]);

        FeeCollection::create($request->all());

        //Send Notification
        $studentId = $request->get('students_id') ;
        $amount = $request->get('paid_amount');
        $this->feeReceiveAlert($studentId, $amount);

        return response()->json(['success', $this->panel. 'Successfully.']);

    }

    public function delete(Request $request, $id)
    {
        if (!$row = FeeCollection::find($id)) return parent::invalidRequest();

        $row->delete();

        return response()->json(['success', $this->panel.' Deleted Successfully.']);
    }

    //quick fee receive
    public function quickReceive()
    {
        $data['url'] = URL::current();
        $data['payment_method'] = $this->activePaymentMethod();

        return response()->json($data);
    }

    public function quickReceiveStore(Request $request)
    {
        $students = Student::where('id',$request->students_id)->get();
        //student filter
        $filtered  = $students->filter(function ($student) use ($request) {

            //provide discount
            $feeMaster = $student->feeMaster()->orderBy('fee_due_date','asc')->get();
            $student->fee_amount = $feeMaster->sum('fee_amount');
            $student->paid_amount = $student->feeCollect()->sum('paid_amount');
            $student->discount = $student->feeCollect()->sum('discount');
            $student->fine = $student->feeCollect()->sum('fine');
            $student->balance = ($student->fee_amount + $student->fine) - ($student->discount + $student->paid_amount);
            $totalReceiveAmt = intval($request->receive_amount);
            $discountAmt = intval($request->discount_amount);
             if($student->balance > 0 && $discountAmt > 0){
                //filter due using call back
                $receiveAmount = $discountAmt;
                foreach ($feeMaster as $fm){
                    $fee_amount = $fm->fee_amount;
                    $paid_amount = $fm->feeCollect()->sum('paid_amount');
                    $discount = $fm->feeCollect()->sum('discount');
                    $fine = $fm->feeCollect()->sum('fine');
                    $balance = ($fee_amount + $fine) - ($discount + $paid_amount);

                    if($receiveAmount > 0 && $balance > 0){
                        if($balance > $receiveAmount){
                            $collectionData = [
                                'students_id'       => $request->students_id,
                                'fee_masters_id'    => $fm->id,
                                'date'              => $request->date,
                                'paid_amount'       => 0,
                                'discount'          => $receiveAmount,
                                'payment_mode'      => $request->payment_mode,
                                'note'              => $request->note?'Discount : '.$request->note:'Discount : '.$receiveAmount,
                                'created_by'        => auth()->user()->id
                            ];

                            $data = FeeCollection::create($collectionData);
                            $receiveAmount = 0;
                        }else{
                            if($receiveAmount > 0 ){
                                $collectionData = [
                                    'students_id'       => $request->students_id,
                                    'fee_masters_id'    => $fm->id,
                                    'date'              => $request->date,
                                    'paid_amount'       => 0,
                                    'discount'          => $balance,
                                    'payment_mode'      => $request->payment_mode,
                                    'note'              => 'Quick Receive : '. $request->note,
                                    'created_by'        => auth()->user()->id
                                ];

                                $data = FeeCollection::create($collectionData);
                                $receiveAmount  = $receiveAmount  - $balance;
                            }else{

                            }

                        }
                    }
                }
            }

            //receive fee
            $feeMaster = $student->feeMaster()->orderBy('fee_due_date','asc')->get();
            $student->fee_amount = $feeMaster->sum('fee_amount');
            $student->paid_amount = $student->feeCollect()->sum('paid_amount');
            $student->discount = $student->feeCollect()->sum('discount');
            $student->fine = $student->feeCollect()->sum('fine');
            $student->balance = ($student->fee_amount + $student->fine) - ($student->discount + $student->paid_amount);
            $totalReceiveAmt = intval($request->receive_amount);

            if($student->balance > 0 && $totalReceiveAmt > 0){
                //filter due using call back
                $receiveAmount = $totalReceiveAmt;
                foreach ($feeMaster as $fm){
                    $fee_amount = $fm->fee_amount;
                    $paid_amount = $fm->feeCollect()->sum('paid_amount');
                    $discount = $fm->feeCollect()->sum('discount');
                    $fine = $fm->feeCollect()->sum('fine');
                    $balance = ($fee_amount + $fine) - ($discount + $paid_amount);

                    if($receiveAmount > 0 && $balance > 0){
                        if($balance > $receiveAmount){
                            $collectionData = [
                                'students_id'       => $request->students_id,
                                'fee_masters_id'    => $fm->id,
                                'date'              => $request->date,
                                'paid_amount'       => $receiveAmount,
                                'payment_mode'      => $request->payment_mode,
                                'note'              => $request->note?'Quick Receive : '.$request->note:'Quick Receive',
                                'created_by'        => auth()->user()->id
                            ];

                            $data = FeeCollection::create($collectionData);
                            $receiveAmount = 0;
                        }else{
                            if($receiveAmount > 0 ){
                                $collectionData = [
                                    'students_id'       => $request->students_id,
                                    'fee_masters_id'    => $fm->id,
                                    'date'              => $request->date,
                                    'paid_amount'       =>$balance,
                                    'payment_mode'      => $request->payment_mode,
                                    'note'              => 'Quick Receive : '. $request->note,
                                    'created_by'        => auth()->user()->id
                                ];

                                $data = FeeCollection::create($collectionData);
                                $receiveAmount  = $receiveAmount  - $balance;
                            }else{

                            }

                        }
                    }
                }

                //send alert
                $studentId = $student->id ;
                $this->feeReceiveAlert($studentId, $totalReceiveAmt);

                return response()->json(['success', 'Successfully Receive '.$totalReceiveAmt.' Quick Receive Method']);
            }

        });

        if($request->print_receipt == "detail"){
            return redirect()->route('print-out.fees.today-receipt-detail', ['id' => $request->students_id]);
        }

        if($request->print_receipt == "short"){
            return redirect()->route('print-out.fees.today-receipt', ['id' => $request->students_id]);
        }

        return redirect()->back();
    }

    public function studentDetail(Request $request)
    {
        $student = Student::select('id', 'reg_no', 'reg_date', 'university_reg','faculty','semester',
            'academic_status', 'first_name', 'middle_name', 'last_name', 'date_of_birth', 'gender',
            'email', 'extra_info', 'student_image','student_signature','status')
            ->where('id', '=', $request->get('id'))->first();

        //calculate Due Fees
        $fee_amount = $student->feeMaster()->sum('fee_amount');
        $paid_amount = $student->feeCollect()->sum('paid_amount');
        $discount = $student->feeCollect()->sum('discount');
        $fine = $student->feeCollect()->sum('fine');
        $student->balance = ($fee_amount + $fine) - ($discount + $paid_amount);
        $response['html'] = view('account.fees.quickreceive.includes.student_detail_tr',[
            'student' => $student
        ])->render();
        return response()->json(json_encode($response));
    }

    //send fee receive alert
    public function feeReceiveAlert($studentId, $amount)
    {
        $emailIds = [];
        $contactNumbers = [];
        $alert = AlertSetting::select('sms','email','subject','template')->where('event','=','FeeReceive')->first();
        if(!$alert) {

        }else{
            $student = Student::find($studentId);
            $today = Carbon::today()->format('Y-m-d');
            //send alert
            //Dear {{first_name}}, We would like to inform you we are successfully received {{amount}} on {{date}}. Thank you for the Deposit.
            $subject = $alert->subject;
            $message = $alert->template;
            $message = str_replace('{{first_name}}', $student->first_name, $message );
            $message = str_replace('{{amount}}', $amount, $message );
            $message = str_replace('{{date}}', $today, $message );
            $emailIds[] = $student->email;
            $contactNumbers[] = $this->getStudentMobileNumber($student->id);

            /*Now Send SMS On First Mobile Number*/
            if($alert->sms == 1){
                $contactNumbers = $this->contactFilter($contactNumbers);
                $smssuccess = $this->sendSMS($contactNumbers,$message);
            }

            /*Now Send Email With Subject*/
            if($alert->email == 1){
                $emailIds = $this->emailFilter($emailIds);
                $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
            }

        }
    }


}
