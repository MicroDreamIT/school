<?php
//The Edu Mis

namespace App\Http\Controllers\Account\Transaction;

use App\Http\Controllers\CollegeBaseController;
use App\Http\Requests\Account\TransactionHead\AddValidation;
use App\Http\Requests\Account\TransactionHead\EditValidation;
use App\Models\AccountCategory;
use App\Models\TransactionHead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class TransactionHeadController extends CollegeBaseController
{
    protected $base_route = 'account.transaction-head';
    protected $view_path = 'account.transaction.head';
    protected $panel = 'Transaction Ledger';
    protected $filter_query = [];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        $data = [];

        $data['tr_head'] = TransactionHead::with('account_category')->select('id', 'tr_head', 'acc_id', 'status')
            ->where(function ($query) use ($request) {

                if ($request->has('tr_head') && $request->get('tr_head') != "") {
                    $query->where('tr_head', 'like', '%' . $request->tr_head . '%');
                    $this->filter_query['tr_head'] = $request->tr_head;
                }

                if ($request->has('acc_id') && $request->get('acc_id') > 0) {
                    $query->where('acc_id', '=', $request->acc_id);
                    $this->filter_query['acc_id'] = $request->acc_id;
                }

            })
            ->orderBy('tr_head','asc')->get();

        $aCat = AccountCategory::where('status',1)->pluck('ac_name','id')->toArray();
        $data['ac'] =  array_prepend($aCat,'Select Ledger Group','0');

        $data['url'] = URL::current();
        $data['filter_query'] = $this->filter_query;

        return response()->json($data);
    }

    public function store(AddValidation $request)
    {
        $request->merge(['created_by' => auth()->user()->id]);
        $request->merge(['slug' => $request->get('fee_head_title')]);

        $aCat = TransactionHead::create($request->all());

        return response()->json(['success', $this->panel . ' Created Successfully.']);
    }

    public function edit(Request $request, $id)
    {
        $data = [];
        if (!$data['row'] = TransactionHead::find($id))
            return parent::invalidRequest();

        $data['tr_head'] = TransactionHead::select('id', 'tr_head', 'acc_id', 'status')->orderBy('tr_head','asc')->get();

        $aCat = AccountCategory::where('status',1)->pluck('ac_name','id')->toArray();
        $data['ac'] =  array_prepend($aCat,'Select Ledger Group','0');

        $data['url'] = URL::current();
        $data['base_route'] = $this->base_route;
        return response()->json($data);
    }

    public function update(EditValidation $request, $id)
    {
        if (!$row = TransactionHead::find($id)) return parent::invalidRequest();

        $request->merge(['last_updated_by' => auth()->user()->id]);
        $request->merge(['slug' => $request->get('fee_head_title')]);

        $row->update($request->all());

        $request->session()->flash($this->message_success, $this->panel.' Updated Successfully.');
        return redirect()->route($this->base_route);
    }

    public function view(Request $request, $id)
    {
        $data = [];
        $data['row'] = TransactionHead::find($id);
        if (!$data['row'])
            return parent::invalidRequest();

        $transaction = $data['row']->tR()
            ->where(function ($query) use ($request) {
                if ($request->has('tr_start_date') && $request->has('tr_end_date')) {
                    $query->whereBetween('date', [$request->get('tr_start_date'), $request->get('tr_end_date')]);
                    $this->filter_query['tr_start_date'] = $request->get('tr_start_date');
                    $this->filter_query['tr_end_date'] = $request->get('tr_end_date');
                }
                elseif ($request->has('tr_start_date')) {
                    $query->where('date', '>=', $request->get('tr_start_date'));
                    $this->filter_query['tr_start_date'] = $request->get('tr_start_date');
                }
                elseif($request->has('tr_end_date')) {
                    $query->where('date', '<=', $request->get('tr_end_date'));
                    $this->filter_query['tr_end_date'] = $request->get('tr_end_date');
                }
            })
            ->get();


        $filteredTransaction  = $transaction->filter(function ($value, $key){
            $value->balance = $value->dr_amount - $value->cr_amount;
            return $value;
        });

        $data['transaction'] = $filteredTransaction;

        $data['url'] = URL::current();
        $data['base_route'] = $this->base_route;
        return view(parent::loadDataToView($this->view_path.'.detail.index'), compact('data'));
    }

    public function delete(Request $request, $id)
    {
        if (!$row = TransactionHead::find($id)) return parent::invalidRequest();

        $row->delete();
        $request->session()->flash($this->message_success, $this->panel.' Deleted Successfully.');
        return redirect()->route($this->base_route);
    }

    public function bulkAction(Request $request)
    {
        if ($request->has('bulk_action') && in_array($request->get('bulk_action'), ['active', 'in-active', 'delete'])) {

            if ($request->has('chkIds')) {
                foreach ($request->get('chkIds') as $row_id) {
                    switch ($request->get('bulk_action')) {
                        case 'active':
                        case 'in-active':
                            $row = TransactionHead::find($row_id);
                            if ($row) {
                                $row->status = $request->get('bulk_action') == 'active'?'active':'in-active';
                                $row->save();
                            }
                            break;
                        case 'delete':
                            $row = TransactionHead::find($row_id);
                            $row->delete();
                            break;
                    }
                }

                if ($request->get('bulk_action') == 'active' || $request->get('bulk_action') == 'in-active')
                    $request->session()->flash($this->message_success, $request->get('bulk_action'). ' Action Successfully.');
                else
                    $request->session()->flash($this->message_success, 'Deleted successfully.');

                return redirect()->route($this->base_route);

            } else {
                $request->session()->flash($this->message_warning, 'Please, Check at least one row.');
                return redirect()->route($this->base_route);
            }

        } else return parent::invalidRequest();

    }

    public function active(request $request, $id)
    {
        if (!$row = TransactionHead::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'active']);

        $row->update($request->all());

        $request->session()->flash($this->message_success, $row->faculty.' '.$this->panel.' Active Successfully.');
        return redirect()->route($this->base_route);
    }

    public function inActive(request $request, $id)
    {
        if (!$row = TransactionHead::find($id)) return parent::invalidRequest();

        $request->merge(['status' => 'in-active']);

        $row->update($request->all());

        $request->session()->flash($this->message_success, $row->faculty.' '.$this->panel.' In-Active Successfully.');
        return redirect()->route($this->base_route);
    }
}
