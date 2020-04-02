<?php
//The Edu Mis

namespace App\Http\Controllers\Transport;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Transport\Vehicle\AddValidation;
use App\Http\Requests\Transport\Vehicle\EditValidation;
use App\Models\Staff;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends CollegeBaseController
{
    protected $base_route = 'transport.vehicle';
    protected $view_path = 'transport.vehicle';
    protected $panel = 'Vehicle';
    protected $filter_query = [];


    public function index(Request $request)
    {
        $data = [];
        $data['vehicle'] = Vehicle::with('staff')->select('id', 'number', 'type', 'model', 'description', 'status')->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->merge(['created_by'=>auth()->id()]);
        $vehicle =  Vehicle::create($request->all());
        if ($request->has('staffs_id')) {
                $vehicle->staff()->attach($request->input('staffs_id'));
        }
        return response()->json( ['success', $this->panel. ' Created Successfully.'] );
    }

    public function edit($id)
    {
        $data = [];
        if (!$data['row'] = Vehicle::with('staff')->whereId($id)->first())
            return parent::invalidRequest();


        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {

        if (!$row = Vehicle::find($id)) return parent::invalidRequest();

        $request->merge(['created_by'=>auth()->id()]);

        $row->update($request->all());

        if ($request->has('staffs_id')) {
            $row->staff()->sync($request->input('staffs_id'));
        }

        return response()->json( ['success', $this->panel. ' Created Successfully.'] );

    }

    public function delete(Request $request, $id)
    {
        if (!$row = Vehicle::find($id)) return parent::invalidRequest();

        $row->staff()->detach();

        $row->delete();

        return response()->json( ['success', $this->panel. ' Deleted Successfully.'] );

    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = Vehicle::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = Vehicle::find($row_id);
                            $row->staff()->detach();
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    return response()->json( ['success', $request->get('bulk_action'). ' Action Successfully.'] );
                else
                    return response()->json( ['success', 'Deleted successfully.'] );

            } else {
                return response()->json( ['warning', 'Please, Check at least one row.'] );

            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = Vehicle::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json( ['success', $row->semester.' '.$this->panel.' Active Successfully.'] );

    }

    public function inActive(request $request, $id)
    {
        if (!$row = Vehicle::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json( ['success', $row->semester.' '.$this->panel.' In-Active Successfully.'] );

    }

    public function staffHtmlRow(Request $request)
    {
        $response = [];
        $response['error'] = true;

        if ($request->has('id')) {
            $staff = Staff::select('id','first_name',  'middle_name', 'last_name',
                'mobile_1','designation')->find($request->get('id'));
            //$staff = Staff::find($request->get('id'));
            if ($staff) {
                $response['error'] = false;
                $response['html'] = view($this->view_path.'.includes.staff_tr', [ 'staff' => $staff ])->render();
                $response['message'] = 'Operation successful.';

            } else{
                $response['message'] = 'Invalid request!!';
            }
        } else{
            $response['message'] = 'Invalid request!!';
        }

        return response()->json(json_encode($response));
    }

    public function staffAutocomplete(Request $request)
    {
        if ($request->has('q')) {
            $param = $request->get('q');

            $staffs = Staff::where(function ($query) use($param){
                        $query->where('first_name', 'like', '%'.$param.'%')
                            ->orwhere('middle_name', 'like', '%'.$param.'%')
                            ->orwhere('last_name', 'like', '%'.$param.'%');
                    })
                    ->take(10)->get();


            return response()->json($staffs);
        }

        abort(501);
    }
}