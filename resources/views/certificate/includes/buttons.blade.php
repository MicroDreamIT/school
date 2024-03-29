<div class="clearfix hidden-print" >
    <div class="align-right">
        <a class="page_nav_li {!! request()->is('certificate/issue')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('certificate.issue') }}"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Issue</a>
        <a class="page_nav_li {!! request()->is('certificate/attendance*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('certificate.attendance') }}"><i class="fa fa-calendar" aria-hidden="true"></i> Attendance</a>
        <a class="page_nav_li {!! request()->is('certificate/transfer*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('certificate.transfer') }}"><i class="fa fa-exchange" aria-hidden="true"></i> Transfer</a>
        <a class="page_nav_li {!! request()->is('certificate/bonafide*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('certificate.bonafide') }}"><i class="fa fa-user" aria-hidden="true"></i> Bonafide</a>
        <a class="page_nav_li {!! request()->is('certificate/course-completion*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('certificate.course-completion') }}"><i class="fa fa-line-chart" aria-hidden="true"></i> Course Completion</a>
        <a class="page_nav_li {!! request()->is('certificate/issue-history*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('certificate.issue-history') }}"><i class="fa fa-history" aria-hidden="true"></i> History</a>
        <a class="page_nav_li {!! request()->is('certificate/generate*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('certificate.generate') }}"><i class="fa fa-certificate" aria-hidden="true"></i> Custom</a>
        <a class="page_nav_li {!! request()->is('certificate/template*')?'btn-success':'btn-primary' !!} btn-sm " href="{{ route('certificate.template') }}"><i class="fa fa-magic" aria-hidden="true"></i> Template</a>
    </div>
</div>
<hr class="hr-4">
