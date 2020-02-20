@extends('user-guardian.layouts.master_new')
@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    @endsection
@section('content')
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Fees</a>
                                    </li>
                                    <li class="breadcrumb-item active">  Collect Fees
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            
                <!-- Zero configuration table -->
               <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
               
                <div class="page-header">
                    <h1>
                        Guardian
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Students List
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-md-12 ">
                        @include('includes.flash_messages')
                    </div>

                    <div class="col-md-12">
                        @if($data['students'] && $data['students']->count() > 0)
                            @foreach($data['students'] as $student)
                                <div class="row">
                                    <div class="col-md-12 col-sm-9">
                                        <div class="space-6"></div>
                                        <div class="label label-info label-xlg arrowed-in arrowed-right arrowed">{{ $student->first_name.' '.
                                            $student->middle_name.' '.$student->last_name }}</div>
                                        <div class="space-6"></div>
                                        <div class="profile-user-info profile-user-info-striped">
                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Faculty: </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="faculty">{{  ViewHelper::getFacultyTitle( $student->faculty ) }}</span>
                                                </div>
                                                <div class="profile-info-name"> Semester :</div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="semester">{{  ViewHelper::getSemesterTitle( $student->semester ) }}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Reg. No.: </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="reg_no">{{ $student->reg_no }}</span>
                                                </div>
                                                <div class="profile-info-name"> Reg. Date :</div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="reg_date">{{ \Carbon\Carbon::parse($student->reg_date)->format('Y-m-d')}}</span>
                                                </div>
                                            </div>


                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Univ.Reg.: </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="university_reg">{{ $student->university_reg }}</span>
                                                </div>
                                                <div class="profile-info-name"> DOB : </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="student_name">{{ \Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d')}}</span>
                                                </div>
                                            </div>



                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Gender : </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="student_name">{{ $student->gender }}</span>
                                                </div>
                                                <div class="profile-info-name"> Blood Group : </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="student_name">{{ $student->blood_group }}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> Nationality : </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="student_name">{{ $student->nationality }}</span>
                                                </div>
                                                <div class="profile-info-name"> MotherTong: </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="student_name">{{ $student->mother_tongue }}</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name"> E-mail : </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="email">{{ $student->email }}</span>
                                                </div>

                                                <div class="profile-info-name"> Mobile No : </div>
                                                <div class="profile-info-value">
                                                    <span class="editable" id="email">{{ $student->mobile_1.','.$student->mobile_2 }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-3 center">
                                        <div>
                                            <span class="profile-picture">
                                               @if($student->student_image != '')
                                                    <img id="avatar" class="editable img-responsive" alt="{{ $student->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.'studentProfile'.DIRECTORY_SEPARATOR.$student->student_image) }}" width="300px" />
                                                @else
                                                    <img id="avatar" class="editable img-responsive" alt="{{ $student->title }}" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                                                @endif
                                            </span>

                                            <div class="space-4"></div>
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                                <hr class="hr-2">
                                <div class="clearfix hidden-print ">
                                    <div class="easy-link-menu align-left">
                                        <a class="{!! request()->is('user-guardian/students/profile')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.profile',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Profile</a>
                                        <a class="{!! request()->is('user-guardian/students/fees')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.fees',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;Fee Detail</a>
                                        <a class="{!! request()->is('user-guardian/students/library')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.library',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Library</a>
                                        <a class="{!! request()->is('user-guardian/students/attendance')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.attendance',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Attendance</a>
                                        <a class="{!! request()->is('user-guardian/students/exams')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.exams',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Exam & Score</a>
                                        <a class="{!! request()->is('user-guardian/students/hostel')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.hostel',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;Hostel</a>
                                        <a class="{!! request()->is('user-guardian/students/transport')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.transport',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-car" aria-hidden="true"></i>&nbsp;Transport</a>
                                        <a class="{!! request()->is('user-guardian/students/subject')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.subject',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Course</a>
                                        <a class="{!! request()->is('user-guardian/students/download')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.download',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Downloads</a>
                                        <a class="{!! request()->is('user-guardian/students/assignment')?'btn-success':'btn-primary' !!} btn-sm" href="{{ route('user-guardian.students.assignment',['id'=>Crypt::encryptString($student->id)]) }}"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp;Asignment</a>
                                    </div>
                                </div>
                               <hr class="hr-32">
                            @endforeach
                        @endif
                    </div>

                    </div><!-- /.row -->
                <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>
@endsection

@section('js')

<!-- page specific plugin scripts -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" charset="utf-8"></script>
@if(isset($data['feeCompare']))
 {!! $data['feeCompare']->script() !!}
@endif
@endsection