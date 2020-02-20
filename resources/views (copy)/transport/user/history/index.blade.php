

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Transport User Manager </h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Certificate</a>
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
              @include('transport.includes.buttons')
                          @include('includes.flash_messages')
                        <!-- PAGE CONTENT BEGINS -->
                             @include('includes.validation_error_messages')
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Transport History List</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="row">
                        
                        <div class="col-md-12 col-xs-12">
                            <br/>
                             @include($view_path.'.includes.buttons')
                        </div>
                         <div class="col-md-12 col-xs-12">
                            <br/>
                        {!! Form::open(['route' => $base_route.'.history', 'method' => 'GET', 'class' => 'form-horizontal',
                'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
                        @include($view_path.'.history.includes.form')
                        {!! Form::close() !!}
                        </div>
                          

                        <div class="col-md-12  m-2">
                          @include($view_path.'.history.includes.table')
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

            $('#filter-btn').click(function () {
                var flag = false;
                var user_type = $('select[name="user_type"]').val();
                var reg_no = $('input[name="reg_no"]').val();
                var year = $('select[name="year"]').val();
                var history_type = $('select[name="history_type"]').val();
                var route = $('select[name="route"]').val();
                var vehicle = $('select[name="vehicle_select"]').val();
                var status = $('select[name="status"]').val();
                /*alert(history_type + "ok");
                return false;*/

                if (user_type !== '' & user_type >0) {
                    flag = true;
                }

                if (reg_no !== '') {
                    flag = true;
                }

                if (year !== '' && year > 0 ) {
                    flag = true;
                }

                if (history_type !== 0) {
                    flag = true;
                }

                if (route !== '' && route > 0 ) {
                    flag = true;
                }

                if (vehicle !== '' && vehicle > 0 ) {
                    flag = true;
                }


                if (status !== '' && status > 0 ) {
                    flag = true;
                }

                if(flag){
                    return true;
                }else{
                    toastr.warning('No any Target to Search', 'Warning:');
                    return false;
                }
            });

        });

        function loadVehicle($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('transport.find-vehicles') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    route_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.vehicle_select').html('').append('<option value="0">Select Vehicle...</option>');
                        $.each(data.vehicles, function(key,valueObj){
                            $('.vehicle_select').append('<option value="'+valueObj.id+'">'+valueObj.number+' | '+valueObj.type+'</option>');
                        });
                    }
                }
            });

        }
    </script>

    @include('includes.scripts.dataTable_scripts')
