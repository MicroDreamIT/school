<?php
//The Edu Mis

namespace App\Http\Controllers\Library;

use App\Http\Controllers\CollegeBaseController;
use App\Models\LibraryCirculation;
use Illuminate\Http\Request;

class CirculationController extends CollegeBaseController
{
    protected $base_route = 'library.circulation';
    protected $view_path = 'library.circulation';
    protected $panel = 'Library Circulation';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['circulation'] = LibraryCirculation::select('id', 'user_type', 'slug', 'code_prefix', 'issue_limit_days', 'issue_limit_books',
            'fine_per_day', 'status')->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->merge(['created_by' => auth()->user()->id]);

        LibraryCirculation::create($request->all());

        return response()->json(['success', $this->panel . ' Created Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = LibraryCirculation::find($id))
            return parent::invalidRequest();

        $data['circulation'] = LibraryCirculation::select('id', 'user_type', 'slug', 'code_prefix', 'issue_limit_days', 'issue_limit_books',
            'fine_per_day', 'status')->get();

        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {

        if (!$row = LibraryCirculation::find($id)) return parent::invalidRequest();

        $request->merge(['last_updated_by' => auth()->user()->id]);

        $row->update($request->all());

        return response()->json(['success', $this->panel . ' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = LibraryCirculation::find($id)) return parent::invalidRequest();

        $row->delete();

        return response()->json(['success', $this->panel . ' Deleted Successfully.']);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = LibraryCirculation::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active' ? 'active' : 'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = LibraryCirculation::find($row_id);
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
        if (!$row = LibraryCirculation::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success', $row->semester . ' ' . $this->panel . ' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = LibraryCirculation::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'in-active']);
        $row->update($request->all());

        return response()->json(['success', $row->semester . ' ' . $this->panel . ' In-Active Successfully.']);
    }
}