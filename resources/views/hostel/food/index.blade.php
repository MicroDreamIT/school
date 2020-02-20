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
                            <h2 class="content-header-title float-left mb-0"> Food Schedule Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    
                                    </li>
                                    <li class="breadcrumb-item active"> Detail
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
             @include('hostel.includes.buttons')
                   @include('hostel.food.includes.buttons')
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
                        
                        <div class="col-md-4 col-xs-12">
                            <br/>
                           @if (isset($data['row']) && $data['row']->count() > 0)
                        @include($view_path.'.edit')
                    @else
                        @include($view_path.'.add')
                    @endif
                        </div>

                        <div class="col-md-8 col-xs-12">
                           @include($view_path.'.includes.table')
                        </div>
                    </div><!-- /.col -->
                
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
    <!-- page specific plugin scripts -->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('select[name="food_items"]').select2({
                placeholder: 'Select Food...',
                ajax: {
                    url: '{{ route('hostel.food-name-autocomplete') }}',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: data
                        };

                    },
                    cache: true
                }

            });

            $('#load-html-btn').click(function () {
                var food_item = $('select[name="food_items"]').val();

                if (!food_item)
                    toastr.warning("Please, Choose Food Item First.", "Warning");
                else {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('hostel.food.food-html') }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: food_item
                        },
                        success: function (response) {
                            var data = $.parseJSON(response);
                            if (data.error) {
                                toastr.warning(data.message, "warning");
                            } else {
                                $('#food_wrapper').append(data.html);
                                //toastr.success(data.message, "success");
                            }
                        }
                    });
                }
            });

            $('.schedule-btn').click(function () {
                var flag = false;
                var hostels_id = $('select[name="hostels_id"]').val();
                var days_id = $('select[name="days_id"]').val();
                var eating_times_id = $('select[name="eating_times_id"]').val();
                var eating_times_id = $('select[name="eating_times_id"]').val();

                if(hostels_id > 0){
                    flag =  true;
                }else{
                    toastr.info("Please, Choose Schedule Hostel","Info:");
                    return false;
                }

                if(days_id > 0){
                    flag =  true;
                }else{
                    toastr.info("Please, Choose Schedule Day","Info:");
                    return false;
                }

                if(eating_times_id > 0){
                    flag =  true;
                }else{
                    toastr.info("Please, Choose Eating Time","Info:");
                    return false;
                }

                if(flag =  true){
                    return true;
                }else{
                    return false;
                }

            });


        });
    </script>

    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')

        @endsection