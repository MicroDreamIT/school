@extends('layouts.master')

@section('css')
    <!-- page specific plugin styles -->
    @include('print.student-fee.includes.receipt-css')
@endsection

@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                @include('layouts.includes.template_setting')
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="space-6"></div>

                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="widget-box transparent">
                                    @include('print.student-fee.includes.print-header')

                                    <div class="widget-body">
                                        <div class="widget-main padding-24">

                                            @include('print.student-fee.includes.institution-detail')
                                            <hr class="hr hr-2">
                                            <div class="row align-center">
                                                <span class="receipt-copy">LEDGER</span>
                                            </div>
                                            <hr class="hr hr-2">
                                            @include('print.student-fee.includes.studentinfo')

                                            <div>
                                                <table class="table table-striped table-bordered no-margin-bottom">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th class="center"></th>
                                                            <th></th>
                                                            <th>Head</th>
                                                            <th>DueOn</th>
                                                            <th>Amount</th>
                                                            <th>Date</th>
                                                            <th>Di</th>
                                                            <th>Fi</th>
                                                            <th>Paid</th>
                                                            <th>Due</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    {{--{{$data['student']->feeMaster}}--}}
                                                        @if($data['student']->feeMaster && $data['student']->feeMaster->count() > 0)
                                                            @php($i=1)
                                                            @foreach($data['student']->feeMaster as $feeMaster)
                                                                <tr style="font-weight: bold">
                                                                    <td class="center">{{ $i }}</td>
                                                                    <td>
                                                                        {{ ViewHelper::getSemesterById($feeMaster->semester) }}
                                                                    </td>
                                                                    <td>
                                                                        {{ ViewHelper::getFeeHeadById($feeMaster->fee_head) }}
                                                                    </td>
                                                                    <td>
                                                                        {{ \Carbon\Carbon::parse($feeMaster->fee_due_date)->format('Y-m-d') }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $amount = $feeMaster->fee_amount?$feeMaster->fee_amount:'-' }}
                                                                    </td>
                                                                    <td></td>
                                                                    <td>
                                                                        @php($fmDiscount = $feeMaster->feeCollect()->sum('discount'))
                                                                        {{($fmDiscount >0)?$fmDiscount:'-'}}
                                                                    </td>
                                                                    <td>
                                                                        @php($fmFine = $feeMaster->feeCollect()->sum('fine'))
                                                                        {{($fmFine >0)?$fmFine:'-'}}
                                                                    </td>
                                                                    <td>
                                                                        @php($paid = $feeMaster->feeCollect->sum('paid_amount'))
                                                                        {{ $paid?$paid:'-' }}
                                                                    </td>
                                                                    <td>
                                                                        @php($balance = ($feeMaster->fee_amount + $fmFine) - ($paid + $fmDiscount))
                                                                        {{ $balance?$balance:'PAID' }}
                                                                    </td>
                                                                </tr>
                                                                @if($feeMaster->feeCollect )
                                                                    @foreach($feeMaster->feeCollect as $feeCollection)
                                                                        <tr>
                                                                            <td colspan="5"></td>
                                                                            <td> {{ \Carbon\Carbon::parse($feeCollection->date)->format('Y-m-d')}}</td>
                                                                            <td>{{ $feeCollection->discount?$feeCollection->discount:'-' }}</td>
                                                                            <td>{{ $feeCollection->fine?$feeCollection->fine:"-" }}</td>
                                                                            <td>{{ $feeCollection->paid_amount?$feeCollection->paid_amount:'-' }}</td>
                                                                            <td> </td>
                                                                        </tr>
                                                                    @endforeach
                                                                @endif
                                                                @php($i++)
                                                            @endforeach
                                                            <tr style="font-size: 14px; background: orangered;color: white;">
                                                                <td colspan="4">Total</td>
                                                                <td>{{ $data['student']->fee_amount?$data['student']->fee_amount:'-' }}</td>
                                                                <td></td>
                                                                <td>{{ $data['student']->discount?$data['student']->discount:'-' }}</td>
                                                                <td>{{ $data['student']->fine?$data['student']->fine:'-' }}</td>
                                                                <td>{{ $data['student']->paid_amount?$data['student']->paid_amount:'-' }}</td>
                                                                <td>
                                                                    {{ $data['student']->balance?$data['student']->balance:'-' }}
                                                                </td>

                                                            </tr>
                                                        @else
                                                            <tr colspan="8"></tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="hr hr8 hr-dotted"></div>

                                            <div class="row text-uppercase">
                                                <div class="col-sm-5 pull-right align-right">
                                                    Total :<strong>{{$data['student']->paid_amount}}/-</strong>
                                                </div>
                                                <div class="col-sm-7 pull-left">
                                                   In Word:<strong> {{ ViewHelper::convertNumberToWord($data['student']->paid_amount) }}only.</strong>
                                                </div>
                                            </div>
                                            <div class="hr hr8 hr-double"></div>
                                            <div class="row text-uppercase">
                                                <div class="col-sm-5 pull-right align-right">
                                                   Total Balance :<strong>{{$data['student']->balance }}/-</strong>
                                                </div>
                                                <div class="col-sm-7 pull-left">
                                                    Balance In Word:<strong> {{ ViewHelper::convertNumberToWord($data['student']->balance ) }}only.</strong>
                                                </div>
                                            </div>
                                            <div class="hr hr-4 hr-dotted"></div>
                                            @include('print.student-fee.includes.print-footer')
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->
    @endsection


@section('js')
    <!-- inline scripts related to this page -->
    @include('includes.scripts.print_script')
    @endsection