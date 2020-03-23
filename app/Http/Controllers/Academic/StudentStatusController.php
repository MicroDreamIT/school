<?php
//The Edu Mis

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Academic\StudentStatus\AddValidation;
use App\Http\Requests\Academic\StudentStatus\EditValidation;
use App\Models\StudentStatus;
use Illuminate\Http\Request;

class StudentStatusController extends CollegeBaseController
{
    protected $base_route = 'student-status';
    protected $view_path = 'academic.student-status';
    protected $panel = 'Student Status';
    protected $filter_query = [];

    public function __construct()
    {

    }

      public function index(Request $request)
    {
        $data = [];
        $data['data'] = StudentStatus::select('id', 'title', 'status')->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
       $request->merge(['created_by' => auth()->user()->id]);

       StudentStatus::create($request->all());

       return response()->json(['success', 'Created Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = StudentStatus::find($id))
            return parent::invalidRequest();

        $data['data'] = StudentStatus::select('id', 'title', 'status')->orderBy('title')->get();

        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {

       if (!$row = StudentStatus::find($id)) return parent::invalidRequest();

        $request->merge(['last_updated_by' => auth()->user()->id]);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        try{
        if (!$row = StudentStatus::find($id)) return response()->json(['success', $row->id.' '.$this->panel.' No Data.']);
        $row->delete();
        return response()->json(['success', $row->id.' '.$this->panel.' Deleted Successfully.']);}
        catch(\Illuminate\Database\QueryException $e){
        if($e->errorInfo) return response()->json(['danger','Cant Delete. Other Data contain this batch as foreignKey']);
        }
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = StudentStatus::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = StudentStatus::find($row_id);
                            if ($row) {
                                try{
                                $row->delete();
                               }
                                catch(\Illuminate\Database\QueryException $e){
                                if($e->errorInfo) return response()->json(['danger','Cant Delete. Other Data contain this batch as foreignKey']);
                                }
                            }
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json(['success', 'Action Successfully.']);
                else
                     return response()->json(['success', 'Deleted Successfully.']);

            } else {
                return response()->json(['danger', 'Please, Check at least one row.']);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = StudentStatus::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

       return response()->json(['success', $row->id.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = StudentStatus::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

         return response()->json(['success', $row->id.' '.$this->panel.' In-Active Successfully.']);
    }
}