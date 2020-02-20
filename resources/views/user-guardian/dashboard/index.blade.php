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
                        Dashboard
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Guardian
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <!-- PAGE CONTENT BEGINS -->
                <div class="row">
                    <div class="col-md-12 ">
                        @include('includes.flash_messages')
                        @include('user-guardian.dashboard.includes.notice')

                    </div>
                    <div class="col-md-12 ">
                    <!-- PAGE CONTENT BEGINS -->
                        <div class="space-2"></div>
                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable  ">
                                <ul class="nav nav-tabs  padding-18 hidden-print ">
                                    <li class="active">
                                        <a data-toggle="tab" class="btn-sm btn btn-primary m-1"  href="#profile">
                                            <i class="green ace-icon fa fa-user bigger-140"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li >
                                        <a data-toggle="tab" class="btn-sm btn btn-primary m-1" href="#login-access">
                                            <i class="red ace-icon fa fa-key bigger-140"></i>
                                            Login Access
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="profile" class="tab-pane in active">
                                        @include('user-guardian.dashboard.includes.profile')
                                    </div><!-- /#home -->

                                    <div id="login-access" class="tab-pane">
                                        @include('user-guardian.dashboard.includes.login-access')
                                    </div><!-- /#Login Detail -->

                                </div>
                            </div>

                        </div>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->

                    <div class="col-md-12">


                        <div class="row">
                            <div class="col-md-2 ">
                                <a href="{{ route('user-guardian.students') }}" class="easy-link-menu">
                                    <div class="dash-card card-softred text-md-center  ml-2 ">
                                        <div class="card-block ">
                                            <h4 class="card-title ">
                                                {{ $data['students']->count() }}
                                            </h4>
                                            <p class="card-text btn btn-primary "><i class="ace-icon fa fa-users"></i> Students</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        @if(isset($data['feeCompare']))
                        <div class="row">
                            <div class="col-md-12">
                                <div>{!! $data['feeCompare']->container() !!}</div>
                            </div>
                        </div>
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