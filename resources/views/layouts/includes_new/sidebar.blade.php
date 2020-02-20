  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header" style="padding: 0px;">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{url('/')}}">
                        <!--<div class="brand-logo"></div>-->
                        <h2 class="brand-text mb-0"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Edu MIS</h2>
                    </a></li>
                <!--<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>-->
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                

                <li class=" nav-item {!! request()->is('/')?'active':'' !!}"><a class="main_nav_li" href="{{ route('home') }}"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                   
                 
                </li>




                


{{-- Staff & Student --}}
        @ability('super-admin','student-staff')

                <li class=" nav-item {!! request()->is('student*')||request()->is('staff*')?'active open':'' !!}"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Student & Staff">Student & Staff</span></a>
                    <ul class="menu-content">
                         <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Student</span></a>
                            <ul class="menu-content">


                                <li class="{!! request()->is('student')?'active':'' !!}"><a class="main_nav_li" href="{{ route('student') }}" ><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Student Detail"> Student Detail</span></a>
                                </li>



                               <li class="{!! request()->is('student/import')?'active':'' !!}"><a class="main_nav_li"  href="{{ route('student.import') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Bulk Import"> Bulk Import</span></a>
                                </li>

                                

                                <li class="{!! request()->is('student/registration')?'active':'' !!}"><a class="main_nav_li"href="{{ route('student.registration') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Registration"> Registration</span></a>
                                </li>



                                <li class="{!! request()->is('student/transfer')?'active':'' !!}"><a class="main_nav_li" href="{{ route('student.transfer') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Transfer Student"> Transfer Student</span></a>
                                </li>




                                <li class="{!! request()->is('student/document')?'active':'' !!}"><a class="main_nav_li" href="{{ route('student.document') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Document Upload"> Document Upload</span></a>
                                </li>



                                <li class="{!! request()->is('student/note')?'active':'' !!}"><a class="main_nav_li" href="{{ route('student.note') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="  Create Notes">  Create Notes</span></a>
                                </li>



                            </ul>
                        </li>
                        



                         <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Guardian</span></a>
                            <ul class="menu-content">


                                <li class="{!! request()->is('guardian')?'active':'' !!}"><a class="main_nav_li" href="{{ route('guardian') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Guardian Detail"> Guardian Detail</span></a>
                                </li>



                               <li class="{!! request()->is('guardian/registration')?'active':'' !!}"><a class="main_nav_li" href="{{ route('guardian.registration') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Registration"> Registration</span></a>
                                </li>

                                

                               

                            </ul>
                        </li>


                        <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Staff</span></a>
                            <ul class="menu-content">


                                <li class="{!! request()->is('staff')?'active':'' !!}"><a class="main_nav_li" href="{{ route('staff') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Student Detail"> Staff Detail</span></a>
                                </li>



                                <li class="{!! request()->is('staff/add')?'active':'' !!}"><a class="main_nav_li" href="{{ route('staff.add') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Registration"> Registration</span></a>
                                </li>


                               <li class="{!! request()->is('staff/import')?'active':'' !!}"><a class="main_nav_li" href="{{ route('staff.import') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Bulk Import"> Bulk Import</span></a>
                                </li>

                                

                                <li class="{!! request()->is('staff/document')?'active':'' !!}"><a class="main_nav_li" href="{{ route('staff.document') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Document Upload"> Document Upload</span></a>
                                </li>



                                <li class="{!! request()->is('staff/note')?'active':'' !!}"><a  class="main_nav_li" href="{{ route('staff.note') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Create Notes">  Create Notes</span></a>
                                </li>

                                <li class="{!! request()->is('staff/designation')?'active':'' !!}"><a class="main_nav_li" href="{{ route('staff.designation') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Designations"> Designations</span></a>
                                </li>


                            </ul>
                        </li>


                    </ul>
                </li>

 @endability



   {{-- Account --}}
        @ability('super-admin','account')

           <li class=" nav-item {!! request()->is('account/*')?'active open':'' !!}"><a href="#"><i class="menu-icon fa fa-calculator" aria-hidden="true"></i><span class="menu-title" data-i18n="Student & Staff">Account</span></a>
                    <ul class="menu-content">
                         <li class="{!! request()->is('account')?'active':'' !!}"><a href="#"><i class="feather icon-circle"></i><span class="menu-item" > Fees Collection</span></a>
                            <ul class="menu-content">


                                <li class="{!! request()->is('account/fees')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.fees') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Receive Detail">  Receive Detail</span></a>
                                </li>



                               <li class="{!! request()->is('account/fees/quick-receive')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.fees.quick-receive') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Quick Receive"> Quick Receive</span></a>
                                </li>

                                

                                <li class="{!! request()->is('account/fees/collection')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.fees.collection') }}" ><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Collect Fees"> Collect Fees</span></a>
                                </li>



                                <li class="{!! request()->is('account/fees/balance')?'active':'' !!}"><a  class="main_nav_li" href="{{ route('account.fees.balance') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="  Balance Fees Report">  Balance Fees Report</span></a>
                                </li>




                                <li class="{!! request()->is('account/fees/master/add')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.fees.master.add') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Add Fees"> Add Fees</span></a>
                                </li>



                                <li class="{!! request()->is('account/fees/head')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.fees.head') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Fees Head"> Fees Head</span></a>
                                </li>


                             



                            </ul>
                        </li>
                        



                         <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Payroll</span></a>
                            <ul class="menu-content">


                                <li class="{!! request()->is('account/payroll')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.payroll') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n=" Guardian Detail">Paid Detail</span></a>
                                </li>


                               <li class="{!! request()->is('account/salary/payment')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.salary.payment') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Salary Pay"> Salary Pay</span></a>
                                </li>


                                <li class="{!! request()->is('account/payroll/master*')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.payroll.master.add') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Salary Pay"> Add Payroll</span></a>
                                </li>


                               <li class="{!! request()->is('account/payroll/balance')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.payroll.balance') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Balance Salary Report">Balance Salary Report</span></a>
                               </li>


                               <li class="{!! request()->is('account/payroll/head')?'active':'' !!}"><a class="main_nav_li" href="{{ route('account.payroll.head') }}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Salary Head"> Salary Head</span></a>
                                </li>



                            </ul>
                        </li>


                        <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" >Ledger & Transaction</span></a>
                            <ul class="menu-content">
                                
                                <li class="{!! request()->is('account/transaction')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('account.transaction') }}">
                                <i class="feather icon-circle"></i>
                                Transaction
                            </a>
                        </li>
                        <li class="{!! request()->is('account/transaction-head')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('account.transaction-head') }}">
                               <i class="feather icon-circle"></i> 
                                Ledger
                            </a>

                           
                        </li>

                            </ul>
                        </li>



                        <li class=""><a href="#"><i class="feather icon-circle"></i><span class="menu-item" > Bank</span></a>
                            <ul class="menu-content">
                                

                        <li class="{!! request()->is('account/bank')?'active':'' !!} ">
                            <a class="main_nav_li"  href="{{ route('account.bank') }}">
                                <i class="feather icon-circle"></i>
                                Manage Bank Accounts
                            </a>
                        </li>
                        <li class="{!! request()->is('account/bank/add')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('account.bank.add') }}">
                                <i class="feather icon-circle"></i>
                                Add New Bank
                            </a>
                        </li>

                        <li class="{!! request()->is('account/bank-transaction')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('account.bank-transaction') }}">
                                <i class="feather icon-circle"></i>
                                Transaction Detail
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('account/bank-transaction/add')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('account.bank-transaction.add') }}">
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
                        <li class="{!! request()->is('account/report/cash-book*')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('account.report.cash-book') }}">
                                <i class="feather icon-circle"></i>
                                Cash Book
                            </a>
                        </li>

                       {{-- <li class="{!! request()->is('account/report/fee-collection')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('account.report.fee-collection') }}">
                                <i class="feather icon-circle"></i>
                                Fee Collection
                            </a>
                        </li>--}}

                        <li class="{!! request()->is('account/report/fee-collection-head*')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('account.report.fee-collection-head') }}">
                                <i class="feather icon-circle"></i>
                                Fee Collection Head
                            </a>
                        </li>
                    </ul>
                </li>





                    </ul>
                </li>

         @endability


 {{-- Library --}}
        @ability('super-admin','library')
        <li class="{!! request()->is('library*')?'active':'' !!} ">
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
                        <li class="{!! request()->is('library/book')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('library.book') }}">
                                <i class="feather icon-circle"></i>
                                Book Detail
                            </a>
                        </li>
                        <li class="{!! request()->is('library/book/add*')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('library.book.add') }}">
                                <i class="feather icon-circle"></i>
                               Add New
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('library/book/import*')?'active':'' !!} ">
                            <a  class="main_nav_li"  href="{{ route('library.book.import') }}">
                                <i class="feather icon-circle"></i>
                                Bulk Import
                            </a>

                            
                        </li>


                        <li class="{!! request()->is('library/book/category*')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('library.book.category') }}">
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
                        <li class="{!! request()->is('library/member*')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('library.member') }}">
                                <i class="feather icon-circle"></i>
                                Membership
                            </a>

                            
                        </li>
                        <li class="{!! request()->is('library/student*')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('library.student') }}">
                                <i class="feather icon-circle"></i>
                                Student Member
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('library/staff*')?'active':'' !!} ">
                            <a class="main_nav_li" href="{{ route('library.staff') }}">
                                <i class="feather icon-circle"></i>
                                Staff Member
                            </a>

                            
                        </li>

                    </ul>
                </li>

                <li class="{!! request()->is('library/issue-history*')?'active':'' !!} ">
                    <a class="main_nav_li" href="{{ route('library.issue-history') }}">
                        <i class="menu-icon fa fa-history"></i>
                        Issue History
                    </a>

                    
                </li>

                <li class="{!! request()->is('library/return-over*')?'active':'' !!} ">
                    <a class="main_nav_li" href="{{ route('library.return-over') }}">
                        <i class="feather icon-circle"></i>
                        Return Period Over
                    </a>

                    
                </li>

                <li class="{!! request()->is('library/circulation*')?'active':'' !!}  ">
                    <a class="main_nav_li" href="{{ route('library.circulation') }}">
                        <i class="feather icon-circle"></i>
                        Circulation Setting
                    </a>

                    
                </li>
            </ul>
        </li>
        @endability



        {{-- Attendance --}}
        @ability('super-admin','attendance')
        <li class="{!! request()->is('attendance*')?'active':'' !!} hover">
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
                        <li class="{!! request()->is('attendance/student*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('attendance.student') }}">
                                <i class="feather icon-circle"></i>
                                Regular Attendance
                            </a>

                            
                        </li>
                        <li class="{!! request()->is('attendance/subject*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('attendance.subject') }}">
                                <i class="feather icon-circle"></i>
                                Subject Wise Attendance
                            </a>

                            
                        </li>
                    </ul>
                </li>

                <li class="{!! request()->is('attendance/staff*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('attendance.staff') }}">
                        <i class="feather icon-circle"></i>
                        Staff Attendance
                    </a>

                    
                </li>

                <li class="{!! request()->is('attendance/master*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('attendance.master') }}">
                        <i class="feather icon-circle"></i>
                        Monthly Calendar
                    </a>

                    
                </li>

            </ul>
        </li>
        @endability

        {{-- Examination --}}
        @ability('super-admin','examination')
        <li class="{!! request()->is('exam*')?'active':'' !!} hover">
            <a href="#" >
                <i class="menu-icon fa fa-line-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Examination</span>

                
            </a>

            

            <ul class="submenu">
                <li class="{!! request()->is('exam/schedule*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('exam.schedule') }}">
                        <i class="feather icon-circle"></i>
                        Schedule Exam
                    </a>
                    
                </li>

                <li class="{!! request()->is('exam/mark-ledger')?'active':'' !!}  hover">
                    <a class="main_nav_li" href="{{ route('exam.mark-ledger') }}">
                        <i class="feather icon-circle"></i>
                        Mark Ledger
                    </a>
                    
                </li>

                <li class="{!! request()->is('exam')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('exam') }}">
                        <i class="feather icon-circle"></i>
                        Exams Head
                    </a>
                    
                </li>

                <li class="{!! request()->is('exam/admit-card*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('exam.admit-card') }}">
                        <i class="feather icon-circle"></i>
                        Admit Card
                    </a>
                    
                </li>
                <li class="{!! request()->is('exam/routine*')?'active':'' !!} hover">
                    <a class="main_nav_li"  href="{{ route('exam.routine') }}">
                        <i class="feather icon-circle"></i>
                        Routine/Schedule
                    </a>
                    
                </li>
                <li class="{!! request()->is('exam/mark-sheet*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('exam.mark-sheet') }}">
                        <i class="feather icon-circle"></i>
                        Grade/Mark/Ledger Sheet
                    </a>
                    
                </li>
            </ul>
        </li>
        @endability

        {{-- Examination --}}
        @ability('super-admin','certificate')
        <li class="{!! request()->is('certificate*')?'active':'' !!} hover">
            <a href="#" >
                <i class="menu-icon fa fa-certificate"  aria-hidden="true"></i>
                <span class="menu-text"> Certificate</span>

                
            </a>

            

            <ul class="submenu">
                <li class="{!! request()->is('certificate/issue')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('certificate.issue') }}">
                        <i class="feather icon-circle"></i>
                        Issue Certificate
                    </a>
                    
                </li>

                <li class="{!! request()->is('certificate/attendance*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('certificate.attendance') }}">
                        <i class="feather icon-circle"></i>
                        Attendance Certificate
                    </a>
                    
                </li>

                <li class="{!! request()->is('certificate/transfer*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('certificate.transfer') }}">
                        <i class="feather icon-circle"></i>
                        Transfer Certificate
                    </a>
                    
                </li>

                <li class="{!! request()->is('certificate/bonafide*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('certificate.bonafide') }}">
                        <i class="feather icon-circle"></i>
                        Bonafide Certificate
                    </a>
                    
                </li>

                <li class="{!! request()->is('certificate/course-completion*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('certificate.course-completion') }}">
                        <i class="feather icon-circle"></i>
                        Course Completion Cer.
                    </a>
                    
                </li>

                <li class="{!! request()->is('certificate/issue-history*')?'active':'' !!} hover">
                    <a  class="main_nav_li" href="{{ route('certificate.issue-history') }}">
                        <i class="menu-icon fa fa-history"></i>
                        Issue History
                    </a>

                    
                </li>

                <li class="{!! request()->is('certificate/generate*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('certificate.generate') }}">
                        <i class="feather icon-circle"></i>
                        Custom Print
                    </a>
                    
                </li>
                <li class="{!! request()->is('certificate/template*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('certificate.template') }}">
                        <i class="feather icon-circle"></i>
                        Certificate Template
                    </a>
                    
                </li>
            </ul>
        </li>
        @endability

        {{-- Hostel --}}
        @ability('super-admin','hostel')
        <li class="{!! request()->is('hostel*')?'active':'' !!} hover">
            <a href="#" >
                <i class="menu-icon  fa fa-bed" aria-hidden="true"></i>
                <span class="menu-text"> Hostels </span>
                
            </a>
            
            <ul class="submenu">
                <li class="">
                    <a href="{{ route('hostel.resident') }}" >
                        <i class="feather icon-circle"></i>
                        Resident
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="{!! request()->is('hostel/resident')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('hostel.resident') }}">
                                <i class="feather icon-circle"></i>
                                Detail
                            </a>
                            
                        </li>
                        <li class="{!! request()->is('hostel/resident/add')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('hostel.resident.add') }}">
                                <i class="feather icon-circle"></i>
                                Registration
                            </a>
                            
                        </li>

                        <li class="{!! request()->is('hostel/resident/history')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('hostel.resident.history') }}">
                                <i class="feather icon-circle"></i>
                                Occupant History
                            </a>
                            
                        </li>

                    </ul>
                </li>
                <li class=" ">
                    <a href="{{ route('hostel') }}" >
                        <i class="feather icon-circle"></i>
                        Hostel
                        
                    </a>
                    
                    <ul class="submenu">

                        <li class="{!! request()->is('hostel')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('hostel') }}">
                                <i class="feather icon-circle"></i>
                                Hostel
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('hostel/room-type*')?'active':'' !!} hover">
                            <a class="main_nav_li"  href="{{ route('hostel.room-type') }}">
                                <i class="feather icon-circle"></i>
                                Room Type
                            </a>

                            
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a  href="{{ route('hostel') }}" >
                        <i class="feather icon-circle"></i>
                        Food & Meal
                        
                    </a>
                    
                    <ul class="submenu">
                        <li class="{!! request()->is('hostel/food')?'active':'' !!} hover">
                            <a class="main_nav_li"  href="{{ route('hostel.food') }}">
                                <i class="feather icon-circle"></i>
                                Meal Schedule
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('hostel/food/eating-time*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('hostel.food.eating-time') }}">
                                <i class="feather icon-circle"></i>
                                Eating Time
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('hostel/food/category*')?'active':'' !!} hover">
                            <a  class="main_nav_li" href="{{ route('hostel.food.category') }}">
                                <i class="feather icon-circle"></i>
                                Food Category
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('hostel/food/item*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('hostel.food.item') }}">
                                <i class="feather icon-circle"></i>
                                Food Item
                            </a>
                            
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        @endability

        {{-- Transport --}}
        @ability('super-admin','transport')
        <li class="{!! request()->is('transport*')?'active':'' !!} hover">
            <a href="#" >
                <i class="menu-icon  fa fa-bus" aria-hidden="true"></i>
                <span class="menu-text"> Transport </span>

                
            </a>
            
             <ul class="submenu">
                 <li class="">
                     <a  href="{{ route('transport.user') }}" >
                         <i class="feather icon-circle"></i>
                         Traveller/User
                         
                     </a>
                     
                     <ul class="submenu">
                         <li class="{!! request()->is('transport/user')?'active':'' !!} hover">
                             <a class="main_nav_li" href="{{ route('transport.user') }}">
                                 <i class="feather icon-circle"></i>
                                 Detail
                             </a>
                             
                         </li>
                         <li class="{!! request()->is('transport/user/add')?'active':'' !!} hover">
                             <a class="main_nav_li" href="{{ route('transport.user.add') }}">
                                 <i class="feather icon-circle"></i>
                                 Registration
                             </a>
                             
                         </li>

                         <li class="{!! request()->is('transport/user/history')?'active':'' !!} hover">
                             <a class="main_nav_li" href="{{ route('transport.user.history') }}">
                                 <i class="feather icon-circle"></i>
                                 User History
                             </a>
                             
                         </li>

                     </ul>
                 </li>
                 <li class="{!! request()->is('transport/route*')?'active':'' !!} hover">
                     <a class="main_nav_li" href="{{ route('transport.route') }}">
                         <i class="feather icon-circle"></i>
                         Route
                         
                     </a>
                     
                 </li>

                 <li class="{!! request()->is('transport/vehicle*')?'active':'' !!} hover">
                     <a class="main_nav_li" href="{{ route('transport.vehicle') }}">
                         <i class="feather icon-circle"></i>
                         Vehicle
                         
                     </a>
                     
                 </li>

             </ul>
        </li>
        @endability

        {{-- More --}}
        @ability('super-admin','assignment,download')
        <li class="hover">
            <a href="#" >
                <i class="menu-icon  fa fa-th-list" aria-hidden="true"></i>
                <span class="menu-text"> More </span>

                
            </a>
            
            <ul class="submenu">
                @ability('super-admin','assignment')
                <li class="{!! request()->is('assignment')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('assignment') }}">
                        <i class="feather icon-circle"></i>
                        Assignment
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','download')
                <li class="{!! request()->is('download*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('download') }}">
                        <i class="feather icon-circle"></i>
                        Upload & Download
                        
                    </a>
                </li>
                @endability
            </ul>
        </li>
        @endability


        {{-- Reports --}}
        @ability('super-admin','report')
        <li class="{!! request()->is('report*')?'active':'' !!} hover">
            <a href="#" >
                <i class="menu-icon fa fa-bar-chart"  aria-hidden="true"></i>
                <span class="menu-text"> Report Links</span>

                
            </a>

            

            <ul class="submenu">
                <li class="{!! request()->is('report/student*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('report.student') }}">
                        <i class="feather icon-circle"></i>
                        Student Detail
                    </a>

                    
                </li>

                <li class="{!! request()->is('report/staff*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('report.staff') }}">
                        <i class="feather icon-circle"></i>
                        Staff Detail
                    </a>

                    
                </li>
                @ability('super-admin','fees-index')
                <li class="{!! request()->is('account/fees')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('account.fees') }}">
                        <i class="feather icon-circle"></i>
                        Fees Statement
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','fees-balance')
                <li class="{!! request()->is('account/fees/balance')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('account.fees.balance') }}">
                        <i class="feather icon-circle"></i>
                        Balance Fees
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','payroll-balance')
                <li class="{!! request()->is('account/payroll/balance')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('account.payroll.balance') }}">
                        <i class="feather icon-circle"></i>
                        Balance Salary
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','transaction-head-index')
                <li class="{!! request()->is('account/transaction-head')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('account.transaction-head') }}">
                        <i class="feather icon-circle"></i>
                        Ledger
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','transaction-index')
                <li class="{!! request()->is('account/transaction')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('account.transaction') }}">
                        <i class="feather icon-circle"></i>
                        Transactions
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','bank-index')
                <li class="{!! request()->is('account/bank')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('account.bank') }}">
                        <i class="feather icon-circle"></i>
                        Bank Statement
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','library-issue-history')
                <li class="{!! request()->is('library/issue-history')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('library.issue-history') }}">
                        <i class="feather icon-circle"></i>
                        Library Issue History
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','library-return-over')
                <li class="{!! request()->is('library/return-over')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('library.return-over') }}">
                        <i class="feather icon-circle"></i>
                        Book Return Period Over
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','student-attendance-index')
                <li class="{!! request()->is('attendance/student')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('attendance.student') }}">
                        <i class="feather icon-circle"></i>
                        Student Attendance
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','staff-attendance-index')
                <li class="{!! request()->is('attendance/staff')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('attendance.staff') }}">
                        <i class="feather icon-circle"></i>
                        Staff Attendance
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','resident-history')
                <li class="{!! request()->is('hostel/resident/history')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('hostel.resident.history') }}">
                        <i class="feather icon-circle"></i>
                        Hostel History
                    </a>
                    
                </li>
                @endability

                @ability('super-admin','transport-user-history')
                <li class="{!! request()->is('transport/user/history')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('transport.user.history') }}">
                        <i class="feather icon-circle"></i>
                        Transport History
                    </a>
                    
                </li>
                @endability
            </ul>
        </li>
        @endability

        {{-- Info Center --}}
        @ability('super-admin','alert-center')
        <li class="{!! request()->is('info*')?'active':'' !!} hover">
            <a href="#" >
                <i class="menu-icon fa fa-bullhorn" aria-hidden="true"></i>
                <span class="menu-text"> Alert </span>

                
            </a>
            
            <ul class="submenu">
                <li class="{!! request()->is('info/notice*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('info.notice') }}" accesskey="L">
                        <i class="feather icon-circle"></i>
                        User Notice
                    </a>

                    
                </li>
                <li class="{!! request()->is('info/smsemail*')?'active':'' !!} hover">
                    <a class="main_nav_li" href="{{ route('info.smsemail') }}">
                        <i class="feather icon-circle"></i>
                        SMS / E-mail
                    </a>

                    
                </li>

            </ul>
        </li>
        @endability

        {{-- Academic --}}
        @ability('super-admin','academic')
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
                        <li class="{!! request()->is('faculty*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('faculty') }}">
                                <i class="feather icon-circle"></i>
                                Faculty/Level/Class
                            </a>
                            
                        </li>

                        <li class="{!! request()->is('semester*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('semester') }}">
                                <i class="feather icon-circle"></i>
                                Semester/Section
                            </a>
                            
                        </li>

                        <li class="{!! request()->is('student-batch*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('student-batch') }}">
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
                        <li class="{!! request()->is('grading*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('grading') }}">
                                <i class="feather icon-circle"></i>
                                Grading
                            </a>
                            
                        </li>

                        <li class="{!! request()->is('subject*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('subject') }}">
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
                        <li class="{!! request()->is('student-status*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('student-status') }}">
                                <i class="feather icon-circle"></i>
                                Student Status
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('attendance-status*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('attendance-status') }}">
                                <i class="feather icon-circle"></i>
                                Attendance Status
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('book-status*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('book-status') }}">
                                <i class="feather icon-circle"></i>
                                Books Status
                            </a>

                            
                        </li>

                        <li class="{!! request()->is('bed-status*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('bed-status') }}">
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
                        <li class="{!! request()->is('year*')?'active':'' !!} hover">
                            <a class="main_nav_li" href="{{ route('year') }}">
                                <i class="feather icon-circle"></i>
                                Year
                            </a>

                            
                        </li>
                        <li class="{!! request()->is('month*')?'active':'' !!} hover">
                            <a class="main_nav_li"  href="{{ route('month') }}">
                                <i class="feather icon-circle"></i>
                                Month
                            </a>

                            
                        </li>
                        <li class="{!! request()->is('day*')?'active':'' !!} hover">
                            <a class="main_nav_li"  href="{{ route('day') }}">
                                <i class="feather icon-circle"></i>
                                Day
                            </a>

                            
                        </li>
                    </ul>
                </li>
                <li class="{!! request()->is('payment-method*')?'active':'' !!} hover">
                    <a class="main_nav_li"  href="{{ route('payment-method') }}">
                        <i class="feather icon-circle"></i>
                        Payment Methods
                    </a>

                    
                </li>
            </ul>
        </li>
        @endability






            </ul>
        </div>
    </div>



  