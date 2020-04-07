<?php
//The Edu Mis

namespace App\Http\Controllers\Student;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Student\Notes\AddValidation;
use App\Http\Requests\Student\Notes\EditValidation;
use App\Models\Note;
use App\Models\Student;
use Illuminate\Http\Request;
use ViewHelper;
use view;

class NoteController extends CollegeBaseController
{
    protected $base_route = 'student.note';
    protected $view_path = 'student.note';
    protected $panel = 'Student Notes';
    protected $filter_query = [];


    public function index(Request $request)
    {
        $data = [];
        $data['note'] = Note::with('student')->select('created_at', 'id', 'member_type','member_id','subject', 'note', 'status')
            ->where('member_type','=','student')
            ->get();

        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $reg_no = $request->get('reg_no');

        $student = Student::select('id')->where('reg_no','=',$reg_no)->first();
        if (!$student)
            return response()->json(['warning', 'Please Check Registration Number. This Registration Number is Not a valid Student Registration No.']);


        $request->merge(['created_by' => auth()->user()->id]);
        $request->merge(['member_id' => $student->id]);
        $request->merge(['member_type' => 'student']);

       Note::create($request->all());

       return response()->json(['success', $this->panel. ' Create Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        $data['row'] = Note::find($id);
        if (!$data['row'])
            return parent::invalidRequest();

        $reg_no = Student::select('reg_no')->where('id','=',$data['row']->member_id)->first();
        $data['row']->reg_no = $reg_no->reg_no;
        $data['note'] = Note::select('created_at', 'id', 'member_type','member_id','subject', 'note', 'status')
                        ->where('member_type','=','student')
                        ->get();
        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {
       if (!$row = Note::find($id)) return parent::invalidRequest();

        $reg_no = $request->get('reg_no');
        $student = Student::select('id')->where('reg_no','=',$reg_no)->first();
        if (!$student)
            return redirect()->route('student.note')->with('message_warning', 'Please Check Registration Number. 
            This Registration Number is Not a valid Student Registration No.');

        $request->merge(['last_updated_by' => auth()->user()->id]);
        $request->merge(['member_id' => $student->id]);
        $request->merge(['member_type' => 'student']);

        $row->update($request->all());

        return response()->json(['success', $this->panel.' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = Note::find($id)) return parent::invalidRequest();

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
                            $row = Note::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = Note::find($row_id);
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
        if (!$row = Note::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'active']);


        $row->update($request->all());

        return response()->json(['success', $this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Note::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json(['success', $this->panel.' In-Active Successfully.']);
    }
}