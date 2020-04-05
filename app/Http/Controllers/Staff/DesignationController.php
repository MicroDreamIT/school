<?php
//The Edu Mis

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Staff\Designation\AddValidation;
use App\Http\Requests\Staff\Designation\EditValidation;
use App\Models\StaffDesignation;
use Illuminate\Http\Request;

class DesignationController extends CollegeBaseController
{
    protected $base_route = 'staff.designation';
    protected $view_path = 'staff.designation';
    protected $panel = 'Designation';
    protected $filter_query = [];


    public function index(Request $request)
    {
        $data = [];
        $data['designation'] = StaffDesignation::select('id', 'title', 'status')->orderBy('title')->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
       $request->request->add(['created_by' => auth()->user()->id]);

       StaffDesignation::create($request->all());

        return response()->json(['success', $this->panel . ' Created Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = StaffDesignation::find($id))
            return parent::invalidRequest();

        $data['designation'] = StaffDesignation::select('id', 'title', 'status')->orderBy('title')->get();

        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {

       if (!$row = StaffDesignation::find($id)) return parent::invalidRequest();

        $request->request->add(['last_updated_by' => auth()->user()->id]);

        $row->update($request->all());

        return response()->json(['success', $this->panel.' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = StaffDesignation::find($id)) return parent::invalidRequest();

        $row->delete();
        return response()->json(['success', $this->panel.' Deleted Successfully.']);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = StaffDesignation::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = StaffDesignation::find($row_id);
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json(['success', $request->get('bulk_action'). ' Action Successfully.']);
                else
                    return response()->json(['success', 'Deleted successfully.']);


            } else {
                return response()->json(['warning', 'Please, Check at least one row.']);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = StaffDesignation::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success', $row->semester.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = StaffDesignation::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());
        return response()->json(['success', $row->semester.' '.$this->panel.' In-Active Successfully.']);
    }
}