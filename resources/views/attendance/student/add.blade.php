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
                            <h2 class="content-header-title float-left mb-0">Student Attendance </h2>
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
                    <br>
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
                        <div class="form-horizontal">
                            {!! Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
                    'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}
                            <div class="hr hr-18 dotted hr-double"></div>

                            @include($view_path.'.includes.form')

                             @include($view_path.'.includes.student')

                             <div class="form-group">

                               <label class="pos-rel">
                                   {!! Form::radio('send_alert', 1, false, ['class' => 'ace', "required"]) !!}
                                   <span class="lbl"></span> <span class="label label-info" >Send Attendance Alert to All </span>
                               </label>

                               <label class="pos-rel">
                                   {!! Form::radio('send_alert', 2, false, ['class' => 'ace', "required"]) !!}
                                   <span class="lbl"></span> <span class="label label-danger" >Send Absent Notification </span>
                               </label>

                               <label class="pos-rel">
                                   {!! Form::radio('send_alert', 0, true, ['class' => 'ace', "required"]) !!}
                                   <span class="lbl"></span> <span class="label label-warning" >Alert Not Required</span>
                               </label>
                           </div>

                            <div class="clearfix form-actions">
                                <div class="col-md-12 align-right">
                                    <button class="btn btn-warning" type="reset">
                                        <i class="fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>
                                    &nbsp; &nbsp; &nbsp;
                                    <button class="btn btn-info" type="submit" id="submit-attendance">
                                        <i class="fa fa-save bigger-110"></i>
                                        Save Attendance
                                    </button>
                                </div>
                            </div>

                            <div class="hr hr-18 dotted hr-double"></div>
                            {!! Form::close() !!}
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
   @include('includes.scripts.datepicker_script')
   <script>
       $(document).ready(function () {
           $( "input[name=mark-all]" ).on( "change", function($this){
               status = $( "input[name=mark-all]:checked").val();
               if(status == 1){
                   $(this).closest('table').find("input:radio.status-1")
                       .each(function(){
                           $(".status-1").prop("checked", true);
                       });
               }else if(status == 2){
                   $(this).closest('table').find("input:radio.status-1")
                       .each(function(){
                           $(".status-2").prop("checked", true);
                       });
               }else if(status == 3){
                   $(this).closest('table').find("input:radio.status-1")
                       .each(function(){
                           $(".status-3").prop("checked", true);
                       });
               }else if(status == 4){
                   $(this).closest('table').find("input:radio.status-1")
                       .each(function(){
                           $(".status-4").prop("checked", true);
                       });
               }else if(status == 5){
                   $(this).closest('table').find("input:radio.status-1")
                       .each(function(){
                           $(".status-5").prop("checked", true);
                       });
               }else{

               }
           });

       });

        function loadSemesters($this) {
            var faculty = $('select[name="faculty"]').val();

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
                       // toastr.success(data.success, "Success:");
                    }
                }
            });

        }

        function loadStudent($this) {
            var date = $('input[name="date"]').val();
            var faculty = $('select[name="faculty"]').val();
            var semester = $('select[name="semester_select"]').val();
            var batch = $('select[name="batch"]').val();

            if (date == "") {
                toastr.info("Please, Select Date", "Info:");
                return false;
            }

            if (faculty == 0) {
                toastr.info("Please, Select Faculty/Class", "Info:");
                return false;
            }

            if (semester == 0) {
                toastr.info("Please, Select Sem./Sec.", "Info:");
                return false;
            }


            $.ajax({
                type: 'POST',
                url: '{{ route('attendance.student-html') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    date: date,
                    faculty_id: faculty,
                    semester_id: semester,
                    batch: batch
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if(data.error){
                        toastr.warning(data.error, "Warning:");
                    }else{
                        if(data.exist){
                            $('#student_wrapper').empty();
                            $('#student_wrapper').append(data.exist);
                            $('#studentsTable tr:last').after(data.students);
                        }else{
                            $('#student_wrapper').empty();
                            $('#student_wrapper').append(data.students);
                        }
                        //toastr.success(data.message, "Success:");
                    }
                }
            });
        }

        /*Submit Now*/
        $('#submit-attendance').click(function () {
            var date = $('input[name="date"]').val();
            var faculty = $('select[name="faculty"]').val();
            var semester = $('select[name="semester_select"]').val();

            if (date == "") {
                toastr.info("Please, Select Date", "Info:");
                return false;
            }

            if (faculty == 0) {
                toastr.info("Please, Select Faculty/Class", "Info:");
                return false;
            }

            if (semester == 0) {
                toastr.info("Please, Select Sem./Sec.", "Info:");
                return false;
            }

            location.href = url;

        });
        /*End Submit Now*/
    </script>

@endsection