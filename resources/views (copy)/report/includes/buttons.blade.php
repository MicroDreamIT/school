<div class="clearfix hidden-print " >
    <div class="easy-link-menu align-right">
        <a class="page_nav_li {!! request()->is('report/student*')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('report.student') }}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Student</a>
        <a class="page_nav_li {!! request()->is('report/staff*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('report.staff') }}"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Staff</a>

    </div>
</div>
<hr class="hr-6">