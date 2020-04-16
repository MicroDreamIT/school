<?php
//The Edu Mis

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Staff\Document\AddValidation;
use App\Http\Requests\Staff\Document\EditValidation;
use App\Models\Document;
use App\Models\Staff;
use Illuminate\Http\Request;
use ViewHelper;
use view;

class DocumentController extends CollegeBaseController
{
    protected $base_route = 'staff.document';
    protected $view_path = 'staff.document';
    protected $panel = 'Staff Document';
    protected $folder_path;
    protected $folder_name = 'documents';
    protected $filter_query = [];

    public function __construct()
    {
        $this->folder_path = public_path().DIRECTORY_SEPARATOR.$this->folder_name.DIRECTORY_SEPARATOR.'staff'.DIRECTORY_SEPARATOR;
    }

    public function index(Request $request)
    {
        $data = [];
        $data['document'] = Document::select('id', 'member_type','member_id', 'title', 'file', 'status')
            ->where('member_type','=','staff')
            ->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $reg_no = $request->get('reg_no');

        $staff = Staff::select('id')->where('reg_no','=',$reg_no)->first();
        if (!$staff)
            return response()->json(['warning', 'Please Check Staff Registration Number. This Registration Number is Not a valid Staff Registration.']);

        $name = str_slug($request->get('title'));

        if ($request->hasFile('document_file')){
            $document_file = parent::uploadFile($request, $reg_no , $name ,'document_file');
        }

        $request->merge(['created_by' => auth()->user()->id]);
        $request->merge(['member_id' => $staff->id]);
        $request->merge(['file' => $document_file]);
        $request->merge(['member_type' => 'staff']);

        Document::create($request->all());

        return response()->json(['success', $this->panel. ' Uploaded Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        $data['row'] = Document::find($id);
        if (!$data['row'])
            return parent::invalidRequest();

        $reg_no = Staff::select('reg_no')->where('id','=',$data['row']->member_id)->first();
        $data['row']->reg_no = $reg_no->reg_no;
        $data['document'] = Document::select('id', 'member_id','member_type','title', 'file', 'status')
            ->where('member_type','=','staff')
            ->get();
        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {
        if (!$row = Document::find($id)) return parent::invalidRequest();

        $reg_no = $request->get('reg_no');
        $student = Staff::select('id')->where('reg_no','=',$reg_no)->first();
        $name = str_slug($request->get('title'));

        if ($request->hasFile('document_file')){
            $document_file = parent::uploadFile($request, $reg_no , $name ,'document_file');
            @unlink($this->folder_path.$reg_no.DIRECTORY_SEPARATOR.$row->file);
        }

        $request->merge(['last_updated_by' => auth()->user()->id]);
        $request->merge(['member_id' => $student->id]);
        $request->merge(['member_type' => 'staff']);
        $request->merge(['file' => isset($document_file)?$document_file:$row->file]);

        $row->update($request->all());

        return response()->json(['success',$this->panel.' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = Document::find($id)) return parent::invalidRequest();

        $reg_no = parent::getStaffById($row->students_id);
        // remove old image from folder
        if ($row->file && file_exists($this->folder_path.DIRECTORY_SEPARATOR.$reg_no.DIRECTORY_SEPARATOR.$row->file)) {
            @unlink($this->folder_path.DIRECTORY_SEPARATOR.$reg_no.DIRECTORY_SEPARATOR.$row->file);
        }

        $row->delete();

        return response()->json(['success',$this->panel.' Deleted Successfully.']);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = Document::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = Document::find($row_id);
                            $reg_no = Staff::select('reg_no')->where('id','=',$row->member_id)->first();
                            // remove old image from folder
                            if ($row->file && file_exists($this->folder_path.$reg_no->reg_no.DIRECTORY_SEPARATOR.$row->file)) {
                                @unlink($this->folder_path.$reg_no->reg_no.DIRECTORY_SEPARATOR.$row->file);
                            }
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json(['success', $request->get('bulk_action') . ' Action Successfully.']);
                else
                    return response()->json(['success', 'Deleted successfully.']);


            } else {
                return response()->json(['warning', 'Please, Check at least one row.']);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = Document::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'active']);


        $row->update($request->all());

        return response()->json(['success', $this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = Document::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json(['success', $this->panel.' In-Active Successfully.']);
    }
}