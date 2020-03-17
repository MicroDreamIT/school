<?php
//The Edu Mis

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Academic\Faculty\AddValidation;
use App\Http\Requests\Academic\Faculty\EditValidation;
use App\Models\Faculty;
use App\Models\FacultySemester;
use App\Models\Semester;
use Illuminate\Http\Request;
class FacultyController extends CollegeBaseController
{
    protected $base_route = 'faculty';
    protected $view_path = 'academic.faculty';
    protected $panel = 'Faculty/Level/Class';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index()
    {
        //semester,id,gradingType_id
       $data = [];
       $data['faculty'] = Faculty::select('id', 'faculty','faculty_code', 'status')
            ->orderBy('faculty')
            ->with('semester')
            ->get();

      $data['semester'] = Semester::select('id', 'semester')
            ->Active()
            ->get();

      return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $d=$request->merge(['created_by' => auth()->user()->id]);
        $faculty = Faculty::create($request->all());

        $semesters = [];
        if($request->get('semester')){
            foreach ($request->get('semester') as $semester){
                $semesters[$semester] = [
                    'faculty_id' => $faculty->id,
                    'semester_id' => $semester
                ];
            }
        }

        $faculty->semester()->sync($semesters);

         return response()->json(['success', $faculty->id.' '.$this->panel.' Created Successfully.']);
    }

    public function edit($id)
    {
        $data = [];
        if (!$data['row'] = Faculty::find($id))
            return parent::invalidRequest();

        $data['faculty'] = Faculty::select('id', 'faculty','faculty_code', 'status')
            ->orderBy('faculty')
            ->get();

        $data['semester'] = Semester::select('id', 'semester')
            ->Active()
            ->get();

        $data['active_semester'] = $data['row']->semester()->pluck('semesters.semester', 'semesters.id')->toArray();

        $data['base_route'] = $this->base_route;
        return view(parent::loadDataToView($this->view_path.'.index'), compact('data'));
    }

    public function update(EditValidation $request, $id)
    {
        if (!$row = Faculty::find($id)) return parent::invalidRequest();

        $request->request->add(['last_updated_by' => auth()->user()->id]);

        $faculty = $row->update($request->all());

        if($faculty){
            $semesters = [];
            if($request->get('semester')){
                foreach ($request->get('semester') as $semester){
                    $semesters[$semester] = [
                        'faculty_id' => $row->id,
                        'semester_id' => $semester
                    ];
                }
            }

            $row->semester()->sync($semesters);
        }


        $request->session()->flash($this->message_success, $this->panel.' Updated Successfully.');
        return redirect()->route($this->base_route);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = Faculty::find($id)) return parent::invalidRequest();
        $row->semester()->detach();
        $row->delete();


       return response()->json(['success', $row->id.' '.$this->panel.' Deleted Successfully.']);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = Faculty::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = Faculty::find($row_id);
                            $row->semester()->detach();
                            $row->delete();
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
        if (!$row = Faculty::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Faculty::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' In-Active Successfully.']);
    }

}
