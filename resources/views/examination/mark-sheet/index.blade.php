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
                            <h2 class="content-header-title float-left mb-0">Mark Sheet Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Exam</a>
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
            <div class="row">
                    <div class="col-md-12 ">
                    @include('examination.includes.buttons')
                    @include('includes.flash_messages')
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="form-horizontal">
                            
                            <div class="hr hr-18 dotted hr-double"></div>
                        </div>
                    </div><!-- /.col -->
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Student Documents Manager</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="row">
                        <div class="col-12">
                        <div class="form-horizontal">
                                @include('examination.mark-sheet.includes.form')
                 
                            <div class="hr hr-18 dotted hr-double"></div>
                        </div>

                         </div>
                    </div><!-- /.col -->
                
                                </div>
                                @include('examination.mark-sheet.includes.table')
                            </div>
                        </div>
                    </div>
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>


   <!-- page specific plugin scripts -->


@endsection
@section('js')

    <script>
        $(document).ready(function () {
            $('.print-marksheets').click(function () {
                /*console.log('ok');
                return false;*/
                $grading = $('#typeGrading').is(':checked');
                $percentage = $('#typePercentage').is(':checked');
                $ledger = $('#typeLedger').is(':checked');
                //return false;
                if($grading || $percentage || $ledger){
                    $chkIds = document.getElementsByName('chkIds[]');
                    var $chkCount = 0;
                    $length = $chkIds.length;

                    for(var $i = 0; $i < $length; $i++){
                        if($chkIds[$i].type == 'checkbox' && $chkIds[$i].checked){
                            $chkCount++;
                        }
                    }

                    if($chkCount <= 0){
                        toastr.info("Please, Select At Least One Record.","Info:");
                        return false;
                    }

                    $('#print-student-marksheet').submit();

                }else{
                    toastr.info("Please, Select Result Your Target Result Type - Grading or Percentage.","Info:");
                    return false;
                }

            });

        });

        function loadSemesters($this) {
            var year = $('select[name="years_id"]').val();
            var month = $('select[name="months_id"]').val();
            var exam = $('select[name="exams_id"]').val();
            var faculty = $('select[name="faculty"]').val();

            if (year == 0) {
                toastr.info("Please, Select Year", "Info:");
                return false;
            }

            if (month == 0) {
                toastr.info("Please, Select Month", "Info:");
                return false;
            }

            if (exam == 0) {
                toastr.info("Please, Select Exam Type", "Info:");
                return false;
            }

            if (faculty == 0) {
                toastr.info("Please, Select Faculty/Class", "Info:");
                return false;
            }

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
                        toastr.warning(data.error, "Warning");
                    } else {
                        $('.semester_select').html('').append('<option value="0">Select Sem./Sec.</option>');
                        $.each(data.semester, function(key,valueObj){
                            $('.semester_select').append('<option value="'+valueObj.id+'">'+valueObj.semester+'</option>');
                        });
                        toastr.success(data.success, "Success:");
                    }
                }
            });

        }

        function loadStudent($this) {
            var url = '{{ $data['url'] }}';
            var flag = false;
            var year = $('select[name="years_id"]').val();
            var month = $('select[name="months_id"]').val();
            var exam = $('select[name="exams_id"]').val();
            var faculty = $('select[name="faculty"]').val();
            var semester = $('select[name="semester_select"]').val();

            if (year !== 0) {
                url += '?year=' + year;
                flag = true;
            }else{
                toastr.info('Please Select Year','Info:');
                return false;
            }

            if (month !== 0) {
                if (flag) {
                    url += '&month=' + month;
                } else {
                    url += '?month=' + month;
                    flag = true;
                }
            }else{
                toastr.info('Please Select Schedule Exam','Info:');
                return false;
            }


            if (exam !== 0) {
                if (flag) {
                    url += '&exam=' + exam;
                } else {
                    url += '?exam=' + exam;
                    flag = true;
                }
            }else{
                toastr.info('Please Select Schedule Exam','Info:');
                return false;
            }

            if (faculty !== 0) {
                if (flag) {
                    url += '&faculty=' + faculty;
                } else {
                    url += '?faculty=' + faculty;
                    flag = true;
                }
            }else{
                toastr.info('Please Select Faculty/Class','Info:');
                return false;
            }

            if (semester !== 0) {
                if (flag) {
                    url += '&semester=' + semester;
                } else {
                    url += '?semester=' + semester;
                    flag = true;
                }
            }else{
                toastr.info('Please Select Sem./Sec.','Info:');
                return false;
            }


            if(flag == true){
                location.href = url;
            }else{
                toastr.info("Please, Select Your Target Schedule", "Info:");
                return false;
            }

        }

    </script>
    @include('includes.scripts.jquery_validation_scripts')
    @include('includes.scripts.dataTable_scripts')
    @endsection