<?php
//The Edu Mis

namespace App\Http\Controllers\Academic;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Academic\Grading\AddValidation;
use App\Http\Requests\Academic\Grading\EditValidation;
use App\Models\GradingScale;
use App\Models\GradingType;
use Illuminate\Http\Request;
class GradingController extends CollegeBaseController
{
    protected $base_route = 'grading';
    protected $view_path = 'academic.grading';
    protected $panel = 'Grading Scale';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index()
    {
       $data = [];
       $data['grading'] = GradingType::select('id', 'title', 'status')
            ->with('gradingScale')
            ->orderBy('title')
            ->get();

       return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->merge(['created_by' => auth()->user()->id]);
        $request->merge(['slug' => $request->get('title')]);

        $gradingType = GradingType::create($request->all());

        if($request->get('name')){
            foreach ($request->get('name') as $key => $row_id){
                $gradingScale = [
                    'gradingType_id' => $gradingType->id,
                    'name' => $row_id,
                    'percentage_from' => $request->get('percentage_from')[$key],
                    'percentage_to' => $request->get('percentage_to')[$key],
                    'grade_point' => $request->get('grade_point')[$key],
                    'description' => $request->get('description')[$key],
                    'created_by' => auth()->user()->id
                ];
                GradingScale::create($gradingScale);
            }
        }

        return response()->json(['success',' Create Successfully.']);
    }

    public function edit($id)
    {

        $data = [];
        if (!$data['row'] = GradingType::find($id))
            return parent::invalidRequest();

        $data['grading'] = GradingType::select('id', 'title', 'status')
            ->orderBy('title')
            ->get();

        $data['grade_scale'] = $data['row']->gradingScale('id','name', 'percentage_from','percentage_to','grade_point','description')->get();

        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {
        //dd($request->all());
        if (!$row = GradingType::find($id)) return parent::invalidRequest();

        $request->request->add(['last_updated_by' => auth()->user()->id]);
        //update & add grade scales
        foreach ($request->get('gsID') as $key => $grade) {
            if ($grade == null) {
                //create
                $gradingScale = [
                    'gradingType_id' => $row->id,
                    'name' => $request->get('name')[$key],
                    'percentage_from' => $request->get('percentage_from')[$key],
                    'percentage_to' => $request->get('percentage_to')[$key],
                    'grade_point' => $request->get('grade_point')[$key],
                    'description' => $request->get('description')[$key],
                    'created_by' => auth()->user()->id
                ];
                GradingScale::create($gradingScale);

            }else {
                //update
                $grade_scale = GradingScale::find($grade);
                $grade_scale->update([
                    'gradingType_id' => $row->id,
                    'name' => $request->get('name')[$key],
                    'percentage_from' => $request->get('percentage_from')[$key],
                    'percentage_to' => $request->get('percentage_to')[$key],
                    'grade_point' => $request->get('grade_point')[$key],
                    'description' => $request->get('description')[$key],
                    'last_updated_by' => auth()->user()->id
                ]);

            }
        }

        //update grading type
        $row->update($request->all());
        return response()->json(['success', $row->id.' '.$this->panel.' Update Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = GradingType::find($id)) return parent::invalidRequest();

        //remove associate scale
        $row->gradingScale()->delete();
        //delete grading
        $row->delete();
        return response()->json(['success', $row->id.' '.$this->panel.' Delete Successfully.']);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = GradingType::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = GradingType::find($row_id);
                            //remove associate scale
                            $row->gradingScale()->delete();
                            //delete grading
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json(['success', ' Action Successfully.']);
                else
                    return response()->json(['success',' Delete Successfully.']);

                return redirect()->route($this->base_route);

            } else {
                $request->session()->flash($this->message_warning, 'Please, Check at least one row.');
                return redirect()->route($this->base_route);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = GradingType::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = GradingType::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json(['success', $row->id.' '.$this->panel.' In-Active Successfully.']);
    }

    public function gradeHtmlRow()
    {
        $response['html'] = view($this->view_path.'.includes.grade_tr')->render();
        return response()->json(json_encode($response));
    }
}
