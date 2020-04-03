<?php
//The Edu Mis

namespace App\Http\Controllers\Transport;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Transport\User\AddValidation;
use App\Http\Requests\Transport\User\EditValidation;
use App\Models\AlertSetting;
use App\Models\TransportUser;
use App\Models\TransportHistory;
use App\Models\RouteVehicle;
use App\Models\Route;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Year;
use App\Traits\SmsEmailScope;
use App\Traits\TransportScope;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;
use URL;

class TransportUserController extends CollegeBaseController
{
    protected $base_route = 'transport.user';
    protected $view_path = 'transport.user';
    protected $panel = 'Transport User';
    protected $filter_query = [];

    use SmsEmailScope;
    use TransportScope;

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $data = [];
        $data['user'] = TransportUser::with(['route','vehicle'])
            ->where(function ($query) use ($request) {
                if ($request->get('user_type') !== '' & $request->get('user_type') > 0) {
                    $query->where('user_type', '=', $request->get('user_type'));
                    $this->filter_query['user_type'] = $request->get('user_type');
                }

                if ($request->reg_no != null) {
                    if ($request->get('user_type') !== '' & $request->get('user_type') > 0) {
                        if ($request->has('user_type') == 1) {
                            $studentId = $this->getStudentIdByReg($request->reg_no);
                            $query->where('member_id', '=', $studentId);
                            $this->filter_query['member_id'] = $studentId;
                        }
                        if ($request->has('user_type') == 2) {
                            $staffId = $this->getStaffByReg($request->reg_no);
                            $query->where('member_id', '=', $studentId);
                            $this->filter_query['member_id'] = $staffId;
                        }
                    }

                }

                if ($request->get('route') !== '' & $request->get('route') > 0) {
                    $query->where('routes_id', '=', $request->get('route'));
                    $this->filter_query['routes_id'] = $request->get('route');
                }

                if ($request->get('vehicle_select') !== '' & $request->get('vehicle_select') > 0) {
                    $query->where('vehicles_id', '=', $request->get('vehicle_select'));
                    $this->filter_query['vehicles_id'] = $request->get('vehicle_select');
                }


                if ($request->get('status') !== '' & $request->get('status') > 0) {
                    $query->where('status', $request->get('status') == '1' ? 1 : 0);
                    $this->filter_query['status'] = $request->get('status');
                }
            })
            ->get();

        /*Route List*/
        $routes = Route::select('id', 'title')->get();
        $map_routes = array_pluck($routes, 'title', 'id');
        $data['routes'] = array_prepend($map_routes, 'Select Route...', '0');

        /*Active Route For Shift List*/
        /*Route List*/
        $routes = Route::select('id', 'title')->Active()->get();
        $map_routes = array_pluck($routes, 'title', 'id');
        $data['active_routes'] = array_prepend($map_routes, 'Select Route...', '0');

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;
        return response()->json($data);
    }

    public function add(Request $request)
    {
        $data = [];
        $data['routes'] = $this->activeTransportRoutes();
        $data['reg_no'] = '';
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $message_type = '';
        $message = '';
        $userType = $request->get('user_type');
        $regNo = $request->get('reg_no');
        $status = $request->get('status');
        $route = (integer) $request->get('route');
        $vehicle = (integer) $request->get('vehicle_select');

        $year = Year::where('active_status', '=', 1)->first();
        if (!$year) {
            return response()->json(['warning', ' Active Year Not Found.Please, Set Year For History Record.']);
        }

        /*User Type and User Verification. only valid student or staff will get membership*/
        if ($userType && $regNo) {
            switch ($userType) {
                case 1:
                    $data = Student::where('reg_no', '=', $regNo)->first();
                    break;
                case 2:
                    $data = Staff::where('reg_no', '=', $regNo)->first();
                    break;
                default:
                    return parent::invalidRequest();
            }
        } else {
            return response()->json(['warning', ' Registration Number or User Type is not Valid.']);
        }

        if (isset($data)) {
            $request->merge(['routes_id' => $route]);
            $request->merge(['vehicles_id' => $vehicle]);
            $request->merge(['user_type' => $userType]);
            $request->merge(['member_id' => $data->id]);
            $request->merge(['status' => $status]);
            $request->merge(['created_by' => auth()->user()->id]);

            /*Check Member Alreday Register or not*/
            $UserStatus = TransportUser::where(['user_type' => $request->user_type, 'member_id' => $data->id])->orderBy('id', 'desc')->first();

            if ($UserStatus) {
                $message_type = 'success';
                $message = $this->panel . ' Already Registered. Please Edit This TransportUser';
            } else {
//                dd($request->all());
                $TransportUserRegister = TransportUser::create($request->all());
                /*check TransportUser Register and add on history table*/
                if ($TransportUserRegister) {
                    $CreateHistory = TransportHistory::create([
                        'years_id' => $year->id,
                        'routes_id' => $route,
                        'vehicles_id' => $vehicle,
                        'travellers_id' => $TransportUserRegister->id,
                        'history_type' => "Registration",
                        'created_by' => auth()->user()->id,
                    ]);

                }

                //send alert
                $memberId = $TransportUserRegister->member_id;
                $userType = $TransportUserRegister->user_type;
                $newTransport = 'Route-' . $this->getRouteNameById($route) . ', Vehicle-' . $this->getVehicleById($vehicle);
                $this->transportRegisterNotify($memberId, $userType, $newTransport);
                //alert end
                $message_type = 'warning';
                $message = $this->panel . ' Created Successfully.';
            }
        } else {
            $message_type = 'warning';
            $message = 'Registration Number or User Type is not Valid.';
        }

        return response()->json([$message_type, $message]);
    }

    public function quickRegister(Request $request)
    {
        //dd($request->all());
        /*
         * "userId" => "1"
          "user_type" => "1"
          "route_assign" => "1"
          "vehicle_assign" => "1"
         * */
        $id = $request->get('userId');
        $userType = $request->get('user_type');
        $status = $request->get('status');
        $route = $request->get('route_assign');
        $vehicle = $request->get('vehicle_assign');

        $year = Year::where('active_status', '=', 1)->first();
        if (!$year) {
            $request->session()->flash($this->message_warning, ' Active Year Not Found.Please, Set Year For History Record.');
            return back();
        }

        /*User Type and User Verification. only valid student or staff will get membership*/
        if ($userType && $id) {
            switch ($userType) {
                case 1:
                    $data = Student::find($id);
                    break;
                case 2:
                    $data = Staff::find($id);
                    break;
                default:
                    return parent::invalidRequest();
            }
        } else {
            $request->session()->flash($this->message_warning, 'Registration Number or User Type is not Valid.');
            return back();
        }

        if (isset($data)) {
            $request->merge(['routes_id' => $route]);
            $request->merge(['vehicles_id' => $vehicle]);
            $request->merge(['user_type' => $userType]);
            $request->merge(['member_id' => $data->id]);
            $request->merge(['status' => $status]);
            $request->merge(['created_by' => auth()->user()->id]);

            /*Check Member Alreday Register or not*/
            $UserStatus = TransportUser::where(['user_type' => $request->user_type, 'member_id' => $data->id])->orderBy('id', 'desc')->first();

            if ($UserStatus) {
                $request->session()->flash($this->message_warning, $this->panel . ' Already Registered. Please Edit This TransportUser');
            } else {
                $TransportUserRegister = TransportUser::create($request->all());
                /*check TransportUser Register and add on history table*/
                if ($TransportUserRegister) {
                    $CreateHistory = TransportHistory::create([
                        'years_id' => $year->id,
                        'routes_id' => $route,
                        'vehicles_id' => $vehicle,
                        'travellers_id' => $TransportUserRegister->id,
                        'history_type' => "Registration",
                        'created_by' => auth()->user()->id,
                    ]);

                }

                //send alert
                $memberId = $TransportUserRegister->member_id;
                $userType = $TransportUserRegister->user_type;
                $newTransport = 'Route-' . $this->getRouteNameById($route) . ', Vehicle-' . $this->getVehicleById($vehicle);
                $this->transportRegisterNotify($memberId, $userType, $newTransport);
                //alert end

                $request->session()->flash($this->message_success, $this->panel . ' Created Successfully.');

            }
        } else {
            $request->session()->flash($this->message_warning, ' Registration Number or User Type is not Valid.');
        }

        return back();

    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = TransportUser::find($id))
            return parent::invalidRequest();


        if ($data['row']->user_type == 1) {
            $data['reg_no'] = Student::find($data['row']->member_id)->reg_no;
        }

        if ($data['row']->user_type == 2) {
            $data['reg_no'] = Staff::find($data['row']->member_id)->reg_no;
        }

        $data['base_route'] = $this->base_route;
        return view(parent::loadDataToView($this->view_path . '.edit'), compact('data'));
    }

    public function update(EditValidation $request, $id)
    {

        if (!$row = TransportUser::find($id)) return parent::invalidRequest();

        /*User Type and User Verification. only valid student or staff will get membership*/
        $userType = $request->get('user_type');
        $regNo = $request->get('reg_no');

        if ($userType && $regNo) {
            switch ($userType) {
                case 1:
                    $data = Student::where('reg_no', '=', $regNo)->first();
                    break;
                case 2:
                    $data = Staff::where('reg_no', '=', $regNo)->first();
                    break;
                default:
                    return parent::invalidRequest();
            }
        } else {
            $request->session()->flash($this->message_warning, ' Registration Number or User Type is not Valid.');
            return back();
        }

        if ($data) {
            $request->merge(['user_type' => $request->get('user_type')]);
            $request->merge(['member_id' => $data->id]);
            $request->merge(['status' => $request->get('status')]);
            $request->merge(['last_updated_by' => auth()->user()->id]);
            /*Check Member Alreday Register or not*/
            $UserStatus = TransportUser::where(['user_type' => $request->user_type, 'member_id' => $data->id])->orderBy('id', 'desc')->first();

            if ($UserStatus->count() > 0) {
                $row->update($request->all());
                $request->session()->flash($this->message_success, $this->panel . ' Updated Successfully.');
            } else {
                $request->session()->flash($this->message_warning, $this->panel . ' Already Registered or Duplicate Registration. Please, Find on TransportUser List and Edit');
            }
        } else {
            $request->session()->flash($this->message_warning, ' Registration Number or User Type is not Valid.');
        }

        return redirect()->route($this->base_route);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = TransportUser::find($id)) return parent::invalidRequest();

        /*Delete History*/
        TransportHistory::where('travellers_id', '=', $row->id)->delete();
        /*Delete TransportUser*/
        $row->delete();

        $request->session()->flash($this->message_success, $this->panel . ' Deleted Successfully.');
        return redirect()->route($this->base_route);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['Active', 'Shift', 'Leave', 'Delete'])) {
            /*Assign request values*/
            $route = $request->get('route_bulk');
            $vehicle = $request->get('vehicle_bulk');
            $year = Year::where('active_status', '=', 1)->first();

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    $row = TransportUser::find($row_id);
                    if ($row) {
                        switch ($request->get('bulk_action')) {
                            case 'Active':
                                if ($route && $vehicle) {
                                    /*TransportUser New Hostel, Vehicle & Bed Assign*/
                                    $active = $row->update([
                                        'routes_id' => $route,
                                        'vehicles_id' => $vehicle,
                                        'status' => 'active'
                                    ]);

                                    if ($active) {
                                        /*Create History for Transfer Future Record*/
                                        TransportHistory::create([
                                            'years_id' => $year->id,
                                            'routes_id' => $route,
                                            'vehicles_id' => $vehicle,
                                            'travellers_id' => $row->id,
                                            'history_type' => "Shift",
                                            'created_by' => auth()->user()->id
                                        ]);

                                        //send alert
                                        $memberId = $row->member_id;
                                        $userType = $row->user_type;
                                        $newTransport = 'Route-' . $this->getRouteNameById($route) . ', Vehicle-' . $this->getVehicleById($vehicle);
                                        $this->transportActiveNotify($memberId, $userType, $newTransport);
                                        //alert end
                                    }

                                    $request->session()->flash($this->message_success, $this->panel . ' Re-Active Successfully.');
                                } else {
                                    $request->session()->flash($this->message_warning, 'Please Select Route & Vehicle for Active.');
                                }

                                break;
                            case 'Shift':
                                if ($route && $vehicle) {
                                    /*TransportUser New Hostel, Vehicle & Bed Assign*/
                                    $shift = $row->update([
                                        'routes_id' => $route,
                                        'vehicles_id' => $vehicle,
                                        'status' => 'active'
                                    ]);

                                    if ($shift) {
                                        /*Create History for Transfer Future Record*/
                                        TransportHistory::create([
                                            'years_id' => $year->id,
                                            'routes_id' => $route,
                                            'vehicles_id' => $vehicle,
                                            'travellers_id' => $row->id,
                                            'history_type' => "Shift",
                                            'created_by' => auth()->user()->id
                                        ]);

                                        //send alert
                                        $memberId = $row->member_id;
                                        $userType = $row->user_type;
                                        $newTransport = 'Route-' . $this->getRouteNameById($route) . ', Vehicle-' . $this->getVehicleById($vehicle);
                                        $this->transportShiftNotify($memberId, $userType, $newTransport);
                                        //alert end
                                    }

                                    $request->session()->flash($this->message_success, $this->panel . ' Shifted Successfully.');
                                } else {
                                    $request->session()->flash($this->message_warning, 'Please Select Route & Vehicle for Shifting.');
                                }
                                break;
                            case 'Leave':

                                /*Create History for Leave TransportUser Future Record*/
                                $CreateHistory = TransportHistory::create([
                                    'years_id' => $year->id,
                                    'routes_id' => $row->routes_id,
                                    'vehicles_id' => $row->vehicles_id,
                                    'travellers_id' => $row->id,
                                    'history_type' => "Leave",
                                    'created_by' => auth()->user()->id
                                ]);

                                /*update TransportUser*/
                                $request->merge(['routes_id' => null]);
                                $request->merge(['vehicles_id' => null]);
                                $request->merge(['status' => 'in-active']);
                                $request->merge(['last_updated_by' => auth()->user()->id]);
                                $row->update($request->all());
                                //send alert
                                $memberId = $row->member_id;
                                $userType = $row->user_type;
                                $this->transportLeaveNotify($memberId, $userType);
                                //alert end
                                $request->session()->flash($this->message_success, $this->panel . ' TransportUsers Leave Successfully.');

                                break;
                            case 'Delete':
                                /*Delete History*/
                                TransportHistory::where('travellers_id', '=', $row->id)->delete();
                                /*Delete TransportUser*/
                                $row->delete();
                                $request->session()->flash($this->message_success, $this->panel . ' Deleted With History Successfully.');
                                break;
                        }
                    }
                }
                return redirect()->back();
            } else {
                $request->session()->flash($this->message_warning, 'Please, Check at least one row.');
                return redirect()->back();
            }
        } else return parent::invalidRequest();
    }

    public function renew(request $request)
    {
        $id = $request->get('userId');
        $route = $request->get('route_assign');
        $vehicle = $request->get('vehicle_assign');
        $year = Year::where('active_status', '=', 1)->first();

        if (!$row = TransportUser::find($id)) return parent::invalidRequest();

        $renewTransportUser = $row->update([
            'routes_id' => $route,
            'vehicles_id' => $vehicle,
            'status' => 'active'
        ]);

        if ($renewTransportUser) {
            /*Create Renew History*/
            $CreateHistory = TransportHistory::create([
                'years_id' => $year->id,
                'routes_id' => $route,
                'vehicles_id' => $vehicle,
                'travellers_id' => $id,
                'history_type' => "Renew",
                'created_by' => auth()->user()->id,
            ]);

            //send alert
            $memberId = $row->member_id;
            $userType = $row->user_type;
            $newTransport = 'Route-' . $this->getRouteNameById($route) . ', Vehicle-' . $this->getVehicleById($vehicle);
            $this->transportActiveNotify($memberId, $userType, $newTransport);
            //alert end

            $request->session()->flash($this->message_success, $this->panel . ' Re-Active Successfully.');
        } else {
            $request->session()->flash($this->message_warning, 'Not A Valid TransportUsetu.');
        }

        return redirect()->back();
    }

    public function leave(request $request, $id)
    {
        if (!$row = TransportUser::where('id', $id)->Active()->first()) return parent::invalidRequest();

        $route = $row->routes_id;
        $vehicle = $row->vehicles_id;

        /*update TransportUser*/
        $request->merge(['routes_id' => null]);
        $request->merge(['vehicles_id' => null]);
        $request->merge(['status' => 'in-active']);
        $request->merge(['last_updated_by' => auth()->user()->id]);
        $user = $row->update($request->all());

        $year = Year::where('active_status', '=', 1)->first();

        if ($user) {
            /*Create History for Leave TransportUser Future Record*/
            $CreateHistory = TransportHistory::create([
                'years_id' => $year->id,
                'routes_id' => $route,
                'vehicles_id' => $vehicle,
                'travellers_id' => $row->id,
                'history_type' => "Leave",
                'created_by' => auth()->user()->id
            ]);
            //send alert
            $memberId = $row->member_id;
            $userType = $row->user_type;
            $this->transportLeaveNotify($memberId, $userType);
            //alert end
            return response()->json(['success', $this->panel . ' Leave Successfully.']);
        }


    }

    public function shift(request $request)
    {
        /*Get Request values on Variables */
        $id = $request->get('userId');
        $route = $request->get('route_shift');
        $vehicle = $request->get('vehicle_shift');
        $year = Year::where('active_status', '=', 1)->first();

        if ($route > 0 && $vehicle > 0) {
            $user = TransportUser::where('id', $id)->Active()->first();

            if ($user) {

                /*TransportUser New Hostel, Vehicle & Bed Assign*/
                $shift = $user->update([
                    'routes_id' => $route,
                    'vehicles_id' => $vehicle,
                    'status' => 'active'
                ]);

                if ($shift) {
                    /*Create History for Transfer Future Record*/
                    $CreateHistory = TransportHistory::create([
                        'years_id' => $year->id,
                        'routes_id' => $route,
                        'vehicles_id' => $vehicle,
                        'travellers_id' => $user->id,
                        'history_type' => "Shift",
                        'created_by' => auth()->user()->id
                    ]);

                    //send alert
                    $memberId = $user->member_id;
                    $userType = $user->user_type;
                    $newTransport = 'Route-' . $this->getRouteNameById($route) . ', Vehicle-' . $this->getVehicleById($vehicle);
                    $this->transportShiftNotify($memberId, $userType, $newTransport);
                    //alert end
                }

                return response()->json(['success', $this->panel . ' Shifted Successfully.']);
            } else {
                return response()->json(['warning', 'TransportUser Not Select or Not Active, Please Active First.']);
            }
        } else {
            return response()->json(['warning', 'Please, Select Route, Vehicle and Bed First.']);
        }

    }

    public function history(Request $request)
    {
        $data = [];
        if ($request->all()) {
            $data['history'] = TransportHistory::select('transport_histories.id', 'transport_histories.years_id',
                'transport_histories.routes_id', 'transport_histories.vehicles_id', 'transport_histories.history_type',
                'transport_histories.created_at', 'tu.member_id', 'tu.user_type')
                ->where(function ($query) use ($request) {

                    if ($request->get('year') !== '' & $request->get('year') > 0) {
                        $query->where('transport_histories.years_id', '=', $request->get('year'));
                        $this->filter_query['transport_histories.years_id'] = $request->get('year');
                    }

                    if ($request->get('route') !== '' & $request->get('route') > 0) {
                        $query->where('transport_histories.routes_id', '=', $request->get('route'));
                        $this->filter_query['transport_histories.routes_id'] = $request->get('route');
                    }

                    if ($request->get('vehicle_select') !== '' & $request->get('vehicle_select') > 0) {
                        $query->where('transport_histories.vehicles_id', '=', $request->get('vehicle_select'));
                        $this->filter_query['transport_histories.vehicles_id'] = $request->get('vehicle_select');
                    }

                    if ($request->history_type <> '0') {
                        $query->where('transport_histories.history_type', '=', $request->get('history_type'));
                        $this->filter_query['transport_histories.history_type'] = $request->get('history_type');
                    }


                    if ($request->get('user_type') !== '' & $request->get('user_type') > 0) {
                        $query->where('tu.user_type', '=', $request->get('user_type'));
                        $this->filter_query['tu.user_type'] = $request->get('user_type');
                    }

                    if ($request->reg_no != null) {
                        if ($request->get('user_type') !== '' & $request->get('user_type') > 0) {
                            if ($request->has('user_type') == 1) {
                                $studentId = $this->getStudentIdByReg($request->reg_no);
                                $query->where('member_id', '=', $studentId);
                                $this->filter_query['member_id'] = $studentId;
                            }
                            if ($request->has('user_type') == 2) {
                                $staffId = $this->getStaffByReg($request->reg_no);
                                $query->where('member_id', '=', $studentId);
                                $this->filter_query['member_id'] = $staffId;
                            }
                        }

                    }


                })
                ->join('transport_users as tu', 'tu.id', '=', 'transport_histories.travellers_id')
                ->orderBy('transport_histories.created_at')
                ->get();
        }

        $data['years'] = $this->activeYears();
        $data['routes'] = $this->activeTransportRoutes();
        $data['url'] = URL::current();
        return response()->json($data);
    }

    public function findVehicles(Request $request)
    {
        $response = [];
        $response['error'] = true;

        if ($request->has('route_id')) {
            $routes = RouteVehicle::select('route_vehicles.id', 'route_vehicles.vehicles_id', 'v.number', 'v.type')
                ->where('route_vehicles.routes_id', '=', $request->get('route_id'))
                ->join('vehicles as v', 'v.id', '=', 'route_vehicles.vehicles_id')
                ->get();

            //$routes = array_pluck($routes,'number','vehicles_id');

            if ($routes) {
                $response['vehicles'] = $routes;
                $response['error'] = false;
                $response['success'] = 'Vehicles Available For This Route.';
            } else {
                $response['error'] = 'No Any Vehicles Assign on This Route.';
            }

        } else {
            $response['message'] = 'Invalid request!!';
        }
        return response()->json($response);
    }

    //manage alert
    public function transportRegisterNotify($memberId, $userType, $newTransport)
    {
        $emailIds = [];
        $contactNumbers = [];
        $alert = AlertSetting::select('sms', 'email', 'subject', 'template')->where('event', '=', 'TransportRegistration')->first();
        if (!$alert) {

        } else {
            if ($userType == 1) {
                $student = Student::select('students.id', 'students.first_name', 'students.email', 'ai.mobile_1')
                    ->join('addressinfos as ai', 'ai.students_id', '=', 'students.id')
                    ->find($memberId);
                //send alert
                //Dear {{first_name}}, You are successfully re-Activated for our hostel service in {{transport}}.
                $subject = $alert->subject;
                $message = $alert->template;
                $message = str_replace('{{first_name}}', $student->first_name, $message);
                $message = str_replace('{{transport}}', $newTransport, $message);
                $emailIds[] = $student->email;
                $contactNumbers[] = $student->mobile_1;

                /*Now Send SMS On First Mobile Number*/
                if ($alert->sms == 1) {
                    $contactNumbers = $this->contactFilter($contactNumbers);
                    $smssuccess = $this->sendSMS($contactNumbers, $message);
                }

                /*Now Send Email With Subject*/
                if ($alert->email == 1) {
                    $emailIds = $this->emailFilter($emailIds);
                    /*sending email*/
                    $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
                }
            }

            if ($userType == 2) {
                $staff = Staff::select('first_name', 'email', 'mobile_1')
                    ->find($memberId);
                //send alert
                //Dear {{first_name}}, You are successfully re-Activated for our hostel service in {{transport}}.
                $subject = $alert->subject;
                $message = $alert->template;
                $message = str_replace('{{first_name}}', $staff->first_name, $message);
                $message = str_replace('{{transport}}', $newTransport, $message);
                $emailIds[] = $staff->email;
                $contactNumbers[] = $staff->mobile_1;

                /*Now Send SMS On First Mobile Number*/
                if ($alert->sms == 1) {
                    $contactNumbers = $this->contactFilter($contactNumbers);
                    $smssuccess = $this->sendSMS($contactNumbers, $message);
                }

                /*Now Send Email With Subject*/
                if ($alert->email == 1) {
                    $emailIds = $this->emailFilter($emailIds);
                    /*sending email*/
                    $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
                }
            }
        }
    }

    public function transportActiveNotify($memberId, $userType, $newTransport)
    {
        $emailIds = [];
        $contactNumbers = [];
        $alert = AlertSetting::select('sms', 'email', 'subject', 'template')->where('event', '=', 'TransportActive')->first();
        if (!$alert) {

        } else {
            if ($userType == 1) {
                $student = Student::select('students.id', 'students.first_name', 'students.email', 'ai.mobile_1')
                    ->join('addressinfos as ai', 'ai.students_id', '=', 'students.id')
                    ->find($memberId);
                //send alert
                //Dear {{first_name}}, You are successfully re-Activated for our transport service in {{transport}}.
                $subject = $alert->subject;
                $message = $alert->template;
                $message = str_replace('{{first_name}}', $student->first_name, $message);
                $message = str_replace('{{new_transport}}', $newTransport, $message);
                $emailIds[] = $student->email;
                $contactNumbers[] = $student->mobile_1;

                /*Now Send SMS On First Mobile Number*/
                if ($alert->sms == 1) {
                    $contactNumbers = $this->contactFilter($contactNumbers);
                    $smssuccess = $this->sendSMS($contactNumbers, $message);
                }

                /*Now Send Email With Subject*/
                if ($alert->email == 1) {
                    $emailIds = $this->emailFilter($emailIds);
                    /*sending email*/
                    $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
                }
            }

            if ($userType == 2) {
                $staff = Staff::select('first_name', 'email', 'mobile_1')
                    ->find($memberId);
                //send alert
                //Dear {{first_name}}, You are successfully re-Activated for our transport service in {{transport}}.
                $subject = $alert->subject;
                $message = $alert->template;
                $message = str_replace('{{first_name}}', $staff->first_name, $message);
                $message = str_replace('{{new_transport}}', $newTransport, $message);
                $emailIds[] = $staff->email;
                $contactNumbers[] = $staff->mobile_1;

                /*Now Send SMS On First Mobile Number*/
                if ($alert->sms == 1) {
                    $contactNumbers = $this->contactFilter($contactNumbers);
                    $smssuccess = $this->sendSMS($contactNumbers, $message);
                }

                /*Now Send Email With Subject*/
                if ($alert->email == 1) {
                    $emailIds = $this->emailFilter($emailIds);
                    /*sending email*/
                    $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
                }
            }
        }
    }

    public function transportShiftNotify($memberId, $userType, $newTransport)
    {
        $emailIds = [];
        $contactNumbers = [];
        $alert = AlertSetting::select('sms', 'email', 'subject', 'template')->where('event', '=', 'TransportShift')->first();
        if (!$alert) {

        } else {
            if ($userType == 1) {
                $student = Student::select('students.id', 'students.first_name', 'students.email', 'ai.mobile_1')
                    ->join('addressinfos as ai', 'ai.students_id', '=', 'students.id')
                    ->find($memberId);
                //send alert
                //Dear {{first_name}}, Congratulation! You are successfully shifted in {{transport}}.
                $subject = $alert->subject;
                $message = $alert->template;
                $message = str_replace('{{first_name}}', $student->first_name, $message);
                $message = str_replace('{{new_transport}}', $newTransport, $message);
                $emailIds[] = $student->email;
                $contactNumbers[] = $student->mobile_1;

                /*Now Send SMS On First Mobile Number*/
                if ($alert->sms == 1) {
                    $contactNumbers = $this->contactFilter($contactNumbers);
                    $smssuccess = $this->sendSMS($contactNumbers, $message);
                }

                /*Now Send Email With Subject*/
                if ($alert->email == 1) {
                    $emailIds = $this->emailFilter($emailIds);
                    /*sending email*/
                    $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
                }
            }

            if ($userType == 2) {
                $staff = Staff::select('first_name', 'email', 'mobile_1')
                    ->find($memberId);
                //send alert
                //Dear {{first_name}}, Congratulation! You are successfully shifted in {{transport}}.
                $subject = $alert->subject;
                $message = $alert->template;
                $message = str_replace('{{first_name}}', $staff->first_name, $message);
                $message = str_replace('{{new_transport}}', $newTransport, $message);
                $emailIds[] = $staff->email;
                $contactNumbers[] = $staff->mobile_1;
                /*Now Send SMS On First Mobile Number*/
                if ($alert->sms == 1) {
                    $contactNumbers = $this->contactFilter($contactNumbers);
                    $smssuccess = $this->sendSMS($contactNumbers, $message);
                }

                /*Now Send Email With Subject*/
                if ($alert->email == 1) {
                    $emailIds = $this->emailFilter($emailIds);
                    /*sending email*/
                    $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
                }
            }
        }
    }

    public function transportLeaveNotify($memberId, $userType)
    {
        $emailIds = [];
        $contactNumbers = [];
        $alert = AlertSetting::select('sms', 'email', 'subject', 'template')->where('event', '=', 'TransportLeave')->first();
        if (!$alert) {

        } else {
            if ($userType == 1) {
                $student = Student::select('students.id', 'students.first_name', 'students.email', 'ai.mobile_1')
                    ->join('addressinfos as ai', 'ai.students_id', '=', 'students.id')
                    ->find($memberId);
                //send alert
                //Dear {{first_name}}, You are successfully deactivated for transport service. Thank you.
                $subject = $alert->subject;
                $message = $alert->template;
                $message = str_replace('{{first_name}}', $student->first_name, $message);
                $emailIds[] = $student->email;
                $contactNumbers[] = $student->mobile_1;

                /*Now Send SMS On First Mobile Number*/
                if ($alert->sms == 1) {
                    $contactNumbers = $this->contactFilter($contactNumbers);
                    $smssuccess = $this->sendSMS($contactNumbers, $message);
                }

                /*Now Send Email With Subject*/
                if ($alert->email == 1) {
                    $emailIds = $this->emailFilter($emailIds);
                    /*sending email*/
                    $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
                }
            }

            if ($userType == 2) {
                $staff = Staff::select('first_name', 'email', 'mobile_1')
                    ->find($memberId);
                //send alert
                //Dear {{first_name}}, You are successfully deactivated for transport service. Thank you.
                $subject = $alert->subject;
                $message = $alert->template;
                $message = str_replace('{{first_name}}', $staff->first_name, $message);
                $emailIds[] = $staff->email;
                $contactNumbers[] = $staff->mobile_1;

                /*Now Send SMS On First Mobile Number*/
                if ($alert->sms == 1) {
                    $contactNumbers = $this->contactFilter($contactNumbers);
                    $smssuccess = $this->sendSMS($contactNumbers, $message);
                }

                /*Now Send Email With Subject*/
                if ($alert->email == 1) {
                    $emailIds = $this->emailFilter($emailIds);
                    /*sending email*/
                    $emailSuccess = $this->sendEmail($emailIds, $subject, $message);
                }
            }
        }
    }


}