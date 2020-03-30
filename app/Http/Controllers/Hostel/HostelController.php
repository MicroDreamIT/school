<?php
//The Edu Mis

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Hostel\Hostel\AddValidation;
use App\Http\Requests\Hostel\Hostel\EditValidation;
use App\Models\Bed;
use App\Models\Hostel;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HostelController extends CollegeBaseController
{
    protected $base_route = 'hostel';
    protected $view_path = 'hostel.hostel';
    protected $panel = 'Hostel';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['hostel'] = Hostel::select('id', 'name', 'status')->get();

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;
        return response()->json($data);
    }

    public function add(Request $request)
    {

        $data = [];
        $roomTypes = RoomType::select('id','title')->get();
        $data['room_type'] = array_pluck($roomTypes,'title','id');
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->merge(['created_by' => auth()->id()]);

        $row = Hostel::create($request->all());

        if ($row && $request->has('rooms')) {
            $i = 1;
            while ($i <= $request->get('rooms')){
                Room::create([
                    'hostels_id' => $row->id,
                    'room_number' => $i,
                    'room_type' => $request->get('room_type'),
                    'created_by' => auth()->user()->id,
                ]);
                $i++;
            }
        }

        return response()->json(['success',$this->panel. ' Created Successfully.']);

        if($request->add_hostel_another) {
            return back();
        }else{
            return redirect()->route($this->base_route);
        }
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Hostel::find($id))
            return parent::invalidRequest();

        $roomTypes = RoomType::select('id','title')->get();
        $data['room_type'] = array_pluck($roomTypes,'title','id');
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {

        if (!$row = Hostel::find($id)) return parent::invalidRequest();
//        return $row;
        $request->merge(['last_updated_by' => auth()->id()]);

//        dd($request->except(['rooms', 'beds']));

        $row->update($request->all());

        return response()->json( ['success', $this->panel.'Hostel has been updated Successfully.'] );

    }

    public function delete(Request $request, $id)
    {
        if (!$row = Hostel::find($id)) return parent::invalidRequest();

        $row->delete();

        return response()->json(['success', $this->panel . ' Deleted Successfully.']);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = Hostel::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = Hostel::find($row_id);
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                return response()->json(['success',$request->get('bulk_action'). ' Action Successfully.']);

            else
                return response()->json(['success','Deleted successfully.']);


            } else {
                return response()->json(['warning',$this->message_warning, 'Please, Check at least one row.']);

            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = Hostel::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success',$row->semester.' '.$this->panel.' Active Successfully.']);

    }

    public function inActive(request $request, $id)
    {
        if (!$row = Hostel::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json(['success',$row->semester.' '.$this->panel.' In-Active Successfully.']);

    }

    public function view(Request $request, $id)
    {
        $data = [];
        $data['hostel'] = Hostel::select('id', 'name', 'type', 'address', 'contact_detail', 'warden',
            'warden_contact','description', 'status')
            ->where('id','=',$id)
            ->orderBy('name','asc')
            ->first();

        $data['rooms'] = Room::where('hostels_id','=',$data['hostel']->id )
            ->get();

        $roomTypes = RoomType::select('id','title')->get();
        $data['room_type'] = array_pluck($roomTypes,'title','id');
        return response()->json($data);

    }

    public function findRooms(Request $request)
    {
        $response = [];
        $response['error'] = true;

        if ($request->has('hostel_id')) {
            $hostels = Room::select('id','room_number')
                ->where('hostels_id','=', $request->get('hostel_id'))
                ->Active()
                ->get();

            if ($hostels) {
                $response['rooms'] = $hostels;
                $response['error'] = false;
                $response['success'] = 'Rooms Available For This Hostel.';
            } else {
                $response['error'] = 'No Any Rooms Assign on This Hostel.';
            }

        } else {
            $response['message'] = 'Invalid request!!';
        }
        return response()->json(json_encode($response));
    }

    public function findBeds(Request $request)
    {
        $response = [];
        $response['error'] = true;

        if ($request->has('room_id')) {
            $beds = Bed::select('id','bed_number')
                ->where([['rooms_id','=', $request->get('room_id')],['bed_status','=', 1]])
                ->get();

            if ($beds) {
                $response['beds'] = $beds;
                $response['error'] = false;
                $response['success'] = 'Rooms Available For This Hostel.';
            } else {
                $response['error'] = 'No Any Rooms Assign on This Hostel.';
            }

        }else{
            $response['message'] = 'Invalid request!!';
        }
        return response()->json(json_encode($response));
    }
}