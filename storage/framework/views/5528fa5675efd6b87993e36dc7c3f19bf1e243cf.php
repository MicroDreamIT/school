<div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state hidden-print">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <ul class="nav nav-list">
        
        <li class="<?php echo request()->is('/')?'active':''; ?>">
            <a href="<?php echo e(route('home'), false); ?>" >
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
        </li>

        
        <?php if (\Entrust::ability('super-admin','student-staff')) : ?>
        <li class="<?php echo request()->is('student*')||request()->is('staff*')?'active open':''; ?>  hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-users" aria-hidden="true"></i>
                <span class="menu-text"> Student & Staff</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="<?php echo request()->is('student*')?'active open':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Student
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('student')?'active':''; ?> hover">
                            <a href="<?php echo e(route('student'), false); ?>" accesskey="S">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Student Detail
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('student/registration')?'active':''; ?> hover">
                            <a href="<?php echo e(route('student.registration'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Registration
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('student/import')?'active':''; ?> hover">
                            <a href="<?php echo e(route('student.import'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Bulk Import
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('student/transfer')?'active':''; ?> hover">
                            <a href="<?php echo e(route('student.transfer'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Transfer Student
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo request()->is('student/document')?'active':''; ?> hover">
                            <a href="<?php echo e(route('student.document'), false); ?>"  accesskey="U">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Document Upload
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('student/note')?'active':''; ?> hover">
                            <a href="<?php echo e(route('student.note'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                Create Notes
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="<?php echo request()->is('guardian*')?'active open':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Guardian
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('guardian')?'active':''; ?> hover">
                            <a href="<?php echo e(route('guardian'), false); ?>" accesskey="S">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Guardian Detail
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('guardian/registration')?'active':''; ?> hover">
                            <a href="<?php echo e(route('guardian.registration'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Registration
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="<?php echo request()->is('staff*')?'active open':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Staff
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('staff')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('staff'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Staff Detail
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('staff/add')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('staff.add'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Registration
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo request()->is('staff/import')?'active':''; ?> hover">
                            <a href="<?php echo e(route('staff.import'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Bulk Import
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('staff/document')?'active':''; ?> hover">
                            <a href="<?php echo e(route('staff.document'), false); ?>"  accesskey="U">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Document Upload
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('staff/note')?'active':''; ?> hover">
                            <a href="<?php echo e(route('staff.note'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                Create Notes
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('staff/designation')?'active':''; ?> hover">
                            <a href="<?php echo e(route('staff.designation'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"  accesskey="N"></i>
                                Designations
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','account')) : ?>
        <li class="<?php echo request()->is('account/*')?'active open':''; ?>  hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-calculator" aria-hidden="true"></i>
                <span class="menu-text"> Account</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="<?php echo request()->is('account/fees*')?'active open':''; ?> hover">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Fees Collection
                            <b class="arrow fa fa-angle-r"></b>
                        </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('account/fees')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('account.fees'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Receive Detail
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/fees/quick-receive')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('account.fees.quick-receive'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Quick Receive
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/fees/collection')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.fees.collection'), false); ?>" accesskey="R">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Collect Fees
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/fees/balance')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('account.fees.balance'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Balance Fees Report
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/fees/master/add')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.fees.master.add'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Add Fees
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/fees/head')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('account.fees.head'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Fees Head
                            </a>

                            <b class="arrow"></b>
                        </li>

                        </ul>
                    </li>

                <li class="<?php echo request()->is('account/payroll*')?'active open':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                       Payroll
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('account/payroll')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('account.payroll'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Paid Detail
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/salary/payment')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.salary.payment'), false); ?>" accesskey="R">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Salary Pay
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/payroll/master*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.payroll.master.add'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Add Payroll
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/payroll/balance')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('account.payroll.balance'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Balance Salary Report
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/payroll/head')?'active':''; ?>  hover">
                            <a href="<?php echo e(route('account.payroll.head'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Salary Head
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

                <li class="<?php echo request()->is('account/transaction*')?'active open':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Ledger & Transaction
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('account/transaction')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.transaction'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Transaction
                            </a>
                        </li>
                        <li class="<?php echo request()->is('account/transaction-head')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.transaction-head'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Ledger
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

                <li class="<?php echo request()->is('account/bank*')?'active open':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Bank
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('account/bank')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.bank'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Manage Bank Accounts
                            </a>
                        </li>
                        <li class="<?php echo request()->is('account/bank/add')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.bank.add'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Add New Bank
                            </a>
                        </li>

                        <li class="<?php echo request()->is('account/bank-transaction')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.bank-transaction'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Transaction Detail
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('account/bank-transaction/add')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.bank-transaction.add'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                New Transaction
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

                <li class="<?php echo request()->is('account/report*')?'active open':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Report
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('account/report/cash-book*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.report.cash-book'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Cash Book
                            </a>
                        </li>

                       

                        <li class="<?php echo request()->is('account/report/fee-collection-head*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('account.report.fee-collection-head'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Fee Collection Head
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','library')) : ?>
        <li class="<?php echo request()->is('library*')?'active':''; ?> hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                <span class="menu-text">Library</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>

            <ul class="submenu">
                <li class="<?php echo request()->is('library/book*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('library.book'), false); ?>" accesskey="L" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Books
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('library/member*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('library.book'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Book Detail
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo request()->is('library/book/add*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('library.book.add'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                               Add New
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('library/book/import*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('library.book.import'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Bulk Import
                            </a>

                            <b class="arrow"></b>
                        </li>


                        <li class="<?php echo request()->is('library/book/category*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('library.book.category'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                               Category
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

                <li class="<?php echo request()->is('library/member*') || request()->is('library/student*') || request()->is('library/staff*') ?'active':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Members
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('library/member*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('library.member'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Membership
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo request()->is('library/student*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('library.student'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Student Member
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('library/staff*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('library.staff'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Staff Member
                            </a>

                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>

                <li class="<?php echo request()->is('library/issue-history*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('library.issue-history'), false); ?>">
                        <i class="menu-icon fa fa-history"></i>
                        Issue History
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('library/return-over*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('library.return-over'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Return Period Over
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('library/circulation*')?'active':''; ?>  hover">
                    <a href="<?php echo e(route('library.circulation'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Circulation Setting
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','attendance')) : ?>
        <li class="<?php echo request()->is('attendance*')?'active':''; ?> hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-calendar" aria-hidden="true"></i>
                <span class="menu-text"> Attendance</span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">


                <li class="hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Student Attendance
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('attendance/student*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('attendance.student'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Regular Attendance
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo request()->is('attendance/subject*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('attendance.subject'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Subject Wise Attendance
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="<?php echo request()->is('attendance/staff*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('attendance.staff'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Staff Attendance
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('attendance/master*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('attendance.master'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Monthly Calendar
                    </a>

                    <b class="arrow"></b>
                </li>

            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','examination')) : ?>
        <li class="<?php echo request()->is('exam*')?'active':''; ?> hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-line-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Examination</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="<?php echo request()->is('exam/schedule*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('exam.schedule'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Schedule Exam
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('exam/mark-ledger')?'active':''; ?>  hover">
                    <a href="<?php echo e(route('exam.mark-ledger'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Mark Ledger
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('exam')?'active':''; ?> hover">
                    <a href="<?php echo e(route('exam'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Exams Head
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('exam/admit-card*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('exam.admit-card'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Admit Card
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="<?php echo request()->is('exam/routine*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('exam.routine'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Routine/Schedule
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="<?php echo request()->is('exam/mark-sheet*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('exam.mark-sheet'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Grade/Mark/Ledger Sheet
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','certificate')) : ?>
        <li class="<?php echo request()->is('certificate*')?'active':''; ?> hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-certificate"  aria-hidden="true"></i>
                <span class="menu-text"> Certificate</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="<?php echo request()->is('certificate/issue')?'active':''; ?> hover">
                    <a href="<?php echo e(route('certificate.issue'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Issue Certificate
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('certificate/attendance*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('certificate.attendance'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Attendance Certificate
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('certificate/transfer*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('certificate.transfer'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Transfer Certificate
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('certificate/bonafide*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('certificate.bonafide'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Bonafide Certificate
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('certificate/course-completion*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('certificate.course-completion'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Course Completion Cer.
                    </a>
                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('certificate/issue-history*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('certificate.issue-history'), false); ?>">
                        <i class="menu-icon fa fa-history"></i>
                        Issue History
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('certificate/generate*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('certificate.generate'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Custom Print
                    </a>
                    <b class="arrow"></b>
                </li>
                <li class="<?php echo request()->is('certificate/template*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('certificate.template'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Certificate Template
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','hostel')) : ?>
        <li class="<?php echo request()->is('hostel*')?'active':''; ?> hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                <span class="menu-text"> Hostels </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="<?php echo request()->is('hostel/resident*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('hostel.resident'), false); ?>" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Resident
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('hostel/resident')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel.resident'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Detail
                            </a>
                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo request()->is('hostel/resident/add')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel.resident.add'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Registration
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('hostel/resident/history')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel.resident.history'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Occupant History
                            </a>
                            <b class="arrow"></b>
                        </li>

                    </ul>
                </li>
                <li class="<?php echo request()->is('hostel') || request()->is('hostel/room-type')?'active':''; ?> hover">
                    <a href="<?php echo e(route('hostel'), false); ?>" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Hostel
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">

                        <li class="<?php echo request()->is('hostel*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Hostel
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('hostel/room-type*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel.room-type'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Room Type
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="<?php echo request()->is('hostel/food*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('hostel'), false); ?>" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Food & Meal
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('hostel/food*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel.food'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Meal Schedule
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('hostel/food/eating-time*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel.food.eating-time'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Eating Time
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('hostel/food/category*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel.food.category'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Food Category
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('hostel/food/item*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('hostel.food.item'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Food Item
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','transport')) : ?>
        <li class="<?php echo request()->is('transport*')?'active':''; ?> hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                <span class="menu-text"> Transport </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
             <ul class="submenu">
                 <li class="<?php echo request()->is('transport/user*')?'active':''; ?> hover">
                     <a href="<?php echo e(route('transport.user'), false); ?>" class="dropdown-toggle">
                         <i class="menu-icon fa fa-caret-right"></i>
                         Traveller/User
                         <b class="arrow fa fa-angle-r"></b>
                     </a>
                     <b class="arrow"></b>
                     <ul class="submenu">
                         <li class="<?php echo request()->is('transport/user')?'active':''; ?> hover">
                             <a href="<?php echo e(route('transport.user'), false); ?>">
                                 <i class="menu-icon fa fa-caret-right"></i>
                                 Detail
                             </a>
                             <b class="arrow"></b>
                         </li>
                         <li class="<?php echo request()->is('transport/user/add')?'active':''; ?> hover">
                             <a href="<?php echo e(route('transport.user.add'), false); ?>">
                                 <i class="menu-icon fa fa-caret-right"></i>
                                 Registration
                             </a>
                             <b class="arrow"></b>
                         </li>

                         <li class="<?php echo request()->is('transport/user/history')?'active':''; ?> hover">
                             <a href="<?php echo e(route('transport.user.history'), false); ?>">
                                 <i class="menu-icon fa fa-caret-right"></i>
                                 User History
                             </a>
                             <b class="arrow"></b>
                         </li>

                     </ul>
                 </li>
                 <li class="<?php echo request()->is('transport/route*')?'active':''; ?> hover">
                     <a href="<?php echo e(route('transport.route'), false); ?>">
                         <i class="menu-icon fa fa-caret-right"></i>
                         Route
                         <b class="arrow fa fa-angle-r"></b>
                     </a>
                     <b class="arrow"></b>
                 </li>

                 <li class="<?php echo request()->is('transport/vehicle*')?'active':''; ?> hover">
                     <a href="<?php echo e(route('transport.vehicle'), false); ?>">
                         <i class="menu-icon fa fa-caret-right"></i>
                         Vehicle
                         <b class="arrow fa fa-angle-r"></b>
                     </a>
                     <b class="arrow"></b>
                 </li>

             </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','assignment,download')) : ?>
        <li class="hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon  fa fa-th-list" aria-hidden="true"></i>
                <span class="menu-text"> More </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <?php if (\Entrust::ability('super-admin','assignment')) : ?>
                <li class="<?php echo request()->is('assignment')?'active':''; ?> hover">
                    <a href="<?php echo e(route('assignment'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Assignment
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','download')) : ?>
                <li class="<?php echo request()->is('download*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('download'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Upload & Download
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                </li>
                <?php endif; // Entrust::ability ?>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>


        
        <?php if (\Entrust::ability('super-admin','report')) : ?>
        <li class="<?php echo request()->is('report*')?'active':''; ?> hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-bar-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Report Links</span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="<?php echo request()->is('report/student*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('report.student'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Student Detail
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="<?php echo request()->is('report/staff*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('report.staff'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Staff Detail
                    </a>

                    <b class="arrow"></b>
                </li>
                <?php if (\Entrust::ability('super-admin','fees-index')) : ?>
                <li class="<?php echo request()->is('account/fees')?'active':''; ?> hover">
                    <a href="<?php echo e(route('account.fees'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Fees Statement
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','fees-balance')) : ?>
                <li class="<?php echo request()->is('account/fees/balance')?'active':''; ?> hover">
                    <a href="<?php echo e(route('account.fees.balance'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Balance Fees
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','payroll-balance')) : ?>
                <li class="<?php echo request()->is('account/payroll/balance')?'active':''; ?> hover">
                    <a href="<?php echo e(route('account.payroll.balance'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Balance Salary
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','transaction-head-index')) : ?>
                <li class="<?php echo request()->is('account/transaction-head')?'active':''; ?> hover">
                    <a href="<?php echo e(route('account.transaction-head'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Ledger
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','transaction-index')) : ?>
                <li class="<?php echo request()->is('account/transaction')?'active':''; ?> hover">
                    <a href="<?php echo e(route('account.transaction'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Transactions
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','bank-index')) : ?>
                <li class="<?php echo request()->is('account/bank')?'active':''; ?> hover">
                    <a href="<?php echo e(route('account.bank'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Bank Statement
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','library-issue-history')) : ?>
                <li class="<?php echo request()->is('library/issue-history')?'active':''; ?> hover">
                    <a href="<?php echo e(route('library.issue-history'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Library Issue History
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','library-return-over')) : ?>
                <li class="<?php echo request()->is('library/return-over')?'active':''; ?> hover">
                    <a href="<?php echo e(route('library.return-over'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Book Return Period Over
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','student-attendance-index')) : ?>
                <li class="<?php echo request()->is('attendance/student')?'active':''; ?> hover">
                    <a href="<?php echo e(route('attendance.student'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Student Attendance
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','staff-attendance-index')) : ?>
                <li class="<?php echo request()->is('attendance/staff')?'active':''; ?> hover">
                    <a href="<?php echo e(route('attendance.staff'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Staff Attendance
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','resident-history')) : ?>
                <li class="<?php echo request()->is('hostel/resident/history')?'active':''; ?> hover">
                    <a href="<?php echo e(route('hostel.resident.history'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Hostel History
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','transport-user-history')) : ?>
                <li class="<?php echo request()->is('transport/user/history')?'active':''; ?> hover">
                    <a href="<?php echo e(route('transport.user.history'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Transport History
                    </a>
                    <b class="arrow"></b>
                </li>
                <?php endif; // Entrust::ability ?>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','alert-center')) : ?>
        <li class="<?php echo request()->is('info*')?'active':''; ?> hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-bullhorn" aria-hidden="true"></i>
                <span class="menu-text"> Alert </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
            <ul class="submenu">
                <li class="<?php echo request()->is('info/notice*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('info.notice'), false); ?>" accesskey="L">
                        <i class="menu-icon fa fa-caret-right"></i>
                        User Notice
                    </a>

                    <b class="arrow"></b>
                </li>
                <li class="<?php echo request()->is('info/smsemail*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('info.smsemail'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        SMS / E-mail
                    </a>

                    <b class="arrow"></b>
                </li>

            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','academic')) : ?>
        <li class="hover">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon  fa fa-graduation-cap" aria-hidden="true"></i>
                <span class="menu-text"> Academics </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="<?php echo request()->is('faculty*') || request()->is('semester*')?'active':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Academic Level
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('faculty*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('faculty'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Faculty/Level/Class
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('semester*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('semester'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Semester/Section
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('student-batch*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('student-batch'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Batch
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo request()->is('grading*') || request()->is('subject*')?'active':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Grading/Subject
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('grading*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('grading'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Grading
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('subject*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('subject'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Course / Subject
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="<?php echo request()->is('*status')?'active':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Status Setting
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('student-status*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('student-status'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Student Status
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('attendance-status*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('attendance-status'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Attendance Status
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('book-status*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('book-status'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Books Status
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="<?php echo request()->is('bed-status*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('bed-status'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Hostel Bed Status
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>


                <li class="<?php echo request()->is('year*') || request()->is('month*')?'active':''; ?> hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Year & Month
                        <b class="arrow fa fa-angle-r"></b>
                    </a>
                    <b class="arrow"></b>
                    <ul class="submenu">
                        <li class="<?php echo request()->is('year*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('year'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Year
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo request()->is('month*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('month'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Month
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="<?php echo request()->is('day*')?'active':''; ?> hover">
                            <a href="<?php echo e(route('day'), false); ?>">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Day
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo request()->is('payment-method*')?'active':''; ?> hover">
                    <a href="<?php echo e(route('payment-method'), false); ?>">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Payment Methods
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>



    </ul><!-- /.nav-list -->

    

</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/layouts/includes/menu.blade.php ENDPATH**/ ?>