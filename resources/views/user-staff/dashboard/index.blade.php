@extends('user-staff.layouts.master_new')
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
                            Staff
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-md-12">
                       {{-- @include($view_path.'.includes.buttons')--}}
                        @include('includes.flash_messages')
                        @include('user-staff.dashboard.includes.notice')
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="space-2"></div>

                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable  ">
                                <ul class="nav nav-tabs  padding-18 hidden-print ">
                                    <li class="active">
                                        <a data-toggle="tab" class="btn btn-sm btn-primary m-1" href="#profile">
                                            <i class="green ace-icon fa fa-user bigger-140"></i>
                                            Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-sm btn-primary m-1" href="#documents">
                                            <i class="pink ace-icon fa fa-files-o bigger-140"></i>
                                            Documents
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-sm btn-primary m-1" href="#notes">
                                            <i class="red ace-icon fa fa-sticky-note-o bigger-140"></i>
                                            Notes
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-sm btn-primary m-1" href="#login-access">
                                            <i class="red ace-icon fa fa-key bigger-140"></i>
                                            Login Access
                                        </a>
                                    </li>


                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="profile" class="tab-pane in active">
                                        @include($view_path.'.dashboard.includes.profile')
                                    </div><!-- /#home -->

                                    <div id="documents" class="tab-pane">
                                        @include($view_path.'.dashboard.includes.documents')
                                    </div><!-- /#Documents -->

                                    <div id="notes" class="tab-pane">
                                        @include($view_path.'.dashboard.includes.notes')
                                    </div><!-- /#Notes -->

                                    <div id="login-access" class="tab-pane">
                                        @include($view_path.'.dashboard.includes.login-access')
                                    </div><!-- /#Login Detail -->
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>
@endsection


@section('js')
    <!-- inline scripts related to this page -->




@endsection