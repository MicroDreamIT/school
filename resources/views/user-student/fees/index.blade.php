@extends('user-student.layouts.master_new')
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
                <div class="row">
                    <div class="col-md-12 ">
                        @include('includes.flash_messages')
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="form-horizontal">
                            <div class="hr hr-4 hr-dotted"></div>
                            <div class="row text-uppercase">
                                <div class="col-sm-5 pull-right align-right">
                                    <label class="label label-info label-lg white">Total Balance : {{ number_format($data['student']->balance, 2) }}/-</label>
                                </div>
                                <div class="col-sm-7 pull-left">
                                    <strong>Balance In Word:</strong> {{ ViewHelper::convertNumberToWord($data['student']->balance) }}only.
                                </div>
                            </div>
                            <div class="hr hr-8 hr-dotted"></div>

                            <div class="tabbable">
                                <ul class="nav nav-tabs  padding-18 hidden-print ">
                                    <li class="active">
                                        <a data-toggle="tab" class="btn btn-primary btn-sm m-1" href="#fees">
                                            <i class="green ace-icon fa fa-calculator bigger-140"></i>
                                            Fees
                                        </a>
                                    </li>

                                    <li >
                                        <a data-toggle="tab" class="btn btn-primary btn-sm m-1" href="#pay-online">
                                            <i class="blue ace-icon fa fa-calculator bigger-140"></i>
                                            Online Payment
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="fees" class="tab-pane in active">
                                        @include($view_path.'.fees.includes.table')
                                    </div><!-- /#home -->

                                    <div id="pay-online" class="tab-pane">
                                         @if($data['student']->balance > 0)
                                            @include($view_path.'.fees.includes.pay-online')
                                         @else
                                            <div class="col-sm-5 pull-right align-right">
                                                <label class="label label-info label-lg white"></label>
                                            </div>
                                         @endif
                                    </div><!-- /#onlinepayment -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>
 @endsection

@section('js')
    <!-- inline scripts related to this page -->
    
@endsection