@extends('layouts.master_new')
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
        <div class="main-page-content-inner">
            <div class="page-content">
              
                <div class="row">
                    <div class="col-md-12">
                    <!-- PAGE CONTENT BEGINS -->
                        {{--Chart Begans--}}
                            @role(['super-admin','admin','account'])
                                <div class="row">
                                    <div class="col-md-10">
                                        <div>{!! $data['feeSalaryChart']->container() !!}</div>
                                    </div>
                                    <div class="col-md-2">
                                        <div>{!! $data['feeCompare']->container() !!}</div>
                                    </div>
                                    <div class="col-md-12">
                                        <div>{!! $data['transactionChart']->container() !!}</div>
                                    </div>
                                </div>
                            @endrole
                        {{--chart end--}}

                        <div class="row">
                            <div class="col-sm-9">
                                @role(['super-admin','admin','account'])
                                    @include('dashboard.includes.account')
                                @endrole
                                @role(['super-admin','admin','library'])
                                    @include('dashboard.includes.library')
                                @endrole
                                @role(['super-admin','admin'])
                                @include('dashboard.includes.attendance')
                                @endrole
                                @include('dashboard.includes.birthday')
                            </div><!-- /.col -->
                            <div class="col-sm-3">
                                @include('dashboard.includes.summary')
                            </div><!-- /.col -->
                            {{--Faculty wise Student Status Summary--}}
                        </div>

        </div><!-- /.row -->
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
<!-- page specific plugin scripts -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" charset="utf-8"></script>
 {!! $data['feeSalaryChart']->script() !!}
 {!! $data['feeCompare']->script() !!}
 {!! $data['transactionChart']->script() !!}
@endsection