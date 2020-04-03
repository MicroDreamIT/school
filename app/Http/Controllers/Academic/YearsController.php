<?php
//The Edu Mis

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Academic\Year\AddValidation;
use App\Http\Requests\Academic\Year\EditValidation;
use App\Models\Year;
use Illuminate\Http\Request;

class YearsController extends CollegeBaseController
{
    protected $base_route = 'year';
    protected $view_path = 'academic.year';
    protected $panel = 'Year';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['years'] = Year::select('id', 'title', 'active_status', 'status')->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->merge(['created_by'=>auth()->id()]);
        Year::create($request->all());

        return response()->json([
            'success',
            $this->panel. ' Created Successfully.'
        ]);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Year::find($id))
            return parent::invalidRequest();

        $data['years'] = Year::select('id', 'title', 'active_status', 'status')->orderBy('title')->get();

        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {

        if (!$row = Year::find($id)) return parent::invalidRequest();

        $request->merge(['created_by'=>auth()->id()]);

        $row->update($request->all());

        return response()->json([
            'success',
            $this->panel.' Updated Successfully.'
        ]);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = Year::find($id)) return parent::invalidRequest();

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
                            $row = Year::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = Year::find($row_id);
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json(['success',$request->get('bulk_action'). ' Action Successfully.']);
                else
                    return response()->json(['error','Deleted successfully.']);


            } else {
                return response()->json([
                    'warning', 'Please, Check at least one row.'
                ]);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = Year::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json([
            'success',
            $row->semester.' '.$this->panel.' Active Successfully.'
        ]);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Year::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json([
            'success',
            $row->semester.' '.$this->panel.' In-Active Successfully.'
        ]);
    }

    public function activeStatus($id)
    {
        Year::where('id','=',$id)->update(['active_status' => 1]);
        Year::where('id','!=',$id)->update(['active_status' => 0]);
        return response()->json([
            'success',
            $this->panel.' Active Successfully.'
        ]);
    }
}