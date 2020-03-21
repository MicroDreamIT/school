<?php
//The Edu Mis

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Academic\Semester\AddValidation;
use App\Http\Requests\Academic\Semester\EditValidation;
use App\Models\GradingType;
use App\Models\Semester;
use App\Models\Staff;
use App\Models\Subject;
use Illuminate\Http\Request;
use Exception;

class SemesterController extends CollegeBaseController
{
    protected $base_route = 'semester';
    protected $view_path = 'academic.semester';
    protected $panel = 'Semester/Section';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['semester'] = Semester::select('id', 'semester', 'staff_id', 'gradingType_id', 'status')
            ->orderBy('semester')
            ->with('staff')
            ->with('gradingType')
            ->with('subjects')
            ->get();

        $data['gradingScales'] =GradingType::select('id','title')->Active()->get();
        $data['staff']=Staff::Active()->get()->pluck('full_name','id');
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
       $request->request->add(['created_by' => auth()->user()->id]);
       $request->request->add(['slug' => $request->get('semester')]);

       $sem = Semester::create($request->all());

        $subjects = [];
        if($request->get('sem_subject_id')){
            foreach ($request->get('sem_subject_id') as $subject){
                $subjects[$subject] = [
                    'created_by' => auth()->user()->id,
                    'semester_id' => $sem->id,
                    'subject_id' => $subject
                ];
            }
        }
        $sem->subjects()->sync($subjects);

       return response()->json(['success', 'Created Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Semester::find($id))
            return parent::invalidRequest();

        $data['semester'] = Semester::select('id', 'semester', 'staff_id', 'gradingType_id','status')
            ->orderBy('semester')
            ->get();

        $data['gradingScales'] = [];
        $data['gradingScales'][] = '';
        foreach (GradingType::select('id','title')->Active()->get() as $grading) {
            $data['gradingScales'][$grading->id] = $grading->title;
        }

        $data['staffs'] = [];
        $data['staffs'][] = '';
        foreach (Staff::select('id','first_name','middle_name','last_name')->Active()->get() as $staff) {
            $data['staffs'][$staff->id] = $staff->first_name.' '.$staff->middle_name.' '.$staff->last_name ;
        }

        $data['html'] = view($this->view_path.'.includes.subject_tr_rows', [
            'subjects' => $data['row']->subjects
        ])->render();

        $data['base_route'] = $this->base_route;
        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function update(EditValidation $request, $id)
    {

       if (!$row = Semester::find($id)) return parent::invalidRequest();

        $request->request->add(['last_updated_by' => auth()->user()->id]);
        $request->request->add(['slug' => $request->get('semester')]);

       $row->update($request->all());

        $subjects = [];
        if($request->get('sem_subject_id')){
            foreach ($request->get('sem_subject_id') as $subject){
                $subjects[$subject] = [
                    'created_by' => auth()->user()->id,
                    'last_updated_by' => auth()->user()->id,
                    'semester_id' => $row->id,
                    'subject_id' => $subject
                ];
            }
        }
        $row->subjects()->sync($subjects);

        $request->session()->flash($this->message_success, $this->panel.' Updated Successfully.');
        return redirect()->route($this->base_route);
    }

    public function delete(Request $request, $id)
    {


        try{
        if (!$row = Semester::find($id))
        return response()->json(['success', $row->id.' '.$this->panel.' No Semester.']);
        $row->subjects()->sync([]);
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
                            $row = Semester::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            try{
                                if (!$row = Semester::find($row_id))
                                return response()->json(['success', $row->id.' '.$this->panel.' No Semester.']);
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
        if (!$row = Semester::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Semester::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());


        return response()->json(['success', $row->id.' '.$this->panel.' In-Active Successfully.']);
    }
    public function subjectHtmlRow(Request $request)
    {
        $response = [];
        $response['error'] = true;
        if ($request->has('id')) {
            if ($subject = Subject::find($request->get('id'))) {
                $response['error'] = false;
                $response['html'] = view($this->view_path.'.includes.subject_tr', [
                    'subject' => $subject,
                ])->render();
                $response['message'] = 'Operation successful.';

            } else{
                $response['message'] = $request->get('subject_id').'Invalid request!!';
            }
        } else{
            $response['message'] = $request->get('subject_id').'Invalid request!!';
        }

        return response()->json(json_encode($response));
    }

    public function getSubject(Request $request)
    {
        $data = [];
        $data['subject']=$request->get('id')?Subject::where( 'title', 'LIKE', '%' .$request->get('id') . '%' )->selectRaw('id,CONCAT(code, "-", title) as name')->get()->pluck('name', 'id')->toArray():[];
        return response()->json($data);
    }
}