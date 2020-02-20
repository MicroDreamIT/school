<?php
//The Edu Mis

namespace App\Http\Controllers\Account\Fees;

use App\Http\Controllers\CollegeBaseController;
use App\Models\AlertSetting;
use App\Models\BookIssue;
use App\Models\Faculty;
use App\Models\GuardianDetail;
use App\Role;
use App\Models\SmsEmail;
use App\Models\SmsSetting;
use App\Models\Staff;
use App\Models\StaffDesignation;
use App\Models\Student;
use App\Traits\AccountingScope;
use App\Traits\PaymentGatewayScope;
use App\Traits\SmsEmailScope;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class OnlinePaymentController extends CollegeBaseController
{
   /* protected $base_route = 'info.smsemail';
    protected $view_path = 'info.smsemail';
    protected $panel = 'SMS / Email';
    protected $filter_query = [];

    protected $BalanceFees = 'BalanceFees';
    protected $FeeReceive = 'FeeReceive';
    protected $LibraryReturnPeriodOver = 'LibraryReturnPeriodOver';*/


    use PaymentGatewayScope;

    public function __construct()
    {

    }

    public function paymentProcessed(Request $request)
    {
        dd('payment processed');
        dd($request->all());

        /*$data = [];
        $data['rows'] = SmsEmail::select('id', 'subject', 'message', 'sms', 'email', 'group','status')
            ->latest()
            ->get();
        //dd($data['rows']->toarray());
        return view(parent::loadDataToView($this->view_path . '.index'), compact('data'));*/

    }





}