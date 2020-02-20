<div class="clearfix hidden-print ">
    <div class="align-right">
        <a class="page_nav_li {!! request()->is('exam')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('exam') }}"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Exame Type</a>
        <a class="page_nav_li {!! request()->is('exam/schedule*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('exam.schedule') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Schedule</a>
        <a class="page_nav_li {!! request()->is('exam/mark-ledger')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('exam.mark-ledger') }}"><i class="fa fa-share-alt" aria-hidden="true"></i>&nbsp;Manage Mark Ledger</a>
    </div>
</div>
<hr class="hr-6">