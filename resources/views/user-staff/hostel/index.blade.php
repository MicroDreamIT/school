@extends('user-staff.layouts.master_new')
@section('content')

     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Receive Detail</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Student</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail
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
                        Hostel
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Detail
                        </small>
                    </h1>

                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-md-12 ">
                        @include('includes.flash_messages')
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="form-horizontal">
                            @include($view_path.'.hostel.includes.table')
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->


            </div>
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