<?php
//The Edu Mis

namespace App\Http\Controllers\Transport;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Transport\Route\AddValidation;
use App\Http\Requests\Transport\Route\EditValidation;
use App\Models\Route;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class RouteController extends CollegeBaseController
{
    protected $base_route = 'transport.route';
    protected $view_path = 'transport.route';
    protected $panel = 'Route';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];
        $data['route'] = Route::with('vehicle')->select('id', 'title', 'rent', 'description', 'status')->get();
        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->merge(['created_by'=>auth()->id()]);
        $route = Route::create($request->all());

        if ($request->has('vehicles_id')) {
            foreach ($request->get('vehicles_id') as $vehicle) {
                $vehicleIds = $vehicle;
                $route->vehicle()->attach($vehicleIds);
            }
        }

        return response()->json(['success', $this->panel . ' Created Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = Route::find($id))
            return parent::invalidRequest();

        $data['html'] = view($this->view_path . '.includes.vehicle_tr_rows', [
            'vehicles' => $data['row']->vehicle
        ])->render();

        $data['route'] = Route::select('id', 'title', 'rent', 'description', 'status')->orderBy('title')->get();

        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {
        if (!$row = Route::find($id)) return parent::invalidRequest();

        $request->request->add(['last_updated_by' => auth()->user()->id]);
        $row->update($request->all());

        if ($request->has('vehicles_id')) {
            $vehicleIds = [];
            foreach ($request->get('vehicles_id') as $vehicle) {
                $vehicleIds[] = $vehicle;
            }

            $row->vehicle()->sync($vehicleIds);
        }


        return response()->json(['success', $this->panel . ' Updated Successfully.']);

    }

    public function delete(Request $request, $id)
    {
        if (!$row = Route::find($id)) return parent::invalidRequest();

        $row->vehicle()->detach();

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
                            $row = Route::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active' ? 'active' : 'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = Route::find($row_id);
                            $row->vehicle()->detach();
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
        if (!$row = Route::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'active']);

        $row->update($request->all());

        return response()->json(['success',$row->semester.' '.$this->panel.' Active Successfully.']);

    }

    public function inActive(request $request, $id)
    {
        if (!$row = Route::find($id)) return parent::invalidRequest();

        $request->request->add(['status' => 'in-active']);

        $row->update($request->all());

        return response()->json(['success',$row->semester.' '.$this->panel.' In-Active Successfully.']);
    }

    public function vehicleHtmlRow(Request $request)
    {
        $response = [];
        $response['error'] = true;

        if ($request->has('id')) {
            $vehicle = Vehicle::select('id', 'number', 'type', 'model')->find($request->get('id'));
            if ($vehicle) {
                $response['error'] = false;
                $response['html'] = view($this->view_path . '.includes.vehicle_tr', ['vehicle' => $vehicle])->render();
                $response['message'] = 'Operation successful.';

            } else {
                $response['message'] = 'Invalid request!!';
            }
        } else {
            $response['message'] = 'Invalid request!!';
        }

        return response()->json(json_encode($response));
    }

    public function vehicleAutocomplete(Request $request)
    {
        if ($request->has('q')) {
            $param = $request->get('q');

            $vehicles = Vehicle::where(function ($query) use ($param) {
                    $query->where('number', 'like', '%' . $param . '%')
                        ->orwhere('type', 'like', '%' . $param . '%')
                        ->orwhere('model', 'like', '%' . $param . '%');
                })
                ->get();


            return response()->json($vehicles);
        }

        abort(501);
    }
}