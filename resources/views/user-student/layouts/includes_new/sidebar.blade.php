  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header" style="padding: 0px;">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('/')}}">
                        <!--<div class="brand-logo"></div>-->
                        <h2 class="brand-text mb-0"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Edu MIS IMS</h2>
                    </a></li>
                <!--<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>-->
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                 <li class="{!! request()->is('user-student')?'active':'' !!}">
            <a href="{{ route('user-student') }}" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>

        {{-- Profile --}}
        <li class="{!! request()->is('user-student/profile*')?'active':'' !!}">
            <a href="{{ route('user-student.profile') }}" >
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Profile </span>
            </a>
        </li>

        {{-- Account --}}
        <li class="{!! request()->is('user-student/fees*')?'active open':'' !!}  hover">
            <a href="{{ route('user-student.fees') }}" >
                <i class="menu-icon fa fa-calculator" aria-hidden="true"></i>
                <span class="menu-text">Fees</span>
            </a>
        </li>

        {{-- Library --}}
        <li class="{!! request()->is('user-student/library*')?'active':'' !!} hover">
            <a href="{{ route('user-student.library') }}" >
                <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                <span class="menu-text">Library</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Attendance --}}
        <li class="{!! request()->is('user-student/attendance*')?'active':'' !!} hover">
            <a href="{{ route('user-student.attendance') }}">
                <i class="menu-icon fa fa-calendar" aria-hidden="true"></i>
                <span class="menu-text"> Attendance</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Examination --}}
        <li class="{!! request()->is('user-student/exams*')?'active':'' !!} hover">
            <a href="{{ route('user-student.exams') }}">
                <i class="menu-icon fa fa-line-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Examination</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Hostel --}}
        <li class="{!! request()->is('user-student/hostel*')?'active':'' !!} hover">
            <a href="{{ route('user-student.hostel') }}">
                <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                <span class="menu-text"> Hostels </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Transport --}}
        <li class="{!! request()->is('user-student/transport*')?'active':'' !!} hover">
            <a href="{{ route('user-student.transport') }}">
                <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                <span class="menu-text"> Transport </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Subject --}}
        <li class="{!! request()->is('user-student/subject*')?'active':'' !!} hover">
            <a href="{{ route('user-student.subject') }}">
                <i class="menu-icon  fa fa-list-alt" aria-hidden="true"></i>
                <span class="menu-text"> Course </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Notice --}}
        <li class="{!! request()->is('user-student/notice*')?'active':'' !!} hover">
            <a href="{{ route('user-student.notice') }}">
                <i class="menu-icon  fa fa-bullhorn" aria-hidden="true"></i>
                <span class="menu-text"> Notice </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- HomeWork --}}
        {{--<li class="{!! request()->is('user-student/notice*')?'active':'' !!} hover">
            <a href="{{ route('user-student.notice') }}">
                <i class="menu-icon  fa fa-tasks" aria-hidden="true"></i>
                <span class="menu-text"> HomeWork </span>
            </a>
            <b class="arrow"></b>
        </li>--}}

        {{-- Download --}}
        <li class="{!! request()->is('user-student/download*')?'active':'' !!} hover">
            <a href="{{ route('user-student.download') }}">
                <i class="menu-icon  fa fa-download" aria-hidden="true"></i>
                <span class="menu-text"> Download </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Assignment --}}
        <li class="{!! request()->is('user-student/assignment*')?'active':'' !!} hover">
            <a href="{{ route('user-student.assignment') }}">
                <i class="menu-icon  fa fa-tasks" aria-hidden="true"></i>
                <span class="menu-text"> Assignment </span>
            </a>
            <b class="arrow"></b>
        </li>
            </ul>
        </div>
    </div>



  