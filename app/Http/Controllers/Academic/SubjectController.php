<?php
//The Edu Mis

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Academic\Subject\AddValidation;
use App\Http\Requests\Academic\Subject\EditValidation;
use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;
class SubjectController extends CollegeBaseController
{
    protected $base_route = 'subject';
    protected $view_path = 'academic.subject';
    protected $panel = 'Course';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index()
    {
       $data = [];
       $data['subject'] = Subject::select('id', 'title', 'code', 'full_mark_theory', 'pass_mark_theory',
           'full_mark_practical', 'pass_mark_practical', 'credit_hour', 'sub_type', 'class_type', 'staff_id',
           'description','status')
            ->with('staff')
            ->orderBy('title')
            ->get();

        $data['staff']=Staff::Active()->get()->pluck('full_name','id');

        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->merge(['created_by' => auth()->user()->id]);
        $subject = Subject::create($request->all());

        return response()->json(['success', 'Created Successfully.']);
    }

    public function edit($id)
    {

        $data = [];
        if (!$data['row'] = Subject::find($id))
            return parent::invalidRequest();

        $data['subject'] = Subject::select('id', 'title', 'code', 'full_mark_theory', 'pass_mark_theory',
            'full_mark_practical', 'pass_mark_practical', 'credit_hour', 'sub_type', 'class_type', 'staff_id',
            'description','status')
            ->with('staff')
            ->orderBy('title')
            ->get();

        $data['staff']=Staff::Active()->get()->pluck('full_name','id');

        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {
        if (!$row = Subject::find($id)) return parent::invalidRequest();
        $request->request->add(['last_updated_by' => auth()->user()->id]);
        $subject = $row->update($request->all());
        return response()->json(['success', $row->id.' '.$this->panel.' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
    try{
        if (!$row = Subject::find($id)) return response()->json(['success', $row->id.' '.$this->panel.' No Subject.']);
        $row->semester()->detach();
        $row->delete();
        return response()->json(['success', $row->id.' '.$this->panel.' Deleted Successfully.']);}
        catch(\Illuminate\Database\QueryException $e){
        if($e->errorInfo) return response()->json(['danger','Cant Delete. Other Data contain this semester as foreignKey']);
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
                            $row = Subject::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            try{
                                if (!$row = Subject::find($row_id))
                                return response()->json(['success', $row->id.' '.$this->panel.' No Subject.']);
                                $row->subjects()->sync([]);
                                $row->delete();
                                return response()->json(['success', $row->id.' '.$this->panel.' Deleted Successfully.']);}
                                catch(\Illuminate\Database\QueryException $e){
                                if($e->errorInfo) return response()->json(['danger','Cant Delete. Other Data contain this semester as foreignKey']);
                                }
                                break;

                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json(['success', 'Action Successfully.']);
                else
                     return response()->json(['success', 'Deleted Successfully.']);

                return redirect()->route($this->base_route);

            } else {
                return response()->json(['danger', 'Please, Check at least one row.']);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = Subject::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Subject::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());


        return response()->json(['success', $row->id.' '.$this->panel.' In-Active Successfully.']);
    }

    public function subjectNameAutocomplete(Request $request)
    {
        if ($request->has('q')) {

            $subjects = Subject::select('id', 'title', 'code', 'status')
                ->where('title', 'like', '%'.$request->get('q').'%')
                ->get();

            $response = [];
            foreach ($subjects as $subject) {
                $response[] = ['id' => $subject->id, 'text' => $subject->code.' - '.$subject->title];
            }

            return json_encode($response);
        }

        abort(501);
    }

}
