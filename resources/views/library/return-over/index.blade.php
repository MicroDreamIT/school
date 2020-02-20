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
                            <h2 class="content-header-title float-left mb-0">Library Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Library</a>
                                    </li>
                                    <li class="breadcrumb-item active"> History
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
                    <!-- PAGE CONTENT BEGINS -->
                        @include('includes.flash_messages')
                       
                     
                       
                       @include('includes.validation_error_messages')

                       {!! Form::open(['route' => 'info.smsemail.bookReturnReminder', 'id' => 'send_reminder_message']) !!}
                       <br/>
                       <br/>
                       <div class="clearfix">
                                <label class="label label-info arrow arrowed-right btn-primary btn-sm">To</label>
                                <span class="form-group">
                                    <label>{!! Form::checkbox('to []','student' ,false, ["class" => "ace ","id" => "toStudent"]) !!}<span class="lbl"> Student </span></label>
                                    <label>{!! Form::checkbox('to[]','staff' ,false, ["class" => "ace","id" => "toStaff"]) !!}<span class="lbl"> Staff</span></label>
                                </span>
                                {{--<label class="label label-info arrow arrowed-right">Reminder Type</label>
                                <span class="form-group">
                                    <label>{!! Form::radio('type[]','sms' ,false, ["class" => "ace", "id"=>"typeSms"]) !!}<span class="lbl"> SMS </span></label>
                                    <label>{!! Form::radio('type[]','email' ,false, ["class" => "ace", "id"=>"typeEmail"]) !!}<span class="lbl"> E-mail</span></label>
                                </span>--}} 
                                <a class="btn btn-primary btn-sm message-send-btn white" id=""><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Send Reminder</a>
                            </div>
                       <br/>
                </div>

                <!-- Zero configuration table -->

                <section id="basic-datatable">
                    <div id="user-profile-2" class="user-profile">
                                <div class="tabbable  ">
                                    <ul class="nav nav-tabs  padding-18 hidden-print ">
                                        <li class="active m-1">
                                            <a data-toggle="tab" href="#student" class="btn btn-primary white ">
                                                <i class="white ace-icon fa fa-users bigger-140"></i>
                                                Student Return Period Over <span class="badge badge-warning"> {{ $data['student_return_over']->count() }}</span>
                                            </a>
                                        </li>

                                        <li class="m-1">
                                            <a data-toggle="tab" href="#staff" class="btn btn-primary white">
                                                <i class="orange ace-icon fa fa-user-secret bigger-140 white"></i>
                                                Staff Return Period Over <span class="badge badge-warning"> {{ $data['staff_return_over']->count() }}</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content no-border padding-24">
                                        <div id="student" class="tab-pane active">
                                            @include('library.return-over.includes.student')
                                        </div><!-- /#home -->

                                        <div id="staff" class="tab-pane">
                                            @include('library.return-over.includes.staff')
                                        </div><!-- /#home -->
                                    </div>
                                </div>
                            </div>
                            <!-- PAGE CONTENT ENDS -->
                        {!! Form::close() !!}
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
@endsection

    </div>
     @section('js')
@include('includes.scripts.jquery_validation_scripts')
    <!-- inline scripts related to this page -->
   
    <script type="text/javascript">
        $(document).ready(function () {

            /*Send Due Reminder*/
            $('.message-send-btn').click(function () {
                $student = $('#toStudent').is(':checked');
                $staff = $('#toStaff').is(':checked');
                if($student || $staff){
                    var $this = $(this);
                    var form = $('#send_reminder_message');
                    bootbox.confirm("Are you sure, You Want Send Library Clearance Message?", function(result) {
                        if(result) {
                            $('#send_reminder_message').submit();
                        }
                    });
                }else{
                    toastr.info("Please, Select Reminder Send To User Group");
                    return false;

                }
            });
            /*Due Reminder End*/

        });

    </script>

    @include('includes.scripts.delete_confirm')

        @endsection