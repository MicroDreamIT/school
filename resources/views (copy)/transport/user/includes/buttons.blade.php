<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="page_nav_li {!! request()->is('transport/user')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('transport.user') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Detail</a>
        <a class="page_nav_li {!! request()->is('transport/user/add')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('transport.user.add') }}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Registration</a>
        <a class="page_nav_li {!! request()->is('transport/user/history')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('transport.user.history') }}"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;History</a>
    </div>
</div>
<hr class="hr-4">