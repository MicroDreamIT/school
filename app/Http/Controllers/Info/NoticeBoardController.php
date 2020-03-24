<?php
//The Edu Mis

namespace App\Http\Controllers\Info;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Notice\AddValidation;
use App\Http\Requests\Notice\EditValidation;
use App\Models\Notice;
use App\Role;
use Illuminate\Http\Request;

class NoticeBoardController extends CollegeBaseController
{
    protected $base_route = 'info.notice';
    protected $view_path = 'info.notice';
    protected $panel = 'User Notice';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['rows'] = Notice::select('id', 'title', 'message', 'publish_date', 'end_date', 'display_group', 'status')
            ->latest()
            ->get();
        return response()->json($data);

    }

    public function add()
    {
        $data = [];
        $data['roles'] = Role::where('id', '<>', '1')->get();
        return response()->json($data);

    }

    public function store(AddValidation $request)
    {
        if ($request->has('role')) {
            $display_group = implode(',', $request->get('role'));
        }
        $request->request->add(['display_group' => isset($display_group) ? $display_group : '']);

        $request->merge(['created_by' => auth()->user()->id]);
        Notice::create($request->all());
        return response()->json(['success', 'Created Successfully.']);

    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Notice::find($id))
            return parent::invalidRequest();

        $data['roles'] = Role::where('id', '<>', '1')->get();
        $roleactive = explode(',', $data['row']->display_group);
        $data['access_role'] = $roleactive;

        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {
        if (!$row = Notice::find($id)) return parent::invalidRequest();

        $request->merge(['last_updated_by' => auth()->user()->id]);

        if ($request->has('role')) {
            $display_group = implode(',', $request->get('role'));
        }
        $request->request->add(['display_group' => isset($display_group) ? $display_group : '']);


        $row->update($request->all());

        return response()->json(['success', $row->id . ' ' . $this->panel . ' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        try {
            if (!$row = Notice::find($id)) return response()->json(['success', $row->id . ' ' . $this->panel . ' No Data.']);
            $row->delete();
            return response()->json(['success', $row->id . ' ' . $this->panel . ' Deleted Successfully.']);
        } catch (\Illuminate\Database\QueryException $e) {
            if ($e->errorInfo) return response()->json(['danger', 'Cant Delete. Other Data contain this batch as foreignKey']);
        }
    }

}