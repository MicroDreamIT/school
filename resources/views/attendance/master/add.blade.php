@extends('layouts.master_new')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
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
                            <h2 class="content-header-title float-left mb-0">Monthly Calendar Manager
 </h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"> Add</a>
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
          @include('attendance.includes.buttons')
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
                      
               @include('attendance.master.includes.buttons')
                        <div class="form-horizontal">
                            
                            

                             @if (isset($data['row']) && $data['row']->count() > 0)
                            @include($base_route.'.includes.edit')
                        @else
                        <!-- PAGE CONTENT BEGINS -->
                            <div class="form-horizontal">
                                <div class="hr hr-18 dotted hr-double"></div>
                            </div>
                            @include($base_route.'.includes.add')
                        @endif

                        
                            
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

    @include('includes.scripts.jquery_validation_scripts')
    @include('includes.scripts.table_tr_sort')
    <script src="{{ asset('assets/js/notify.min.js') }}"></script>
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

            $('#month-tr-html').click(function () {

                var year = $('select[name="year"]').val();
                if (year == 0)
                    toastr.warning("Please, Choose Your Target Year.", "warning");
                else {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('attendance.master.month-html') }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function (response) {
                            var data = $.parseJSON(response);

                            if (data.error) {
                                //$.notify(data.message, "warning");
                            } else {
                                $('#month_wrapper').empty();
                                $('#month_wrapper').append(data.html);
                                $(document).find('option[value="0"]').attr("value", "");
                            }
                        }
                    });
                }

            });

        });


    </script>

    @endsection