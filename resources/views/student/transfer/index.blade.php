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
                            <h2 class="content-header-title float-left mb-0">Transfer</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Students</a>
                                    </li>
                                    <li class="breadcrumb-item active">Transfer
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
                    <!-- PAGE CONTENT BEGINS -->     @include('includes.flash_messages')
                        @include('includes.validation_error_messages')
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Transfer</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="col-xs-12 ">
                         @include($view_path.'.transfer.includes.form')
                         <br/>
                          @include($view_path.'.transfer.includes.table')
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
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        $(document).ready(function () {

            $('#filter-btn').click(function () {
                @include('student.includes.common-script.student_filter_common_script')

                location.href = url;
            });

            //transfer
            $('#student-transfer-btn').click(function () {

                faculty = $('#transfer-faculty').val();
                semester = $('#transfer-semester').val();
                status = $('#transfer-status').val();

                if (faculty !== '' & faculty >0) {
                    if (semester !== '' & semester >0) {
                        if (status !== '' & status >0) {
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
                                toastr.info("Please, Select At Least One Student Record.", "Info:");
                                return false;
                            }

                        }else{
                            toastr.info("Please, Select Correct Student Status.", "Info:");
                            return false;
                        }
                    }else{
                        toastr.info("Please, Select Your Target Semester.", "Info:");
                        return false;
                    }
                }else{
                    toastr.info("Please, Select Your Target Faculty.", "Info:");
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
    @include('includes.scripts.datepicker_script')

    @endsection