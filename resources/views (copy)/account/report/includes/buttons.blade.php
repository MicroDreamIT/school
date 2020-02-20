<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="page_nav_li {!! request()->is('account/report/cash-book')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('account.report.cash-book') }}"><i class="fa fa-dollar" aria-hidden="true"></i>&nbsp;Cash Book</a>
        {{--<a class="page_nav_li {!! request()->is('account/report/fee-collection')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('account.report.fee-collection') }}"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;Fee Collection</a>--}}
        <a class="page_nav_li {!! request()->is('account/report/fee-collection-head')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('account.report.fee-collection-head') }}"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;Fee Collection Head</a>
    </div>
    <hr class="hr-4">
</div>
