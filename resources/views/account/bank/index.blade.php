@extends('layouts.master_new')
@section('content')

     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Bank Manager </h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Add</a>
                                    </li>
                                    <li class="breadcrumb-item active"> 
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
            <div class="content-body">
           @include('account.includes.buttons')
                    <!-- PAGE CONTENT BEGINS -->
                      @include('includes.flash_messages')

                       
                       
                        @include('includes.validation_error_messages')
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                             
                                <div class="card-content" style="margin:20px;">
                                    
            
                <div class="row">
                    <div class="col-md-12 ">
                      
                 @include($view_path.'.includes.buttons')
                        <div class="form-horizontal ">
                               

                        @include($view_path.'.includes.search_form')
                            <div class="hr hr-18 dotted hr-double"></div>
                        
                           @include($view_path.'.includes.table')
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
         
             






                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    


    </div>
@endsection
    @section('js')
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.jquery_validation_scripts')
    @include('includes.scripts.dataTable_scripts')
    <!-- inline scripts related to this page -->

    <script type="text/javascript">
        $(document).ready(function () {

            /*Change Field Value on Capital Letter When Keyup*/
            $(function() {
                $('.upper').keyup(function() {
                    this.value = this.value.toUpperCase();
                });
            });
            /*end capital function*/

            $('#filter-btn').click(function (event) {

                var url = '{{ $data['url'] }}';
                var flag = false;
                var bank_name = $('input[name="bank_name"]').val();
                var ac_name = $('input[name="ac_name"]').val();
                var ac_number = $('input[name="ac_number"]').val();
                var branch = $('input[name="branch"]').val();

                if (bank_name !== '') {
                    url += '?bank_name=' + bank_name;
                    flag = true;
                }

                if (ac_name !== '') {

                    if (flag) {

                        url += '&ac_name=' + ac_name;

                    } else {

                        url += '?ac_name=' + ac_name;
                        flag = true;

                    }
                }

                if (ac_number !== '') {

                    if (flag) {

                        url += '&ac_number=' + ac_number;

                    } else {

                        url += '?ac_number=' + ac_number;
                        flag = true;

                    }
                }

                if (branch !== '') {

                    if (flag) {

                        url += '&branch=' + branch;

                    } else {

                        url += '?branch=' + branch;
                        flag = true;

                    }
                }
                location.href = url;

            });


        });

    </script>
    @endsection