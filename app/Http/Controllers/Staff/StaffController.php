<?php
//The Edu Mis

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Staff\Registration\AddValidation;
use App\Http\Requests\Staff\Registration\EditValidation;
use App\Models\Attendance;
use App\Models\AttendanceStatus;
use App\Models\Attendence;
use App\Models\BookIssue;
use App\Models\Document;
use App\Models\Hostel;
use App\Models\LibraryMember;
use App\Models\Note;
use App\Models\ResidentHistory;
use App\Models\Route;
use App\Models\Staff;
use App\Models\StaffDesignation;
use App\Models\TransportHistory;
use App\Traits\UserScope;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image, URL;
use LaravelQRCode\Facades\QRCode;
use Libern\QRCodeReader\QRCodeReader;
use ViewHelper;

class StaffController extends CollegeBaseController
{
    protected $base_route = 'staff';
    protected $view_path = 'staff';
    protected $panel = 'Staffs';
    protected $folder_path;
    protected $folder_name = 'staff';
    protected $filter_query = [];

    use UserScope;

    public function __construct()
    {
        $this->folder_path = public_path().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR;
    }

    public function index(Request $request)
    {
        $data = [];
        $data['staff'] = Staff::select('id','reg_no', 'first_name',  'middle_name', 'last_name',
             'mobile_1','designation', 'qualification', 'status')
            ->where(function ($query) use ($request) {
                $this->commonStaffFilterCondition($query, $request);
            })
            ->get();

        $data['designation'] = $this->staffDesignationList();

        //for Quick services Creation
        /*Hostel List*/
        $data['hostels'] = $this->activeHostel();
        /*Transport Route List*/
        $data['routes'] = $this->activeTransportRoutes();

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;

        return response()->json($data);
    }

    public function add()
    {
        $data = [];
        $data['designations'] = $this->staffDesignationList();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        if ($request->hasFile('main_image')){
            $image_name = parent::uploadImages($request, 'main_image');
        }else{
            $image_name = "";
        }

        $request->merge(['created_by' => auth()->user()->id]);
        $request->merge(['staff_image' => $image_name]);

        Staff::create($request->all());
        return response()->json(['success', $this->panel . ' Created Successfully.']);

    }

    public function view($id)
    {
        $data = [];
        $data['staff'] = Staff::select('id','reg_no', 'join_date', 'first_name',  'middle_name', 'last_name',
            'father_name', 'mother_name', 'date_of_birth', 'gender', 'blood_group', 'nationality','mother_tongue', 'address', 'state', 'country',
            'temp_address', 'temp_state', 'temp_country', 'home_phone', 'mobile_1', 'mobile_2', 'email', 'qualification',
            'experience', 'experience_info', 'other_info','staff_image', 'status')
            ->where('id','=',$id)
            ->first();

        if (!$data['staff']){
            request()->session()->flash($this->message_warning, "Not a Valid Staff");
            return redirect()->route($this->base_route);
        }

        $data['payroll_master'] = $data['staff']->payrollMaster()->orderBy('due_date','desc')->get();
        $data['pay_salary'] = $data['staff']->paySalary()->get();

        /*total Calculation on Table Foot*/
        $data['staff']->amount = $data['staff']->payrollMaster()->sum('amount');
        $data['staff']->allowance = $data['staff']->paySalary()->sum('allowance');
        $data['staff']->fine = $data['staff']->paySalary()->sum('fine');
        $data['staff']->paid_amount = $data['staff']->paySalary()->sum('paid_amount');
        $data['staff']->balance =
            ($data['staff']->amount + $data['staff']->allowance) - ($data['staff']->paid_amount + $data['staff']->fine) ;

        $data['lib_member'] = LibraryMember::where(['library_members.user_type' => 2, 'library_members.member_id' => $data['staff']->id])
            ->first();

        if($data['lib_member'] != null){
            $data['books_history'] = $data['lib_member']->libBookIssue()->select('book_issues.id', 'book_issues.member_id',
                'book_issues.book_id',  'book_issues.issued_on', 'book_issues.due_date','book_issues.return_date', 'b.book_masters_id',
                'b.book_code', 'bm.title','bm.categories')
                ->join('books as b','b.id','=','book_issues.book_id')
                ->join('book_masters as bm','bm.id','=','b.book_masters_id')
                ->orderBy('book_issues.issued_on', 'desc')
                ->get();
        }

        $attendanceCollection = Attendance::select('attendances.id', 'attendances.attendees_type', 'attendances.link_id',
            'attendances.years_id', 'attendances.months_id', 'attendances.day_1', 'attendances.day_2', 'attendances.day_3',
            'attendances.day_4', 'attendances.day_5', 'attendances.day_6', 'attendances.day_7', 'attendances.day_8',
            'attendances.day_9', 'attendances.day_10', 'attendances.day_11', 'attendances.day_12', 'attendances.day_13',
            'attendances.day_14', 'attendances.day_15', 'attendances.day_16', 'attendances.day_17', 'attendances.day_18',
            'attendances.day_19', 'attendances.day_20', 'attendances.day_21', 'attendances.day_22', 'attendances.day_23',
            'attendances.day_24', 'attendances.day_25', 'attendances.day_26', 'attendances.day_27', 'attendances.day_28',
            'attendances.day_29', 'attendances.day_30', 'attendances.day_31', 'attendances.day_32')
            ->where('attendances.attendees_type', 2)
            ->where('attendances.link_id',$data['staff']->id)
            ->join('staff as s', 's.id', '=', 'attendances.link_id')
            ->orderBy('attendances.years_id','asc')
            ->orderBy('attendances.months_id','asc')
            ->get();

        $attendanceStatus = AttendanceStatus::get();
        $filteredAttendance = $attendanceCollection->filter(function ($attendance, $key) use($attendanceStatus) {
            for ($day = 1; $day <= 32; $day++) {
                $dayCode = "day_".$day;
                foreach ($attendanceStatus as $attenStatus){
                    if($attendance->$dayCode == $attenStatus->id){
                        $attenTitle = $attenStatus->title;
                        $attendance->$attenTitle = $attendance->$attenTitle + 1;
                    }
                }
            }

            return $attendance;
        });

        $data['attendance'] = $filteredAttendance;
        $data['attendanceStatus'] = $attendanceStatus;

        $data['note'] = Note::select('created_at', 'id', 'member_type','member_id','subject', 'note', 'status')
            ->where('member_type','=','staff')
            ->where('member_id','=', $data['staff']->id)
            ->orderBy('created_at','desc')
            ->get();

        $data['document'] = Document::select('id', 'member_type','member_id', 'title', 'file','description', 'status')
            ->where('member_type','=','staff')
            ->where('member_id','=',$data['staff']->id)
            ->orderBy('created_by','desc')
            ->get();

        $data['history'] = ResidentHistory::select('resident_histories.years_id', 'resident_histories.hostels_id',
            'resident_histories.rooms_id', 'resident_histories.beds_id',
            'resident_histories.history_type','resident_histories.created_at')
            ->where([['r.user_type','=', 2],['r.member_id','=',$data['staff']->id]])
            ->join('residents as r', 'r.id', '=', 'resident_histories.residents_id')
            ->join('beds as b', 'b.id', '=', 'resident_histories.beds_id')
            ->orderBy('resident_histories.created_at')
            ->get();


        /*Transport History*/
        $data['transport_history'] = TransportHistory::with(['vehicle', 'route','year'])->select('transport_histories.id', 'transport_histories.years_id',
            'transport_histories.routes_id', 'transport_histories.vehicles_id',  'transport_histories.history_type',
            'transport_histories.created_at','tu.user_type')
            ->where([['tu.user_type','=', 2],['tu.member_id','=',$data['staff']->id]])
            ->join('transport_users as tu','tu.id','=','transport_histories.travellers_id')
            ->orderBy('transport_histories.created_at')
            ->get();

        //login credential
        $data['staff_login'] = User::where([['role_id',5],['hook_id',$data['staff']->id]])->first();
        $data['folder_path'] = $this->folder_path;
        return response()->json($data);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Staff::find($id)) return parent::invalidRequest();

        $data['designations'] = $this->staffDesignationList();

        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {
        $data = [];
        if (!$row = Staff::find($id))
            return parent::invalidRequest();

        if ($request->hasFile('main_image')){
            $image_name = parent::uploadImages($request, 'main_image');

            // remove old image from folder
            if (file_exists($this->folder_path.$row->staff_image))
                @unlink($this->folder_path.$row->staff_image);
        }

        $request->merge(['last_updated_by' => auth()->user()->id]);
        $request->merge(['staff_image' => isset($image_name)?$image_name:$row->staff_image]);

        $row->update($request->all());

        return response()->json(['success', $this->panel. ' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        $errCount = 0;
        $errors = [];
        if (!$row = Staff::find($id)) return parent::invalidRequest();

        //User
        $userInfo = User::where(['role_id' => 5, 'hook_id'=> $id])->first();
        if($userInfo) {
            $errCount = $errCount+1;
            $errors[] = "User Found, Please Delete.";
        }

        //Document & Notes
            //Documents
            $document = $row->staffDocuments()->get();
            if($document->count() > 0){
                $errCount = $errCount+1;
                $errors[] = "Documents Found, Please Delete.";
            }

            //Notes
            $notes = $row->staffNotes()->get();
            if($notes->count() > 0){
            $errCount = $errCount+1;
            $errors[] = "Notes Found, Please Delete.";
        }

        //Payroll Master, Salary Pay
        $payrollMaster = $row->payrollMaster()->get();
        if($payrollMaster->count() > 0){
            $paySalary = $row->paySalary()->get();
            if($paySalary->count() > 0){
                $errCount = $errCount+1;
                $errors[] = "Salary Paid Found, Please Delete.";
            }
            $errCount = $errCount+1;
            $errors[] = "Salary Master Found, Please Delete.";
        }

        //Transport
        $transportUser = $row->transportUser()->get();
        if($transportUser->count() > 0){
            $transportHistory = TransportHistory::where('travellers_id',$transportUser->first()->id)->get();
            if($transportHistory->count() > 0){
                $errCount = $errCount+1;
                $errors[] = "Transport History Found, Please Delete.";
            }
            $errCount = $errCount+1;
            $errors[] = "Transport User Found, Please Delete.";
        }

        //Hostel
        $hostelResident = $row->hostelResident()->get();
        if($hostelResident->count() > 0){
            $residentHistory = ResidentHistory::where('residents_id',$hostelResident->first()->id)->get();
            if($residentHistory->count() > 0){
                $errCount = $errCount+1;
                $errors[] = "Hostel Resident History Found, Please Delete.";
            }
            $errCount = $errCount+1;
            $errors[] = "Hostel Resident Found, Please Delete.";
        }

        //attendance (regular & Subject)
        //Regular Attendance
        $attendacne = $row->regularAttendance()->get();
        if($attendacne->count() > 0){
            $errCount = $errCount+1;
            $errors[] = "Regular Attendance Found, Please Delete.";
        }

        //library Membership & History
        $libraryMember = $row->libraryMember()->get();
        if($libraryMember->count() > 0){
            $bookIssue = BookIssue::where('member_id',$libraryMember->first()->id)->get();
            if($bookIssue->count() > 0){
                $errCount = $errCount+1;
                $errors[] = "Book Issue Found, Please Delete.";
            }
            $errCount = $errCount+1;
            $errors[] = "Library Member Found, Please Delete.";
        }

        if($errCount > 0){
            return response()->json(['error', $this->panel.' not delete. If you want to erase student data, please check err below and delete all the data first.']);
        }else{
            //remove images
            if (file_exists($this->folder_path.$row->staff_image))
                @unlink($this->folder_path.$row->staff_image);

            $row->delete();
            return response()->json(['success', $this->panel.' Deleted Successfully.']);
        }

    }

    public function active(request $request, $id)
    {
        if (!$row = Staff::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'active']);

        $row->update($request->all());
        return response()->json(['success',$row->reg_no.' '.$this->panel.' active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Staff::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'in-active']);

        $row->update($request->all());
        return response()->json(['danger',$row->reg_no.' '.$this->panel.' In-Active Successfully..']);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = Staff::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            /*
                             * $row = Staff::find($row_id);
                            if (file_exists($this->folder_path.$row->staff_image))
                            @unlink($this->folder_path.$row->staff_image);
                            $row->delete();
                                */
                            $data = $this->delete($request, $row_id);
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json(['success',$request->get('bulk_action'). ' Action Successfully.']);
                else
                    return response()->json(['danger','Deleted successfully.']);


            } else {
                return response()->json(['warning','Please, Check at least one row.']);
            }

        } else return parent::invalidRequest();

    }

    /*bulk import*/
    public function importStaff()
    {
        return view(parent::loadDataToView($this->view_path.'.import'));
    }

    public function handleImportStaff(Request $request)
    {
        //file present or not validation
        $validator = Validator::make($request->all(), [
            'file' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator);
        }

        $file = $request->file('file');
        $csvData = file_get_contents($file);
        $rows = array_map("str_getcsv", explode("\n", $csvData));
        $header = array_shift($rows);

        foreach ($rows as $row) {
            if (count($header) != count($row)) {
                continue;
            }

            $row = array_combine($header, $row);
            //Designation id
            $designation = StaffDesignation::where('title',$row['designation'])->first();
            if($designation){
                $designationId = $designation->id;
            }else{
                $designation = StaffDesignation::create([
                    'title' => strtoupper($row['designation']),
                    'created_by' => auth()->user()->id
                ]);

                $designationId = $designation->id;
            }

            //Staff validation
            $validator = Validator::make($row, [
                'reg_no'                => 'required  | unique:staff,reg_no',
                'join_date'              => 'required',
                'designation'           => 'required',
                'first_name'            => 'required',
                'last_name'             => 'required',
                'date_of_birth'         => 'required',
                'gender'                => 'required',
                'email'                 => 'required | unique:staff,email',
                'qualification'         => 'required',
                'mobile_1'              => 'required',
                'main_image'           => 'mimes:jpeg,bmp,png',
            ]);
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator);
            }


            /*Manage Date's Format*/
            $join_date = Carbon::parse($row['join_date'])->format('Y-m-d');
            $date_of_birth =  Carbon::parse($row['date_of_birth'])->format('Y-m-d');

            //Staff import
            Staff::create([
              "reg_no"              => $row['reg_no'],
              "join_date"           => $join_date,
              "designation"         => $designationId,
              "first_name"          => $row['first_name'],
              "middle_name"         => $row['middle_name'],
              "last_name"           => $row['last_name'],
              "father_name"         => $row['father_name'],
              "mother_name"         => $row['mother_name'],
              "date_of_birth"       => $date_of_birth,
              "gender"              => $row['gender'],
              "blood_group"         => $row['blood_group'],
              "nationality"         => $row['nationality'],
              "mother_tongue"       => $row['mother_tongue'],
              "email"               => $row['email'],
              "home_phone"          => $row['home_phone'],
              "mobile_1"            => $row['mobile_1'],
              "mobile_2"            => $row['mobile_2'],
              "address"             => $row['address'],
              "state"               => $row['state'],
              "country"             => $row['country'],
              "temp_address"        => $row['temp_address'],
              "temp_state"          => $row['temp_state'],
              "temp_country"        => $row['temp_country'],
              "qualification"       => $row['qualification'],
              "experience"          => $row['experience'],
              "experience_info"     => $row['experience_info'],
              "other_info"          => $row['other_info'],
              'created_by'          => auth()->user()->id

            ]);

        }

        $request->session()->flash($this->message_success,'Staffs imported Successfully');
        return redirect()->route($this->base_route);

    }
}
