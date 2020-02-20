

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Certificate Generate Manager</h2>
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
              @include('certificate.includes.buttons')
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
                                    <h4 class="card-title">Course Completion Certificate List </h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="row">
                        
                        <div class="col-md-12 col-xs-12">
                            <br/>
                              
                        </div>
                         <div class="col-md-12 col-xs-12">
                            <br/>
                            @include('certificate.generate.includes.form')
                        </div>
                          

                        <div class="col-md-12 col-xs-12 m-2">
                           @include('certificate.generate.includes.table')
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
            $('#filter-btn').click(function (event) {
                @include('student.includes.common-script.student_filter_common_script')
                   event.preventDefault();
                $('.new-content-div').load(url, function() { reload_datatable(); });
                    //location.href = url;
            });

            $('#certificate-generate-btn').click(function () {

                certificate = $('#certificate-template').val();

                if (certificate !== '' & certificate >0) {
                    /*Check Student List Select Or not*/
                    $chkIds = document.getElementsByName('chkIds[]');
                    var $chkCount = 0;
                    $length = $chkIds.length;

                    for (var $i = 0; $i < $length; $i++) {
                        if ($chkIds[$i].type == 'checkbox' && $chkIds[$i].checked) {
                            $chkCount++;
                        }
                    }

                    if ($chkCount <= 0) {
                        toastr.warning("Please, Select At Least One Student Record.", "Warning:");
                        return false;
                    }
                }else{
                    toastr.warning("Please, Select Your Certificate Template.", "Warning:");
                    return false;
                }

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
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.datepicker_script')
