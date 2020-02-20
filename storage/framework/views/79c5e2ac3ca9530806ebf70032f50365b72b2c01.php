  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header" style="padding: 0px;">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo e(url('/'), false); ?>">
                        <!--<div class="brand-logo"></div>-->
                        <h2 class="brand-text mb-0"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Edu MIS IMS</h2>
                    </a></li>
                <!--<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>-->
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                 <li class="<?php echo request()->is('user-student')?'active':''; ?>">
            <a href="<?php echo e(route('user-student'), false); ?>" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>

        
        <li class="<?php echo request()->is('user-student/profile*')?'active':''; ?>">
            <a href="<?php echo e(route('user-student.profile'), false); ?>" >
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text"> Profile </span>
            </a>
        </li>

        
        <li class="<?php echo request()->is('user-student/fees*')?'active open':''; ?>  hover">
            <a href="<?php echo e(route('user-student.fees'), false); ?>" >
                <i class="menu-icon fa fa-calculator" aria-hidden="true"></i>
                <span class="menu-text">Fees</span>
            </a>
        </li>

        
        <li class="<?php echo request()->is('user-student/library*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.library'), false); ?>" >
                <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                <span class="menu-text">Library</span>
            </a>
            <b class="arrow"></b>
        </li>

        
        <li class="<?php echo request()->is('user-student/attendance*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.attendance'), false); ?>">
                <i class="menu-icon fa fa-calendar" aria-hidden="true"></i>
                <span class="menu-text"> Attendance</span>
            </a>
            <b class="arrow"></b>
        </li>

        
        <li class="<?php echo request()->is('user-student/exams*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.exams'), false); ?>">
                <i class="menu-icon fa fa-line-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Examination</span>
            </a>
            <b class="arrow"></b>
        </li>

        
        <li class="<?php echo request()->is('user-student/hostel*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.hostel'), false); ?>">
                <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                <span class="menu-text"> Hostels </span>
            </a>
            <b class="arrow"></b>
        </li>

        
        <li class="<?php echo request()->is('user-student/transport*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.transport'), false); ?>">
                <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                <span class="menu-text"> Transport </span>
            </a>
            <b class="arrow"></b>
        </li>

        
        <li class="<?php echo request()->is('user-student/subject*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.subject'), false); ?>">
                <i class="menu-icon  fa fa-list-alt" aria-hidden="true"></i>
                <span class="menu-text"> Course </span>
            </a>
            <b class="arrow"></b>
        </li>

        
        <li class="<?php echo request()->is('user-student/notice*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.notice'), false); ?>">
                <i class="menu-icon  fa fa-bullhorn" aria-hidden="true"></i>
                <span class="menu-text"> Notice </span>
            </a>
            <b class="arrow"></b>
        </li>

        
        

        
        <li class="<?php echo request()->is('user-student/download*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.download'), false); ?>">
                <i class="menu-icon  fa fa-download" aria-hidden="true"></i>
                <span class="menu-text"> Download </span>
            </a>
            <b class="arrow"></b>
        </li>

        
        <li class="<?php echo request()->is('user-student/assignment*')?'active':''; ?> hover">
            <a href="<?php echo e(route('user-student.assignment'), false); ?>">
                <i class="menu-icon  fa fa-tasks" aria-hidden="true"></i>
                <span class="menu-text"> Assignment </span>
            </a>
            <b class="arrow"></b>
        </li>
            </ul>
        </div>
    </div>



  <?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/layouts/includes_new/sidebar.blade.php ENDPATH**/ ?>