<?php
//The Edu Mis

namespace App\Http\Controllers\Account\Report;

use App\Http\Controllers\CollegeBaseController;
use App\Models\BankTransaction;
use App\Models\FeeCollection;
use App\Models\SalaryPay;
use App\Models\Transaction;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use URL;
class FeeCollectionReportController extends CollegeBaseController
{
    protected $base_route = 'account.report.fee-collection-head';
    protected $view_path = 'account.report.fee-collection-head';
    protected $panel = 'Fee Collection Report';
    protected $filter_query = [];

    public function __construct()
    {


    }

    public function feecollection(Request $request)
    {
        $data = [];
        $date = Carbon::now()->toDateString();
        if($request->all()){
            if($request->report_type && $request->start_date && $request->end_date) {
                if($request->report_type == 'daily') {
                    $period = CarbonPeriod::create($request->start_date, $request->end_date);
                    foreach ($period as $key => $date) {
                        $data['print_head'] = 'CASH BOOK - DAILY';
                        $data[$key]['table_head'] = Carbon::parse($date)->format('m/d/Y');
                        $data[$key]['total']['opening'] = $this->openingBalance($date);
                        $data[$key]['fee_collection'] = $this->dateFeeCollection($date);
                        $data[$key]['salary_pay'] = $this->dateSalaryPay($date);
                        $data[$key]['bank_transaction'] = $this->dateBankTransaction($date);
                        $data[$key]['transaction'] = $this->dateTransaction($date);

                        $feeCr = $data[$key]['fee_collection'];
                        $salaryDr = $data[$key]['salary_pay'];
                        $bankDr = $data[$key]['bank_transaction']->sum('dr_amt');
                        $bankCr = $data[$key]['bank_transaction']->sum('cr_amt');
                        $trDr = $data[$key]['transaction']->sum('dr_amount');
                        $trCr = $data[$key]['transaction']->sum('cr_amount');
                        $data[$key]['total']['coh'] = ($feeCr + $bankCr + $trCr + $data[$key]['total']['opening']) - ($salaryDr + $bankDr + $trDr);
                        $data[$key]['total']['cr'] = $feeCr + $bankCr + $trCr + $data[$key]['total']['opening'];
                        $data[$key]['total']['dr'] = $salaryDr + $bankDr + $trDr + $data[$key]['total']['coh'];
                        $key = $key;
                    }
                    $data['keys'] = $key;
                    $data['tag'] = $request->report_type;
                    $data['url'] = URL::current();
                    $data['row'] = collect($data);
                    return view(parent::loadDataToView($this->view_path . '.index'), compact('data'));
                }
                elseif($request->report_type == 'weekly'){
                    $period = CarbonPeriod::create($request->start_date, $request->end_date)->week();
                    foreach ($period as $key => $date) {
                        $data['print_head'] = 'CASH BOOK - WEEKLY';
                        $data[$key]['table_head'] = Carbon::parse($date)->format('m/d/Y') . ' - ' . Carbon::parse($date->clone()->addWeek()->subDay(1))->format('m/d/Y');
                        $data[$key]['total']['opening'] = $this->openingBalance($date);
                        $data[$key]['fee_collection'] = $this->dateRangeFeeCollection($date,$date->clone()->addWeek()->subDay(1));
                        $data[$key]['salary_pay'] = $this->dateRangeSalaryPay($date,$date->clone()->addWeek()->subDay(1));
                        $data[$key]['bank_transaction'] = $this->dateRangeBankTransaction($date,$date->clone()->addWeek()->subDay(1));
                        $data[$key]['transaction'] = $this->dateRangeTransaction($date,$date->clone()->addWeek()->subDay(1));

                        $feeCr = $data[$key]['fee_collection'];
                        $salaryDr = $data[$key]['salary_pay'];
                        $bankDr = $data[$key]['bank_transaction']->sum('dr_amt');
                        $bankCr = $data[$key]['bank_transaction']->sum('cr_amt');
                        $trDr = $data[$key]['transaction']->sum('dr_amount');
                        $trCr = $data[$key]['transaction']->sum('cr_amount');
                        $data[$key]['total']['coh'] = ($feeCr + $bankCr + $trCr + $data[$key]['total']['opening']) - ($salaryDr + $bankDr + $trDr);
                        $data[$key]['total']['cr'] = $feeCr + $bankCr + $trCr + $data[$key]['total']['opening'];
                        $data[$key]['total']['dr'] = $salaryDr + $bankDr + $trDr + $data[$key]['total']['coh'];
                        $key = $key;
                    }
                    $data['keys'] = $key;
                    $data['tag'] = $request->report_type;
                    $data['url'] = URL::current();
                    $data['row'] = collect($data);
                    return view(parent::loadDataToView($this->view_path . '.index'), compact('data'));
                }
                elseif($request->report_type == 'monthly'){
                    $period = CarbonPeriod::create($request->start_date, $request->end_date)->month();
                    foreach ($period as $key => $date) {
                        $data['print_head'] = 'CASH BOOK - MONTHLY';
                        $data[$key]['table_head'] = Carbon::parse($date)->format('m/d/Y') . ' - ' . Carbon::parse($date->clone()->addMonth()->subDay(1))->format('m/d/Y') ;
                        $data[$key]['total']['opening'] = $this->openingBalance($date);
                        $data[$key]['fee_collection'] = $this->dateRangeFeeCollection($date,$date->clone()->addMonth()->subDay(1));
                        $data[$key]['salary_pay'] = $this->dateRangeSalaryPay($date,$date->clone()->addMonth()->subDay(1));
                        $data[$key]['bank_transaction'] = $this->dateRangeBankTransaction($date,$date->clone()->addMonth()->subDay(1));
                        $data[$key]['transaction'] = $this->dateRangeTransaction($date,$date->clone()->addMonth()->subDay(1));

                        $feeCr = $data[$key]['fee_collection'];
                        $salaryDr = $data[$key]['salary_pay'];
                        $bankDr = $data[$key]['bank_transaction']->sum('dr_amt');
                        $bankCr = $data[$key]['bank_transaction']->sum('cr_amt');
                        $trDr = $data[$key]['transaction']->sum('dr_amount');
                        $trCr = $data[$key]['transaction']->sum('cr_amount');
                        $data[$key]['total']['coh'] = ($feeCr + $bankCr + $trCr + $data[$key]['total']['opening']) - ($salaryDr + $bankDr + $trDr);
                        $data[$key]['total']['cr'] = $feeCr + $bankCr + $trCr + $data[$key]['total']['opening'];
                        $data[$key]['total']['dr'] = $salaryDr + $bankDr + $trDr + $data[$key]['total']['coh'];
                        $key = $key;
                    }
                    $data['keys'] = $key;
                    $data['tag'] = $request->report_type;
                    $data['url'] = URL::current();
                    $data['row'] = collect($data);
                    return view(parent::loadDataToView($this->view_path . '.index'), compact('data'));
                }
                elseif($request->report_type == 'yearly'){
                    $period = CarbonPeriod::create($request->start_date, $request->end_date)->year();
                    foreach ($period as $key => $date) {
                        $data['print_head'] = 'CASH BOOK - YEARLY';
                        $data[$key]['table_head'] = Carbon::parse($date)->format('m/d/Y') . ' - ' . Carbon::parse($date->clone()->addYear()->subDay(1))->format('m/d/Y');

                        $data[$key]['total']['opening'] = $this->openingBalance($date);
                        $data[$key]['fee_collection'] = $this->dateRangeFeeCollection($date,$date->clone()->addYear()->subDay(1));
                        $data[$key]['salary_pay'] = $this->dateRangeSalaryPay($date,$date->clone()->addYear()->subDay(1));
                        $data[$key]['bank_transaction'] = $this->dateRangeBankTransaction($date,$date->clone()->addYear()->subDay(1));
                        $data[$key]['transaction'] = $this->dateRangeTransaction($date,$date->clone()->addYear()->subDay(1));

                        $feeCr = $data[$key]['fee_collection'];
                        $salaryDr = $data[$key]['salary_pay'];
                        $bankDr = $data[$key]['bank_transaction']->sum('dr_amt');
                        $bankCr = $data[$key]['bank_transaction']->sum('cr_amt');
                        $trDr = $data[$key]['transaction']->sum('dr_amount');
                        $trCr = $data[$key]['transaction']->sum('cr_amount');
                        $data[$key]['total']['coh'] = ($feeCr + $bankCr + $trCr + $data[$key]['total']['opening']) - ($salaryDr + $bankDr + $trDr);
                        $data[$key]['total']['cr'] = $feeCr + $bankCr + $trCr + $data[$key]['total']['opening'];
                        $data[$key]['total']['dr'] = $salaryDr + $bankDr + $trDr + $data[$key]['total']['coh'];
                        $key = $key;
                    }
                    $data['keys'] = $key;
                    $data['tag'] = $request->report_type;
                    $data['url'] = URL::current();
                    $data['row'] = collect($data);
                    return view(parent::loadDataToView($this->view_path . '.index'), compact('data'));
                }
                else{

                }

            }
            elseif (!$request->report_type && $request->start_date && $request->end_date) {
                $data['print_head'] = 'CASH BOOK - [ ' . Carbon::parse($request->start_date)->format('m/d/Y') . ' - ' . Carbon::parse($request->end_date)->format('m/d/Y') . ']';
                //calculate Opening Balance
                $data['total']['opening'] = $this->openingBalance($request->start_date);

                $data['fee_collection'] = $this->dateRangeFeeCollection($request->start_date,$request->end_date);
                $data['salary_pay'] = $this->dateRangeSalaryPay($request->start_date,$request->end_date);
                $data['bank_transaction'] = $this->dateRangeBankTransaction($request->start_date,$request->end_date);
                $data['transaction'] = $this->dateRangeTransaction($request->start_date,$request->end_date);

                $feeCr = $data['fee_collection'];
                $salaryDr = $data['salary_pay'];
                $bankDr = $data['bank_transaction']->sum('dr_amt');
                $bankCr = $data['bank_transaction']->sum('cr_amt');
                $trDr = $data['transaction']->sum('dr_amount');
                $trCr = $data['transaction']->sum('cr_amount');
                $data['total']['coh'] = ($feeCr + $bankCr + $trCr + $data['total']['opening']) - ($salaryDr + $bankDr + $trDr);
                $data['total']['cr'] = $feeCr + $bankCr + $trCr + $data['total']['opening'];
                $data['total']['dr'] = $salaryDr + $bankDr + $trDr + $data['total']['coh'];
            }
            else{
                $request->session()->flash($this->message_warning,'Filter With Date Range.');
                redirect()->back();
            }

        }else{
            $data['print_head'] = 'Fee Collection Heads - '.Carbon::parse($date)->format('m/d/Y');
           // $data['total']['opening'] = $this->openingBalance($date);
            //dd($date);
            $data['fee_collection'] = $this->dateFeeCollection($date)->groupBy('fee_head');
            $data['fee_collection_total'] = $this->dateFeeCollection($date)->sum('paid_amount');
            //dd($data['fee_collection']->groupBy('fee_head')->sum('paid_amount'));
           // $data['salary_pay'] = $this->dateSalaryPay($date);
            //$data['bank_transaction'] = $this->dateBankTransaction($date);
           // $data['transaction'] = $this->dateTransaction($date);

            /*$feeCr = $data['fee_collection'];
            $salaryDr = $data['salary_pay'];
            $bankDr = $data['bank_transaction']->sum('dr_amt');
            $bankCr = $data['bank_transaction']->sum('cr_amt');
            $trDr = $data['transaction']->sum('dr_amount');
            $trCr = $data['transaction']->sum('cr_amount');
            $data['total']['coh'] = ($feeCr+$bankCr+$trCr+$data['total']['opening'])-($salaryDr+$bankDr+$trDr);
            $data['total']['cr'] = $feeCr+$bankCr+$trCr+$data['total']['opening'];
            $data['total']['dr'] = $salaryDr+$bankDr+$trDr+$data['total']['coh'];*/
        }


        $data['faculties'] = $this->activeFaculties();
        $data['batch'] = $this->activeBatch();
        $data['academic_status'] = $this->activeStudentAcademicStatus();
        $data['payment_method'] = $this->activePaymentMethod();
        $data['fee_heads'] = $this->activeFeeHead();

        $data['filter_query'] = $this->filter_query;
        $data['url'] = URL::current();
        $data['tag'] = 'today';
//        dd(($this->view_path.'.index'));
        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    //date range
    public function dateRangeFeeCollection($start_date, $end_date)
    {
        //dd($start_date.' - '.$end_date);
        $feeCollection = FeeCollection::select('id', 'date', 'discount', 'fine', 'paid_amount')
            ->whereBetween('date', [$start_date, $end_date])
            ->sum('paid_amount');
        return $feeCollection;
    }

    public function dateRangeSalaryPay($start_date, $end_date)
    {
        $salaryPay = SalaryPay::select('id', 'date', 'allowance', 'fine', 'paid_amount')
            ->whereBetween('date', [$start_date, $end_date])
            ->sum('paid_amount');
        return $salaryPay;
    }

    public function dateRangeBankTransaction($start_date, $end_date)
    {
        $bankTransaction = BankTransaction::select('id', 'banks_id', 'deposit_id', 'date', 'dr_amt', 'cr_amt')
            ->whereBetween('date', [$start_date, $end_date])
            ->get();

        return $bankTransaction;
    }

    public function dateRangeTransaction($start_date, $end_date)
    {
        $transaciton = Transaction::select('id', 'date', 'tr_head_id', 'dr_amount', 'cr_amount')
            ->whereBetween('date', [$start_date, $end_date])
            ->get();

        return $transaciton;
    }

    //single date
    public function dateFeeCollection($date)
    {
        $feeCollection = FeeCollection::select('fee_collections.students_id', 'fee_collections.fee_masters_id',
            'fee_collections.date', 'fee_collections.discount', 'fee_collections.fine', 'fee_collections.paid_amount',
            'fee_collections.payment_mode','fee_collections.note','fee_collections.created_by','fee_collections.status as fc_status',
            'fm.status as fm_status','fm.fee_head')
            ->whereDate('fee_collections.date', '=', $date)
            ->join('fee_masters as fm','fm.id','=','fee_collections.fee_masters_id')
            ->orderBy('fee_collections.created_at','desc')
            ->get();

        return $feeCollection;
        /*$feeCollection = FeeCollection::select('id','date', 'discount', 'fine', 'paid_amount')
            ->where('date',$date)
            ->sum('paid_amount');
        return $feeCollection;*/

        /*$feeCollection = FeeCollection::select('fee_collections.students_id', 'fee_collections.fee_masters_id',
            'fee_collections.date', 'fee_collections.discount', 'fee_collections.fine', 'fee_collections.paid_amount',
            'fee_collections.payment_mode','fee_collections.note','fee_collections.created_by','fee_collections.status as fc_status',
            'fm.status as fm_status','fm.fee_head',
            'students.reg_no','students.reg_date', 'students.first_name','students.middle_name', 'students.last_name','students.semester')
            ->whereYear('fee_collections.date', '=', $date)
            ->join('students', 'students.id','=','fee_collections.students_id')
            ->join('fee_masters as fm','fm.id','=','fee_collections.fee_masters_id')
            ->orderBy('fee_collections.created_at','desc')
            ->get();

        return $feeCollection;*/


    }

    public function dateSalaryPay($date)
    {
        $salaryPay = SalaryPay::select('id','date', 'allowance', 'fine', 'paid_amount')
            ->where('date',$date)
            ->sum('paid_amount');
        return $salaryPay;
    }

    public function dateBankTransaction($date)
    {
        $bankTransaction = BankTransaction::select('id','banks_id', 'deposit_id','date','dr_amt','cr_amt')
            ->where('date',$date)
            ->get();

        return $bankTransaction;
    }

    public function dateTransaction($date)
    {
        $transaciton = Transaction::select('id','date', 'tr_head_id', 'dr_amount','cr_amount')
            ->where('date',$date)
            ->get();

        return $transaciton;
    }

    public function openingBalance($date)
    {
        $feeCollection = FeeCollection::select('id','date', 'discount', 'fine', 'paid_amount')
            ->where('date','<',$date)
            ->sum('paid_amount');
        $data['fee_collection'] = $feeCollection;

        $salaryPay = SalaryPay::select('id','date', 'allowance', 'fine', 'paid_amount')
            ->where('date','<',$date)
            ->sum('paid_amount');
        $data['salary_pay'] = $salaryPay;

        $data['bank_transaction'] = BankTransaction::select('id','banks_id', 'deposit_id','date','dr_amt','cr_amt')
            ->where('date','<',$date)
            ->get();

        $data['transaction'] = Transaction::select('id','date', 'tr_head_id', 'dr_amount','cr_amount')
            ->where('date','<',$date)
            ->get();

        $feeCr = $data['fee_collection'];
        $salaryDr = $data['salary_pay'];
        $bankDr = $data['bank_transaction']->sum('dr_amt');
        $bankCr = $data['bank_transaction']->sum('cr_amt');
        $trDr = $data['transaction']->sum('dr_amount');
        $trCr = $data['transaction']->sum('cr_amount');
        $oB = ($feeCr+$bankCr+$trCr)-($salaryDr+$bankDr+$trDr);
        return $oB;
    }

}
