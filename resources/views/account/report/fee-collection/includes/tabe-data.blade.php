<hr class="hr hr-2">
<div class="row align-center">
    <span class="receipt-copy">{{$data['print_head']}}</span>
</div>
<hr class="hr hr-2">
{{--<table width="90%">
    <thead>
    <tr>
        <th class="text-center">Particulars</th>
        <th class="text-right">Cr.</th>
        <th class="text-right">Dr.</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="text-right"><strong>Opening Balance </strong></td>
        <td class="text-right"><strong>{{ $data['total']['opening'] }}</strong> Cr.</td>
        <td class="text-right"> </td>
    </tr>
    <tr>
        <td class="text-left">Total Fee Collected</td>
        <td class="text-right">{{ $data['fee_collection'] }} Cr.</td>
        <td class="text-right"></td>
    </tr>
    <tr>
        <td class="text-left">Total Salary Pay</td>
        <td class="text-right"></td>
        <td class="text-right">{{ $data['salary_pay'] }} Dr.</td>
    </tr>
    <tr>
        <td class="text-left">Bank deposit / withdraw amount</td>
        <td class="text-right">{{$data['bank_transaction']->sum('cr_amt')}} Cr.</td>
        <td class="text-right">{{ $data['bank_transaction']->sum('dr_amt') }} Dr.</td>
    </tr>
    <tr>
        <td class="text-left">Transactions Income and Expenses on different heads</td>

        <td class="text-right">{{$data['transaction']->sum('cr_amount')}} Cr.</td>
        <td class="text-right">{{ $data['transaction']->sum('dr_amount') }} Dr.</td>
    </tr>
    <tr>
        <td class="text-right"><strong>Closing Balance Cash on Hand</strong></td>
        <td class="text-right"></td>
        <td class="text-right"><strong>{{ $data['total']['coh'] }}</strong> Dr.</td>
    </tr>
    </tbody>
    <tfoot>
    <tr style="font-size: 14px; background: orangered;color: white; border:1px black solid; font-weight: bold">
        <td class="text-center">Account Tally</td>
        <td class="text-right">{{ $data['total']['cr'] }} Cr.</td>
        <td class="text-right">{{ $data['total']['dr'] }} Dr.</td>
    </tr>
    </tfoot>
</table>--}}

<table width="90%" class="table-bordered">
    <thead>
        <tr>
            <th class="text-center">S.N.</th>
            <th class="text-center">Head</th>
            <th class="text-center">Amount</th>
        </tr>
    </thead>
    <tbody>
    @if (isset($data['fee_collection']) && $data['fee_collection']->count() > 0)
        @php($i=1)
        @foreach($data['fee_collection'] as $feesCollection)
            {{--@if($feesCollection->count() > 0)
                @foreach($feesCollection as $collection)--}}
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ ViewHelper::getFeeHeadById($feesCollection[0]->fee_head) }}</td>
                    <td class="text-right">{{ $feesCollection->sum('paid_amount') }}</td>
                @php($i++)
               {{-- @endforeach
            @endif--}}
        @endforeach
    @else
        <tr>
            <td colspan="11">No {{ $panel }} data found. Please Filter {{ $panel }} to show. </td>
        </tr>
    @endif
    </tbody>
    <tfoot>
    <tr style="font-size: 14px; background: orangered;color: white;">
        <td colspan="2" class="text-right">Total</td>
        <td  class="align-right">{{ $data['fee_collection_total'] }}</td>
    </tr>
    </tfoot>
</table>
