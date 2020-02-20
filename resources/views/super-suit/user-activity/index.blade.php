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
                            <h2 class="content-header-title float-left mb-0">User Activity Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
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
            <div class="content-body">
           @include($view_path.'.includes.buttons')
                        @include('includes.flash_messages')
                        <!-- PAGE CONTENT BEGINS -->
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
                        <div class="form-horizontal ">
                                   @include($view_path.'.includes.form')
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
     <!-- inline scripts related to this page -->
 @include('includes.scripts.jquery_validation_scripts')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        /*Change Field Value on Capital Letter When Keyup*/
        $(function() {
            $('.upper').keyup(function() {
                this.value = this.value.toUpperCase();
            });
        });

        $(document).ready(function () {

            $('#filter-btn').click(function () {

                var url = '{{ $data['url'] }}';
                var flag = false;
                var ip = $('input[name="ip"]').val();
                var user_agent = $('input[name="user_agent"]').val();
                var link_url = $('input[name="url"]').val();
                var user = $('select[name="user"]').val();
                var event = $('select[name="event"]').val();
                var created_at_start_date = $('input[name="created_at_start_date"]').val();
                var created_at_end_date = $('input[name="created_at_end_date"]').val();
                var updated_at_start_date = $('input[name="updated_at_start_date"]').val();
                var updated_at_end_date = $('input[name="updated_at_end_date"]').val();

                if (ip !== '') {
                    url += '?ip=' + ip;
                    flag = true;
                }

                if (user_agent !== '') {

                    if (flag) {

                        url += '&user_agent=' + user_agent;

                    } else {

                        url += '?user_agent=' + user_agent;
                        flag = true;

                    }
                }



                if (user !== '' & user >0) {

                    if (flag) {

                        url += '&user=' + user;

                    } else {

                        url += '?user=' + user;
                        flag = true;

                    }
                }

                if (event !== '') {

                    if (flag) {

                        url += '&event=' + event;

                    } else {

                        url += '?event=' + event;
                        flag = true;

                    }
                }

                if (link_url !== '') {

                    if (flag) {

                        url += '&link_url=' + link_url;

                    } else {

                        url += '?link_url=' + link_url;
                        flag = true;

                    }
                }

                if (created_at_start_date !== '') {

                    if (flag) {

                        url += '&created_at_start_date=' + created_at_start_date;

                    } else {

                        url += '?created_at_start_date=' + created_at_start_date;
                        flag = true;

                    }
                }

                if (created_at_end_date !== '') {

                    if (flag) {

                        url += '&created_at_end_date=' + created_at_end_date;

                    } else {

                        url += '?created_at_end_date=' + created_at_end_date;
                        flag = true;

                    }
                }

                if (updated_at_start_date !== '') {

                    if (flag) {

                        url += '&updated_at_start_date=' + updated_at_start_date;

                    } else {

                        url += '?updated_at_start_date=' + updated_at_start_date;
                        flag = true;

                    }
                }

                if (updated_at_end_date !== '') {

                    if (flag) {

                        url += '&updated_at_end_date=' + updated_at_end_date;

                    } else {

                        url += '?updated_at_end_date=' + updated_at_end_date;
                        flag = true;

                    }
                }

                location.href = url;

            });

        });


    </script>
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.datepicker_script')
       @endsection