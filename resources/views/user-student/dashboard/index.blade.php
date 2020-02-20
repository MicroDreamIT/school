
@extends('user-student.layouts.master_new')
<style>

.profile-user-info {
    display: table;
    width: 98%;
    width: calc(100% - 24px);
    margin: 0 auto
}

.profile-info-row {
    display: table-row
}

.profile-info-name,
.profile-info-value {
    display: table-cell;
    border-top: 1px dotted #D5E4F1
}

.profile-info-name {
    text-align: right;
    padding: 6px 10px 6px 4px;
    font-weight: 400;
    color: #667E99;
    background-color: transparent;
    width: 150px;
    vertical-align: middle
}

.profile-info-value {
    padding: 6px 4px 6px 6px
}

.profile-info-value>span+span:before {
    display: inline;
    content: ",";
    margin-left: 1px;
    margin-right: 3px;
    color: #666;
    border-bottom: 1px solid #FFF
}

.profile-info-value>span+span.editable-container:before {
    display: none
}

.profile-info-row:first-child .profile-info-name,
.profile-info-row:first-child .profile-info-value {
    border-top: none
}

.profile-user-info-striped {
    border: 1px solid #DCEBF7
}

.profile-user-info-striped .profile-info-name {
    color: #336199;
    background-color: #EDF3F4;
    border-top: 1px solid #F7FBFF
}

.profile-user-info-striped .profile-info-value {
    border-top: 1px dotted #DCEBF7;
    padding-left: 12px
}

.profile-picture {
    border: 1px solid #CCC;
    background-color: #FFF;
    padding: 4px;
    display: inline-block;
    max-width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, .15)
}

.dd-empty,
.dd-handle,
.dd-placeholder,
.dd2-content {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box
}

.profile-activity {
    padding: 10px 4px;
    border-bottom: 1px dotted #D0D8E0;
    position: relative;
    border-left: 1px dotted #FFF;
    border-right: 1px dotted #FFF
}

.profile-activity:first-child {
    border-top: 1px dotted transparent
}

.profile-activity:first-child:hover {
    border-top-color: #D0D8E0
}

.profile-activity:hover {
    background-color: #F4F9FD;
    border-left: 1px dotted #D0D8E0;
    border-right: 1px dotted #D0D8E0
}

.profile-activity img {
    border: 2px solid #C9D6E5;
    border-radius: 100%;
    max-width: 40px;
    margin-right: 10px;
    margin-left: 0;
    box-shadow: none
}

.profile-activity .thumbicon {
    background-color: #74ABD7;
    display: inline-block;
    border-radius: 100%;
    width: 38px;
    height: 38px;
    color: #FFF;
    font-size: 18px;
    text-align: center;
    line-height: 38px;
    margin-right: 10px;
    margin-left: 0;
    text-shadow: none!important
}

.profile-activity .time {
    display: block;
    margin-top: 4px;
    color: #777
}

.profile-activity a.user {
    font-weight: 700;
    color: #9585BF
}

.profile-activity .tools {
    position: absolute;
    right: 12px;
    bottom: 8px;
    display: none
}

.profile-activity:hover .tools {
    display: block
}


.profile-contact-links {
    padding: 4px 2px 5px;
    border: 1px solid #E0E2E5;
    background-color: #F8FAFC
}

.btn-link:hover .ace-icon {
    text-decoration: none!important
}

.profile-social-links>a:hover>.ace-icon,
.profile-users .memberdiv .name a:hover .ace-icon,
.profile-users .memberdiv .tools>a:hover {
    text-decoration: none
}

.profile-social-links>a {
    text-decoration: none;
    margin: 0 1px
}

.profile-skills .progress {
    height: 26px;
    margin-bottom: 2px;
    background-color: transparent
}

.profile-skills .progress .progress-bar {
    line-height: 26px;
    font-size: 13px;
    font-weight: 700;
    font-family: "Open Sans";
    padding: 0 8px
}

.profile-users .user {
    display: block;
    position: static;
    text-align: center;
    width: auto
}

.profile-users .user img {
    padding: 2px;
    border-radius: 100%;
    border: 1px solid #AAA;
    max-width: none;
    width: 64px;
    -webkit-transition: all .1s;
    -o-transition: all .1s;
    transition: all .1s
}

.profile-users .user img:hover {
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33);
    box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33)
}

.profile-users .memberdiv {
    background-color: #FFF;
    width: 100px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border: none;
    text-align: center;
    margin: 0 8px 24px
}

.profile-users .memberdiv .body {
    display: inline-block;
    margin: 8px 0 0
}

.profile-users .memberdiv .popover {
    visibility: hidden;
    min-width: 0;
    max-height: 0;
    max-width: 0;
    margin-left: 0;
    margin-right: 0;
    top: -5%;
    left: auto;
    right: auto;
    opacity: 0;
    display: none;
    position: absolute;
    -webkit-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
    -o-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
    transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s
}

.profile-users .memberdiv .popover.right {
    left: 100%;
    right: auto;
    display: block
}

.profile-users .memberdiv .popover.left {
    left: auto;
    right: 100%;
    display: block
}

.profile-users .memberdiv>:first-child:hover .popover {
    visibility: visible;
    opacity: 1;
    z-index: 1060;
    max-height: 250px;
    max-width: 250px;
    min-width: 150px;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s
}

.profile-users .memberdiv .tools {
    position: static;
    display: block;
    width: 100%;
    margin-top: 2px
}

.profile-users .memberdiv .tools>a {
    margin: 0 2px
}

</style>
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
                        Dashboard
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Student
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-md-12 ">
                        @include('includes.flash_messages')
                        @include('user-student.dashboard.includes.notice')

                    </div>
                    <div class="col-md-12">
                        <div class="row">
                           {{-- <div class="col-sm-12 align-right hidden-print">
                                <a href="#" class="" onclick="window.print();">
                                    <i class="ace-icon fa fa-print bigger-200"></i>
                                </a>
                            </div>--}}

                            <div class="col-md-12 col-sm-3 center">
                             <div>
                            <span class="profile-picture">
                               @if($data['student']->student_image != '')
                                    <img id="avatar" class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('images'.DIRECTORY_SEPARATOR.'studentProfile'.DIRECTORY_SEPARATOR.$data['student']->student_image) }}" width="300px" />
                                @else
                                    <img id="avatar" class="editable img-responsive" alt="{{ $data['student']->title }}" src="{{ asset('assets/images/avatars/profile-pic.jpg') }}" />
                                @endif
                            </span>

                                    <div class="space-4"></div>

                                    {{--<div class="width-80 label label-warning label-xlg arrowed-right overflow-hidden">
                                        <div class="inline position-relative ">
                                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                <span class="white" >{{ $data['student']->first_name.' '.
                                            $data['student']->middle_name.' '.$data['student']->last_name }}</span>
                                            </a>
                                            <ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
                                                <li class="dropdown-header"> Change Status </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-circle green"></i>
                                                        &nbsp;
                                                        <span class="green">Available</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-circle red"></i>
                                                        &nbsp;
                                                        <span class="red">Busy</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-circle grey"></i>
                                                        &nbsp;
                                                        <span class="grey">Invisible</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="space-6"></div>--}}

                                </div>
                            </div>
                            <div class="col-md-12 col-sm-9">

                                <div class="space-6"></div>
                                <div class="label label-info label-xlg arrowed-in arrowed-right arrowed btn-primary btn-lg m-1">Welcome, {{ $data['student']->first_name.' '.
                                    $data['student']->middle_name.' '.$data['student']->last_name }}</div>
                                <div class="space-6"></div>
                                <div class="profile-user-info profile-user-info-striped">
                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Faculty: </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="faculty">{{  ViewHelper::getFacultyTitle( $data['student']->faculty ) }}</span>
                                        </div>
                                        <div class="profile-info-name"> Semester :</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="semester">{{  ViewHelper::getSemesterTitle( $data['student']->semester ) }}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Reg. No.: </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="reg_no">{{ $data['student']->reg_no }}</span>
                                        </div>
                                        <div class="profile-info-name"> Reg. Date :</div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="reg_date">{{ \Carbon\Carbon::parse($data['student']->reg_date)->format('Y-m-d')}}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Univ.Reg.: </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="university_reg">{{ $data['student']->university_reg }}</span>
                                        </div>
                                        <div class="profile-info-name"> DOB : </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="student_name">{{ \Carbon\Carbon::parse($data['student']->date_of_birth)->format('Y-m-d')}}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Gender : </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="student_name">{{ $data['student']->gender }}</span>
                                        </div>
                                        <div class="profile-info-name"> Blood Group : </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="student_name">{{ $data['student']->blood_group }}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> Nationality : </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="student_name">{{ $data['student']->nationality }}</span>
                                        </div>
                                        <div class="profile-info-name"> MotherTong: </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="student_name">{{ $data['student']->mother_tongue }}</span>
                                        </div>
                                    </div>

                                    <div class="profile-info-row">
                                        <div class="profile-info-name"> E-mail : </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="email">{{ $data['student']->email }}</span>
                                        </div>

                                        <div class="profile-info-name"> Mobile No : </div>
                                        <div class="profile-info-value">
                                            <span class="editable" id="email">{{ $data['student']->mobile_1.','.$data['student']->mobile_2 }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                        <div class="hr-double hr-16"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div>{!! $data['feeCompare']->container() !!}</div>
                            </div>
                        </div>
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
  <!-- page specific plugin scripts -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" charset="utf-8"></script>
     {!! $data['feeCompare']->script() !!}
@endsection