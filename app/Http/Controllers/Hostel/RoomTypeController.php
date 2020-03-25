<?php
//The Edu Mis

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Hostel\RoomType\AddValidation;
use App\Http\Requests\Hostel\RoomType\EditValidation;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends CollegeBaseController
{
    protected $base_route = 'hostel.room-type';
    protected $view_path = 'hostel.room-type';
    protected $panel = 'Room Type';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['room_type'] = RoomType::select('id', 'title', 'status')->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->request->add(['created_by' => auth()->user()->id]);

        RoomType::create($request->all());

        $request->session()->flash($this->message_success, $this->panel. ' Created Successfully.');
        return redirect()->route($this->base_route);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = RoomType::find($id))
            return parent::invalidRequest();

        $data['room_type'] = RoomType::select('id', 'title', 'status')->orderBy('title')->get();

        $data['base_route'] = $this->base_route;
        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function update(EditValidation $request, $id)
    {

        if (!$row = RoomType::find($id)) return parent::invalidRequest();

        $request->request->add(['last_updated_by' => auth()->user()->id]);

        $row->update($request->all());

        $request->session()->flash($this->message_success, $this->panel.' Updated Successfully.');
        return redirect()->route($this->base_route);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = RoomType::find($id)) return parent::invalidRequest();

        $row->delete();

        $request->session()->flash($this->message_success, $this->panel.' Deleted Successfully.');
        return redirect()->route($this->base_route);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = RoomType::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = RoomType::find($row_id);
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    $request->session()->flash($this->message_success, $request->get('bulk_action'). ' Action Successfully.');
                else
                    $request->session()->flash($this->message_success, 'Deleted successfully.');

                return redirect()->route($this->base_route);

            } else {
                $request->session()->flash($this->message_warning, 'Please, Check at least one row.');
                return redirect()->route($this->base_route);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = RoomType::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());
        return response()->json(['success',$row->semester.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = RoomType::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());
        return response()->json(['success',$row->semester.' '.$this->panel.' In-Active Successfully.']);
    }
}