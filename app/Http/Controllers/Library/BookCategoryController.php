<?php
//The Edu Mis

namespace App\Http\Controllers\Library;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Library\BookCategory\AddValidation;
use App\Http\Requests\Library\BookCategory\EditValidation;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends CollegeBaseController
{
    protected $base_route = 'library.book.category';
    protected $view_path = 'library.book.category';
    protected $panel = 'Book Category';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['categories'] = BookCategory::select('id', 'title', 'slug', 'status')->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
       $request->merge(['created_by' => auth()->user()->id]);
       $request->merge(['slug' => $request->get('title')]);

       BookCategory::create($request->all());

        return response()->json(['success', $this->panel. ' Created Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = BookCategory::find($id))
            return parent::invalidRequest();

        $data['row'] = BookCategory::where('id',$id)->first();

        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {

       if (!$row = BookCategory::find($id)) return parent::invalidRequest();

        $request->merge(['last_updated_by' => auth()->user()->id]);
        $request->merge(['slug' => $request->get('title')]);

        $row->update($request->all());

        return response()->json(['success', $this->panel.' Updated Successfully.']);
    }

    public function delete(Request $request, $id)
    {
        if (!$row = BookCategory::find($id)) return parent::invalidRequest();

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
                            $row = BookCategory::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = BookCategory::find($row_id);
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
        if (!$row = BookCategory::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success', $row->semester.' '.$this->panel.' Active Successfully.']);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = BookCategory::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json(['success', $row->semester.' '.$this->panel.' In-Active Successfully.']);
    }
}