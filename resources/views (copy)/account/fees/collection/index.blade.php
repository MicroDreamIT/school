
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">  Collect Fees</h2>
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
                      
                @include('account.fees.includes.buttons')
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
 @include('includes.scripts.jquery_validation_scripts')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">

        $(document).ready(function (event) {

            $('#filter-btn').click(function () {
                @include('student.includes.common-script.student_filter_common_script')
             event.preventDefault();
           $('.new-content-div').load(url, function() { reload_datatable(); });
                //location.href = url;
            });

        });

        function loadSemesters($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('student.find-semester') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    faculty_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.semester_select').html('').append('<option value="0">Select Sem./Sec.</option>');
                        $.each(data.semester, function(key,valueObj){
                            $('.semester_select').append('<option value="'+valueObj.id+'">'+valueObj.semester+'</option>');
                        });
                    }
                }
            });

        }
    </script>
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.datepicker_script')
