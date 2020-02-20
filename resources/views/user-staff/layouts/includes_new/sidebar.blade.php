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
        {{-- Dashboard --}}
        <li class="{!! request()->is('user-staff')?'active':'' !!}">
            <a href="{{ route('user-staff') }}" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>

        {{-- Account --}}
        <li class="{!! request()->is('user-staff/payroll*')?'active open':'' !!}  hover">
            <a href="{{ route('user-staff.payroll') }}" >
                <i class="menu-icon fa fa-calculator" aria-hidden="true"></i>
                <span class="menu-text">Payroll</span>
            </a>
        </li>

        {{-- Library --}}
        <li class="{!! request()->is('user-staff/library*')?'active':'' !!} hover">
            <a href="{{ route('user-staff.library') }}" >
                <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                <span class="menu-text">Library</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Attendance --}}
        <li class="{!! request()->is('user-staff/attendance*')?'active':'' !!} hover">
            <a href="{{ route('user-staff.attendance') }}">
                <i class="menu-icon fa fa-calendar" aria-hidden="true"></i>
                <span class="menu-text"> Attendance</span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Hostel --}}
        <li class="{!! request()->is('user-staff/hostel*')?'active':'' !!} hover">
            <a href="{{ route('user-staff.hostel') }}">
                <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                <span class="menu-text"> Hostels </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Transport --}}
        <li class="{!! request()->is('user-staff/transport*')?'active':'' !!} hover">
            <a href="{{ route('user-staff.transport') }}">
                <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                <span class="menu-text"> Transport </span>
            </a>
            <b class="arrow"></b>
        </li>

        <li class="{!! request()->is('user-staff/subject*')?'active':'' !!} hover">
            <a href="{{ route('user-staff.subject') }}">
                <i class="menu-icon  fa fa-list-alt" aria-hidden="true"></i>
                <span class="menu-text"> Course </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Notice --}}
        <li class="{!! request()->is('user-staff/notice*')?'active':'' !!} hover">
            <a href="{{ route('user-staff.notice') }}">
                <i class="menu-icon  fa fa-bullhorn" aria-hidden="true"></i>
                <span class="menu-text"> Notice </span>
            </a>
            <b class="arrow"></b>
        </li>

        {{-- Assignment --}}
        @ability('super-admin','assignment')
        <li class="{!! request()->is('user-staff/assignment*')?'active':'' !!} hover">
            <a href="{{ route('user-staff.assignment') }}">
                <i class="menu-icon  fa fa-tasks" aria-hidden="true"></i>
                <span class="menu-text"> Assignment </span>
            </a>
            <b class="arrow"></b>
        </li>
        @endability
    </ul>
        </div>
    </div>



  