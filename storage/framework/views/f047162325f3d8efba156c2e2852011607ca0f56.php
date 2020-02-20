  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header" style="padding: 0px;">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo e(url('/'), false); ?>">
                        <!--<div class="brand-logo"></div>-->
                        <h2 class="brand-text mb-0"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Edu MIS</h2>
                    </a></li>
                <!--<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>-->
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                

                <li class=" nav-item <?php echo request()->is('/')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('home'), false); ?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                   
                 
                </li>




                



        <?php if (\Entrust::ability('super-admin','student-staff')) : ?>

                <li class=" nav-item <?php echo request()->is('student*')||request()->is('staff*')?'active open':''; ?>"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Student & Staff">Student & Staff</span></a>
                    <ul class="menu-content">
                         <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Student</span></a>
                            <ul class="menu-content">


                                <li class="<?php echo request()->is('student')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('student'), false); ?>" ><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Student Detail"> Student Detail</span></a>
                                </li>



                               <li class="<?php echo request()->is('student/import')?'active':''; ?>"><a class="main_nav_li"  href="<?php echo e(route('student.import'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Bulk Import"> Bulk Import</span></a>
                                </li>

                                

                                <li class="<?php echo request()->is('student/registration')?'active':''; ?>"><a class="main_nav_li"href="<?php echo e(route('student.registration'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Registration"> Registration</span></a>
                                </li>



                                <li class="<?php echo request()->is('student/transfer')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('student.transfer'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Transfer Student"> Transfer Student</span></a>
                                </li>




                                <li class="<?php echo request()->is('student/document')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('student.document'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Document Upload"> Document Upload</span></a>
                                </li>



                                <li class="<?php echo request()->is('student/note')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('student.note'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="  Create Notes">  Create Notes</span></a>
                                </li>



                            </ul>
                        </li>
                        



                         <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Guardian</span></a>
                            <ul class="menu-content">


                                <li class="<?php echo request()->is('guardian')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('guardian'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Guardian Detail"> Guardian Detail</span></a>
                                </li>



                               <li class="<?php echo request()->is('guardian/registration')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('guardian.registration'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Registration"> Registration</span></a>
                                </li>

                                

                               

                            </ul>
                        </li>


                        <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Staff</span></a>
                            <ul class="menu-content">


                                <li class="<?php echo request()->is('staff')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('staff'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Student Detail"> Staff Detail</span></a>
                                </li>



                                <li class="<?php echo request()->is('staff/add')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('staff.add'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Registration"> Registration</span></a>
                                </li>


                               <li class="<?php echo request()->is('staff/import')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('staff.import'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Bulk Import"> Bulk Import</span></a>
                                </li>

                                

                                <li class="<?php echo request()->is('staff/document')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('staff.document'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Document Upload"> Document Upload</span></a>
                                </li>



                                <li class="<?php echo request()->is('staff/note')?'active':''; ?>"><a  class="main_nav_li" href="<?php echo e(route('staff.note'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Create Notes">  Create Notes</span></a>
                                </li>

                                <li class="<?php echo request()->is('staff/designation')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('staff.designation'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Designations"> Designations</span></a>
                                </li>


                            </ul>
                        </li>


                    </ul>
                </li>

 <?php endif; // Entrust::ability ?>



   
        <?php if (\Entrust::ability('super-admin','account')) : ?>

           <li class=" nav-item <?php echo request()->is('account/*')?'active open':''; ?>"><a href="#"><i class="menu-icon fa fa-calculator" aria-hidden="true"></i><span class="menu-title" data-i18n="Student & Staff">Account</span></a>
                    <ul class="menu-content">
                         <li class="<?php echo request()->is('account')?'active':''; ?>"><a href="#"><i class="feather icon-circle"></i><span class="menu-item" > Fees Collection</span></a>
                            <ul class="menu-content">


                                <li class="<?php echo request()->is('account/fees')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.fees'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Receive Detail">  Receive Detail</span></a>
                                </li>



                               <li class="<?php echo request()->is('account/fees/quick-receive')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.fees.quick-receive'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Quick Receive"> Quick Receive</span></a>
                                </li>

                                

                                <li class="<?php echo request()->is('account/fees/collection')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.fees.collection'), false); ?>" ><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Collect Fees"> Collect Fees</span></a>
                                </li>



                                <li class="<?php echo request()->is('account/fees/balance')?'active':''; ?>"><a  class="main_nav_li" href="<?php echo e(route('account.fees.balance'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="  Balance Fees Report">  Balance Fees Report</span></a>
                                </li>




                                <li class="<?php echo request()->is('account/fees/master/add')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.fees.master.add'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Add Fees"> Add Fees</span></a>
                                </li>



                                <li class="<?php echo request()->is('account/fees/head')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.fees.head'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Fees Head"> Fees Head</span></a>
                                </li>


                             



                            </ul>
                        </li>
                        



                         <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Payroll</span></a>
                            <ul class="menu-content">


                                <li class="<?php echo request()->is('account/payroll')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.payroll'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Guardian Detail">Paid Detail</span></a>
                                </li>


                               <li class="<?php echo request()->is('account/salary/payment')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.salary.payment'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Salary Pay"> Salary Pay</span></a>
                                </li>


                                <li class="<?php echo request()->is('account/payroll/master*')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.payroll.master.add'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Salary Pay"> Add Payroll</span></a>
                                </li>


                               <li class="<?php echo request()->is('account/payroll/balance')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.payroll.balance'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Balance Salary Report">Balance Salary Report</span></a>
                               </li>


                               <li class="<?php echo request()->is('account/payroll/head')?'active':''; ?>"><a class="main_nav_li" href="<?php echo e(route('account.payroll.head'), false); ?>"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Salary Head"> Salary Head</span></a>
                                </li>



                            </ul>
                        </li>


                        <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Ledger & Transaction</span></a>
                            <ul class="menu-content">
                                
                                <li class="<?php echo request()->is('account/transaction')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('account.transaction'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Transaction
                            </a>
                        </li>
                        <li class="<?php echo request()->is('account/transaction-head')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('account.transaction-head'), false); ?>">
                               <i class="feather icon-circle"></i> 
                                Ledger
                            </a>

                           
                        </li>

                            </ul>
                        </li>



                        <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" > Bank</span></a>
                            <ul class="menu-content">
                                

                        <li class="<?php echo request()->is('account/bank')?'active':''; ?> ">
                            <a class="main_nav_li"  href="<?php echo e(route('account.bank'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Manage Bank Accounts
                            </a>
                        </li>
                        <li class="<?php echo request()->is('account/bank/add')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('account.bank.add'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Add New Bank
                            </a>
                        </li>

                        <li class="<?php echo request()->is('account/bank-transaction')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('account.bank-transaction'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Transaction Detail
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('account/bank-transaction/add')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('account.bank-transaction.add'), false); ?>">
                                <i class="feather icon-circle"></i>
                                New Transaction
                            </a>

                           
                        </li>

                    

                            </ul>
                        </li>


         <li class="">
                    <a href="#" >
                        <i class="feather icon-circle"></i>
                        
                        <span class="menu-item" > Report </span>
                        
                       
                    </a>
                 
                    <ul class="menu-content">
                        <li class="<?php echo request()->is('account/report/cash-book*')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('account.report.cash-book'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Cash Book
                            </a>
                        </li>

                       

                        <li class="<?php echo request()->is('account/report/fee-collection-head*')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('account.report.fee-collection-head'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Fee Collection Head
                            </a>
                        </li>
                    </ul>
                </li>





                    </ul>
                </li>

         <?php endif; // Entrust::ability ?>


 
        <?php if (\Entrust::ability('super-admin','library')) : ?>
        <li class="<?php echo request()->is('library*')?'active':''; ?> ">
            <a href="#" >
                <i class="menu-icon fa fa-book" aria-hidden="true"></i>
                <span class="menu-text">Library</span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a   href="#" accesskey="L" >
                        <i class="feather icon-circle"></i>
                        Books
                    </a>
                    <ul class="menu-content">
                        <li class="<?php echo request()->is('library/book')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('library.book'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Book Detail
                            </a>
                        </li>
                        <li class="<?php echo request()->is('library/book/add*')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('library.book.add'), false); ?>">
                                <i class="feather icon-circle"></i>
                               Add New
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('library/book/import*')?'active':''; ?> ">
                            <a  class="main_nav_li"  href="<?php echo e(route('library.book.import'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Bulk Import
                            </a>

                            
                        </li>


                        <li class="<?php echo request()->is('library/book/category*')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('library.book.category'), false); ?>">
                                <i class="feather icon-circle"></i>
                               Category
                            </a>

                            
                        </li>

                    </ul>
                </li>

                <li class=" ">
                    <a href="#" >
                        <i class="feather icon-circle"></i>
                        Members
                        
                    </a>
                    
                    <ul class="menu-content">
                        <li class="<?php echo request()->is('library/member*')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('library.member'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Membership
                            </a>

                            
                        </li>
                        <li class="<?php echo request()->is('library/student*')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('library.student'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Student Member
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('library/staff*')?'active':''; ?> ">
                            <a class="main_nav_li" href="<?php echo e(route('library.staff'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Staff Member
                            </a>

                            
                        </li>

                    </ul>
                </li>

                <li class="<?php echo request()->is('library/issue-history*')?'active':''; ?> ">
                    <a class="main_nav_li" href="<?php echo e(route('library.issue-history'), false); ?>">
                        <i class="menu-icon fa fa-history"></i>
                        Issue History
                    </a>

                    
                </li>

                <li class="<?php echo request()->is('library/return-over*')?'active':''; ?> ">
                    <a class="main_nav_li" href="<?php echo e(route('library.return-over'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Return Period Over
                    </a>

                    
                </li>

                <li class="<?php echo request()->is('library/circulation*')?'active':''; ?>  ">
                    <a class="main_nav_li" href="<?php echo e(route('library.circulation'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Circulation Setting
                    </a>

                    
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>



        
        <?php if (\Entrust::ability('super-admin','attendance')) : ?>
        <li class="<?php echo request()->is('attendance*')?'active':''; ?> hover">
            <a href="#" >
                <i class="menu-icon fa fa-calendar" aria-hidden="true"></i>
                <span class="menu-text"> Attendance</span>
                
            </a>
            
            <ul class="submenu">


                <li class="hover">
                    <a  href="#" >
                        <i class="feather icon-circle"></i>
                        Student Attendance
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="<?php echo request()->is('attendance/student*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('attendance.student'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Regular Attendance
                            </a>

                            
                        </li>
                        <li class="<?php echo request()->is('attendance/subject*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('attendance.subject'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Subject Wise Attendance
                            </a>

                            
                        </li>
                    </ul>
                </li>

                <li class="<?php echo request()->is('attendance/staff*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('attendance.staff'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Staff Attendance
                    </a>

                    
                </li>

                <li class="<?php echo request()->is('attendance/master*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('attendance.master'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Monthly Calendar
                    </a>

                    
                </li>

            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','examination')) : ?>
        <li class="<?php echo request()->is('exam*')?'active':''; ?> hover">
            <a href="#" >
                <i class="menu-icon fa fa-line-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Examination</span>

                
            </a>

            

            <ul class="submenu">
                <li class="<?php echo request()->is('exam/schedule*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('exam.schedule'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Schedule Exam
                    </a>
                    
                </li>

                <li class="<?php echo request()->is('exam/mark-ledger')?'active':''; ?>  hover">
                    <a class="main_nav_li" href="<?php echo e(route('exam.mark-ledger'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Mark Ledger
                    </a>
                    
                </li>

                <li class="<?php echo request()->is('exam')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('exam'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Exams Head
                    </a>
                    
                </li>

                <li class="<?php echo request()->is('exam/admit-card*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('exam.admit-card'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Admit Card
                    </a>
                    
                </li>
                <li class="<?php echo request()->is('exam/routine*')?'active':''; ?> hover">
                    <a class="main_nav_li"  href="<?php echo e(route('exam.routine'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Routine/Schedule
                    </a>
                    
                </li>
                <li class="<?php echo request()->is('exam/mark-sheet*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('exam.mark-sheet'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Grade/Mark/Ledger Sheet
                    </a>
                    
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','certificate')) : ?>
        <li class="<?php echo request()->is('certificate*')?'active':''; ?> hover">
            <a href="#" >
                <i class="menu-icon fa fa-certificate"  aria-hidden="true"></i>
                <span class="menu-text"> Certificate</span>

                
            </a>

            

            <ul class="submenu">
                <li class="<?php echo request()->is('certificate/issue')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('certificate.issue'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Issue Certificate
                    </a>
                    
                </li>

                <li class="<?php echo request()->is('certificate/attendance*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('certificate.attendance'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Attendance Certificate
                    </a>
                    
                </li>

                <li class="<?php echo request()->is('certificate/transfer*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('certificate.transfer'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Transfer Certificate
                    </a>
                    
                </li>

                <li class="<?php echo request()->is('certificate/bonafide*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('certificate.bonafide'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Bonafide Certificate
                    </a>
                    
                </li>

                <li class="<?php echo request()->is('certificate/course-completion*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('certificate.course-completion'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Course Completion Cer.
                    </a>
                    
                </li>

                <li class="<?php echo request()->is('certificate/issue-history*')?'active':''; ?> hover">
                    <a  class="main_nav_li" href="<?php echo e(route('certificate.issue-history'), false); ?>">
                        <i class="menu-icon fa fa-history"></i>
                        Issue History
                    </a>

                    
                </li>

                <li class="<?php echo request()->is('certificate/generate*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('certificate.generate'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Custom Print
                    </a>
                    
                </li>
                <li class="<?php echo request()->is('certificate/template*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('certificate.template'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Certificate Template
                    </a>
                    
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','hostel')) : ?>
        <li class="<?php echo request()->is('hostel*')?'active':''; ?> hover">
            <a href="#" >
                <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                <span class="menu-text"> Hostels </span>
                
            </a>
            
            <ul class="submenu">
                <li class="">
                    <a href="<?php echo e(route('hostel.resident'), false); ?>" >
                        <i class="feather icon-circle"></i>
                        Resident
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="<?php echo request()->is('hostel/resident')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('hostel.resident'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Detail
                            </a>
                            
                        </li>
                        <li class="<?php echo request()->is('hostel/resident/add')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('hostel.resident.add'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Registration
                            </a>
                            
                        </li>

                        <li class="<?php echo request()->is('hostel/resident/history')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('hostel.resident.history'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Occupant History
                            </a>
                            
                        </li>

                    </ul>
                </li>
                <li class=" ">
                    <a href="<?php echo e(route('hostel'), false); ?>" >
                        <i class="feather icon-circle"></i>
                        Hostel
                        
                    </a>
                    
                    <ul class="submenu">

                        <li class="<?php echo request()->is('hostel')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('hostel'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Hostel
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('hostel/room-type*')?'active':''; ?> hover">
                            <a class="main_nav_li"  href="<?php echo e(route('hostel.room-type'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Room Type
                            </a>

                            
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a  href="<?php echo e(route('hostel'), false); ?>" >
                        <i class="feather icon-circle"></i>
                        Food & Meal
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="<?php echo request()->is('hostel/food')?'active':''; ?> hover">
                            <a class="main_nav_li"  href="<?php echo e(route('hostel.food'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Meal Schedule
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('hostel/food/eating-time*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('hostel.food.eating-time'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Eating Time
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('hostel/food/category*')?'active':''; ?> hover">
                            <a  class="main_nav_li" href="<?php echo e(route('hostel.food.category'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Food Category
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('hostel/food/item*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('hostel.food.item'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Food Item
                            </a>
                            
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','transport')) : ?>
        <li class="<?php echo request()->is('transport*')?'active':''; ?> hover">
            <a href="#" >
                <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                <span class="menu-text"> Transport </span>

                
            </a>
            
             <ul class="submenu">
                 <li class="">
                     <a  href="<?php echo e(route('transport.user'), false); ?>" >
                         <i class="feather icon-circle"></i>
                         Traveller/User
                         
                     </a>
                     
                     <ul class="submenu">
                         <li class="<?php echo request()->is('transport/user')?'active':''; ?> hover">
                             <a class="main_nav_li" href="<?php echo e(route('transport.user'), false); ?>">
                                 <i class="feather icon-circle"></i>
                                 Detail
                             </a>
                             
                         </li>
                         <li class="<?php echo request()->is('transport/user/add')?'active':''; ?> hover">
                             <a class="main_nav_li" href="<?php echo e(route('transport.user.add'), false); ?>">
                                 <i class="feather icon-circle"></i>
                                 Registration
                             </a>
                             
                         </li>

                         <li class="<?php echo request()->is('transport/user/history')?'active':''; ?> hover">
                             <a class="main_nav_li" href="<?php echo e(route('transport.user.history'), false); ?>">
                                 <i class="feather icon-circle"></i>
                                 User History
                             </a>
                             
                         </li>

                     </ul>
                 </li>
                 <li class="<?php echo request()->is('transport/route*')?'active':''; ?> hover">
                     <a class="main_nav_li" href="<?php echo e(route('transport.route'), false); ?>">
                         <i class="feather icon-circle"></i>
                         Route
                         
                     </a>
                     
                 </li>

                 <li class="<?php echo request()->is('transport/vehicle*')?'active':''; ?> hover">
                     <a class="main_nav_li" href="<?php echo e(route('transport.vehicle'), false); ?>">
                         <i class="feather icon-circle"></i>
                         Vehicle
                         
                     </a>
                     
                 </li>

             </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','assignment,download')) : ?>
        <li class="hover">
            <a href="#" >
                <i class="menu-icon  fa fa-th-list" aria-hidden="true"></i>
                <span class="menu-text"> More </span>

                
            </a>
            
            <ul class="submenu">
                <?php if (\Entrust::ability('super-admin','assignment')) : ?>
                <li class="<?php echo request()->is('assignment')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('assignment'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Assignment
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','download')) : ?>
                <li class="<?php echo request()->is('download*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('download'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Upload & Download
                        
                    </a>
                </li>
                <?php endif; // Entrust::ability ?>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>


        
        <?php if (\Entrust::ability('super-admin','report')) : ?>
        <li class="<?php echo request()->is('report*')?'active':''; ?> hover">
            <a href="#" >
                <i class="menu-icon fa fa-bar-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Report Links</span>

                
            </a>

            

            <ul class="submenu">
                <li class="<?php echo request()->is('report/student*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('report.student'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Student Detail
                    </a>

                    
                </li>

                <li class="<?php echo request()->is('report/staff*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('report.staff'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Staff Detail
                    </a>

                    
                </li>
                <?php if (\Entrust::ability('super-admin','fees-index')) : ?>
                <li class="<?php echo request()->is('account/fees')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('account.fees'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Fees Statement
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','fees-balance')) : ?>
                <li class="<?php echo request()->is('account/fees/balance')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('account.fees.balance'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Balance Fees
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','payroll-balance')) : ?>
                <li class="<?php echo request()->is('account/payroll/balance')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('account.payroll.balance'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Balance Salary
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','transaction-head-index')) : ?>
                <li class="<?php echo request()->is('account/transaction-head')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('account.transaction-head'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Ledger
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','transaction-index')) : ?>
                <li class="<?php echo request()->is('account/transaction')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('account.transaction'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Transactions
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','bank-index')) : ?>
                <li class="<?php echo request()->is('account/bank')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('account.bank'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Bank Statement
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','library-issue-history')) : ?>
                <li class="<?php echo request()->is('library/issue-history')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('library.issue-history'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Library Issue History
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','library-return-over')) : ?>
                <li class="<?php echo request()->is('library/return-over')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('library.return-over'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Book Return Period Over
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','student-attendance-index')) : ?>
                <li class="<?php echo request()->is('attendance/student')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('attendance.student'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Student Attendance
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','staff-attendance-index')) : ?>
                <li class="<?php echo request()->is('attendance/staff')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('attendance.staff'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Staff Attendance
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','resident-history')) : ?>
                <li class="<?php echo request()->is('hostel/resident/history')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('hostel.resident.history'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Hostel History
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>

                <?php if (\Entrust::ability('super-admin','transport-user-history')) : ?>
                <li class="<?php echo request()->is('transport/user/history')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('transport.user.history'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Transport History
                    </a>
                    
                </li>
                <?php endif; // Entrust::ability ?>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','alert-center')) : ?>
        <li class="<?php echo request()->is('info*')?'active':''; ?> hover">
            <a href="#" >
                <i class="menu-icon fa fa-bullhorn" aria-hidden="true"></i>
                <span class="menu-text"> Alert </span>

                
            </a>
            
            <ul class="submenu">
                <li class="<?php echo request()->is('info/notice*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('info.notice'), false); ?>" accesskey="L">
                        <i class="feather icon-circle"></i>
                        User Notice
                    </a>

                    
                </li>
                <li class="<?php echo request()->is('info/smsemail*')?'active':''; ?> hover">
                    <a class="main_nav_li" href="<?php echo e(route('info.smsemail'), false); ?>">
                        <i class="feather icon-circle"></i>
                        SMS / E-mail
                    </a>

                    
                </li>

            </ul>
        </li>
        <?php endif; // Entrust::ability ?>

        
        <?php if (\Entrust::ability('super-admin','academic')) : ?>
        <li class="hover">
            <a href="#" >
                <i class="menu-icon  fa fa-graduation-cap" aria-hidden="true"></i>
                <span class="menu-text"> Academics </span>
                
            </a>

            

            <ul class="submenu">
                <li class="">
                    <a href="#" >
                        <i class="feather icon-circle"></i>
                        Academic Level
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="<?php echo request()->is('faculty*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('faculty'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Faculty/Level/Class
                            </a>
                            
                        </li>

                        <li class="<?php echo request()->is('semester*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('semester'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Semester/Section
                            </a>
                            
                        </li>

                        <li class="<?php echo request()->is('student-batch*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('student-batch'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Batch
                            </a>
                            
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a   href="#" >
                        <i class="feather icon-circle"></i>
                        Grading/Subject
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="<?php echo request()->is('grading*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('grading'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Grading
                            </a>
                            
                        </li>

                        <li class="<?php echo request()->is('subject*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('subject'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Course / Subject
                            </a>
                            
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="#" >
                        <i class="feather icon-circle"></i>
                        Status Setting
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="<?php echo request()->is('student-status*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('student-status'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Student Status
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('attendance-status*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('attendance-status'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Attendance Status
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('book-status*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('book-status'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Books Status
                            </a>

                            
                        </li>

                        <li class="<?php echo request()->is('bed-status*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('bed-status'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Hostel Bed Status
                            </a>

                            
                        </li>
                    </ul>
                </li>


                <li class="">
                    <a href="#" >
                        <i class="feather icon-circle"></i>
                        Year & Month
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="<?php echo request()->is('year*')?'active':''; ?> hover">
                            <a class="main_nav_li" href="<?php echo e(route('year'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Year
                            </a>

                            
                        </li>
                        <li class="<?php echo request()->is('month*')?'active':''; ?> hover">
                            <a class="main_nav_li"  href="<?php echo e(route('month'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Month
                            </a>

                            
                        </li>
                        <li class="<?php echo request()->is('day*')?'active':''; ?> hover">
                            <a class="main_nav_li"  href="<?php echo e(route('day'), false); ?>">
                                <i class="feather icon-circle"></i>
                                Day
                            </a>

                            
                        </li>
                    </ul>
                </li>
                <li class="<?php echo request()->is('payment-method*')?'active':''; ?> hover">
                    <a class="main_nav_li"  href="<?php echo e(route('payment-method'), false); ?>">
                        <i class="feather icon-circle"></i>
                        Payment Methods
                    </a>

                    
                </li>
            </ul>
        </li>
        <?php endif; // Entrust::ability ?>






            </ul>
        </div>
    </div>



  <?php /**PATH /home/viholddep/public_html/edu/resources/views/layouts/includes_new/sidebar.blade.php ENDPATH**/ ?>