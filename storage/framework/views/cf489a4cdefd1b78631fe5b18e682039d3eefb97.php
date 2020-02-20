<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="<?php echo e(route('home'), false); ?>" class="navbar-brand">
                <small class="text-capitalize">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <?php if(isset($generalSetting->institute)): ?>
                        <?php echo e($generalSetting->institute, false); ?>

                    <strong class="text-capitalize orange2"> IMS </strong>
                    <?php else: ?>
                       Edu MIS
                    <?php endif; ?>
                </small>
            </a>

            <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                <span class="sr-only">Toggle user menu</span>

                <img src="<?php echo e(asset('assets/images/avatars/user.jpg'), false); ?>" alt="Jason's Photo" />
            </button>

            <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue dropdown-modal user-min">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <?php if(isset(auth()->user()->profile_image)): ?>
                            <img class="nav-user-photo" src="<?php echo e(asset('images/user/'.auth()->user()->profile_image), false); ?>" alt="" />
                            
                        <?php else: ?>
                            <img class="nav-user-photo" src="<?php echo e(asset('assets/images/avatars/user.jpg'), false); ?>" alt="Jason's Photo" />
                        <?php endif; ?>

                        <span class="user-info">
                            <small>Welcome,</small>
                            <?php echo e(isset(auth()->user()->name)?auth()->user()->name:"", false); ?>

                        </span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <?php if(isset(auth()->user()->profile_image)): ?>
                            <li>
                                <img class="profile-picture" src="<?php echo e(asset('images/user/'.auth()->user()->profile_image), false); ?>" alt="" />
                            </li>
                        <?php endif; ?>
                        <li>
                            <?php if(isset(auth()->user()->id)): ?>
                            <a href="<?php echo e(route('user.view', ['id' => encrypt(auth()->user()->id)]), false); ?>">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                            <?php else: ?>
                                <a href="#">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            <?php endif; ?>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token(), false); ?>">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php if (\Entrust::ability('super-admin','expand-action-menu')) : ?>
        <div class="navbar-buttons navbar-header pull-left  collapse navbar-collapse" role="navigation">
            <div class="collapse navbar-collapse js-navbar-collapse col-md-12">
                <ul class="nav navbar-nav navbar-nav-mega col-md-12">
                    <li class="dropdown mega-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-list"></span>&nbsp;&nbsp;Expand Actions</a>
                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header"><i class="fa fa-users" aria-hidden="true"></i> Student</li>
                                    <li><a href="<?php echo e(route('student'), false); ?>">Detail</a></li>
                                    <li><a href="<?php echo e(route('student.registration'), false); ?>">Registration</a></li>
                                    <li><a href="<?php echo e(route('student.import'), false); ?>">Bulk Import</a></li>
                                    <li><a href="<?php echo e(route('student.transfer'), false); ?>">Transfer</a></li>
                                    <li><a href="<?php echo e(route('student.document'), false); ?>">Documents</a></li>
                                    <li><a href="<?php echo e(route('student.note'), false); ?>">Notes</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-user-secret" aria-hidden="true"></i> Guardian</li>
                                    <li><a href="<?php echo e(route('guardian'), false); ?>">Detail</a></li>
                                    <li><a href="<?php echo e(route('guardian.registration'), false); ?>">Registration</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-user-secret" aria-hidden="true"></i> Staff</li>
                                    <li><a href="<?php echo e(route('staff'), false); ?>">Detail</a></li>
                                    <li><a href="<?php echo e(route('staff.add'), false); ?>">Registration</a></li>
                                    <li><a href="<?php echo e(route('staff.import'), false); ?>">Bulk Import</a></li>
                                    <li><a href="<?php echo e(route('staff.document'), false); ?>">Documents</a></li>
                                    <li><a href="<?php echo e(route('staff.note'), false); ?>">Notes</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Attendance</li>
                                    <li><a href="<?php echo e(route('attendance.student'), false); ?>">Regular Attendance</a></li>
                                    <li><a href="<?php echo e(route('attendance.subject'), false); ?>">Subject Attendance</a></li>
                                    <li><a href="<?php echo e(route('attendance.staff'), false); ?>">Staff Attendance</a></li>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header"><i class="fa fa-calculator" aria-hidden="true"></i> Account</li>
                                    <li><a href="<?php echo e(route('account.fees.quick-receive'), false); ?>">Quick Receive</a></li>
                                    <li><a href="<?php echo e(route('account.fees.collection'), false); ?>">Collect Fees</a></li>
                                    <li><a href="<?php echo e(route('account.fees.balance'), false); ?>">Balance Fees</a></li>
                                    <li><a href="<?php echo e(route('account.fees.master.add'), false); ?>">Add Fees</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo e(route('account.payroll.master.add'), false); ?>">Add Salary</a></li>
                                    <li><a href="<?php echo e(route('account.salary.payment'), false); ?>">Pay Salary</a></li>
                                    <li><a href="<?php echo e(route('account.payroll.balance'), false); ?>">Balance Salary</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo e(route('account.transaction'), false); ?>">Transaction</a></li>
                                    <li><a href="<?php echo e(route('account.transaction-head'), false); ?>">Legers</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo e(route('account.bank'), false); ?>">Bank AC</a></li>
                                    <li><a href="<?php echo e(route('account.bank-transaction'), false); ?>">Bank Transaction</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-book" aria-hidden="true"></i> Library</li>
                                    <li><a href="<?php echo e(route('library.book'), false); ?>">Books Detail</a></li>
                                    <li><a href="<?php echo e(route('library.student'), false); ?>">Student Member</a></li>
                                    <li><a href="<?php echo e(route('library.staff'), false); ?>">Staff Member</a></li>
                                    <li><a href="<?php echo e(route('library.issue-history'), false); ?>">Issue History</a></li>
                                    <li><a href="<?php echo e(route('library.return-over'), false); ?>">Return Period Over</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header"><i class="fa fa-line-chart" aria-hidden="true"></i> Examination</li>
                                    <li><a href="<?php echo e(route('exam.schedule'), false); ?>">Exam Schedule </a></li>
                                    <li><a href="<?php echo e(route('exam.mark-ledger'), false); ?>">Mark Ledger</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo e(route('exam.admit-card'), false); ?>">Admit Card</a></li>
                                    <li><a href="<?php echo e(route('exam.routine'), false); ?>">Routine</a></li>
                                    <li><a href="<?php echo e(route('exam.mark-sheet'), false); ?>">MarkSheet/Score</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-certificate" aria-hidden="true"></i> Certificate</li>
                                    <li><a href="<?php echo e(route('certificate.issue'), false); ?>">Issue</a></li>
                                    <li><a href="<?php echo e(route('certificate.issue-history'), false); ?>">Issue History</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo e(route('certificate.attendance'), false); ?>">Attendance</a></li>
                                    <li><a href="<?php echo e(route('certificate.transfer'), false); ?>">Transfer</a></li>
                                    <li><a href="<?php echo e(route('certificate.bonafide'), false); ?>">Bonafide</a></li>
                                    <li><a href="<?php echo e(route('certificate.course-completion'), false); ?>">Course Completion</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo e(route('certificate.generate'), false); ?>">Generate</a></li>
                                    <li><a href="<?php echo e(route('certificate.template'), false); ?>">Templating</a></li>
                                    <li class="divider"></li>

                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header"><i class="fa fa-car" aria-hidden="true"></i> Transport</li>
                                    <li><a href="<?php echo e(route('transport.user.history'), false); ?>">User Hstory</a></li>
                                    <li><a href="<?php echo e(route('transport.user'), false); ?>">Traveller/User</a></li>
                                    <li><a href="<?php echo e(route('transport.route'), false); ?>">Route</a></li>
                                    <li><a href="<?php echo e(route('transport.vehicle'), false); ?>">Vehicle</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-bed" aria-hidden="true"></i> Hostel</li>
                                    <li><a href="<?php echo e(route('hostel.resident'), false); ?>">Resident</a></li>
                                    <li><a href="<?php echo e(route('hostel.resident.history'), false); ?>">Resident History</a></li>
                                    <li><a href="<?php echo e(route('hostel'), false); ?>">Hostel Detail</a></li>
                                    <li><a href="<?php echo e(route('hostel.food'), false); ?>">Food & Meal</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> Alert</li>
                                    <li><a href="<?php echo e(route('info.notice'), false); ?>">User Notice</a></li>
                                    <li><a href="<?php echo e(route('info.smsemail'), false); ?>">Send SMS/Email</a></li>
                                    <li><a href="<?php echo e(route('setting.alert'), false); ?>">Alert Templating</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header"><i class="fa fa-th-list" aria-hidden="true"></i> More</li>
                                    <li><a href="<?php echo e(route('info.notice'), false); ?>">Assignment</a></li>
                                    <li><a href="<?php echo e(route('info.smsemail'), false); ?>">Upload/Download</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <?php endif; // Entrust::ability ?>
        
        <?php if (\Entrust::ability('super-admin', 'admin-control')) : ?>
        <nav role="navigation" class="navbar-menu pull-right collapse navbar-collapse">
            <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Admin Control
                            &nbsp;
                            <i class="ace-icon fa fa-angle-down bigger-110"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                            <li> <a href="<?php echo e(route('user'), false); ?>"> <i class="ace-icon fa fa-user bigger-110 blue"></i> Users & Roles </a></li>
                            <li> <a href="<?php echo e(route('super-suit.user-activity'), false); ?>"> <i class="ace-icon fa fa-history bigger-110 blue"></i> User Activity </a>
                            </li>
                            <li><a href="<?php echo e(route('setting.general'), false); ?>"><i class="fa fa-cog fa fa-cogs bigger-110 blue"></i>&nbsp;General Setting <span class="red">*</span></a></li>
                            <li><a href="<?php echo e(route('setting.sms'), false); ?>"><i class="fa fa-mobile fa fa-cogs bigger-110 blue"></i>&nbsp;SMS Setting</a></li>
                            <li><a href="<?php echo e(route('setting.email'), false); ?>"><i class="fa fa-envelope fa fa-cogs bigger-110 blue"></i>&nbsp;E-Mail Setting</a></li>
                            <li><a href="<?php echo e(route('setting.alert'), false); ?>"><i class="fa fa-bell icon-animated-bell fa fa-cogs bigger-110 blue"></i>&nbsp;Alert Setting</a></li>
                            <li><a href="<?php echo e(route('setting.payment-gateway'), false); ?>"><i class="fa fa-dollar fa fa-cogs bigger-110 blue"></i>&nbsp;Payment Gateway</a></li>
                        </ul>
                    </li>
            </ul>
        </nav>
        <?php endif; // Entrust::ability ?>
        <?php if (\Entrust::ability('super-admin','super-suit')) : ?>
        
        <?php endif; // Entrust::ability ?>

    </div><!-- /.navbar-container -->
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/layouts/includes/nav.blade.php ENDPATH**/ ?>