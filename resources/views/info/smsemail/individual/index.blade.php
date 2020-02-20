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
                            <h2 class="content-header-title float-left mb-0">SMS / Email Manager </h2>
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
          @include('info.includes.buttons')
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
                      
               @include('info.smsemail.includes.buttons')
                        <div class="form-horizontal">

                            {!! Form::open(['route' => $base_route.'.individual.send', 'method' => 'POST', 'class' => 'form-horizontal',
                                'id' => 'individual_message_send_form', "enctype" => "multipart/form-data"]) !!}
                            @include($view_path.'.individual.includes.form')
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
    <script type="text/javascript">
        $(document).ready(function () {
            /*Send Message */
            $('#individual-message-send-btn').click(function () {
                /*type*/
                $sms = $('#typeSms').is(':checked');
                $email = $('#typeEmail').is(':checked');

                /*Individual*/
                var number = $('input[name="number"]').val();
                var email = $('input[name="email"]').val();
                var subject = $('input[name="subject"]').val();

                var emailMessage = document.getElementById("summernote");
                var emailMessage = (emailMessage.value).length; // This will now contain text of textarea

                var message = document.getElementById("smsmessage");
                var message = (message.value).length; // This will now contain text of textarea

                if($sms || $email){

                    if($sms && number === ''){
                        toastr.info("Please, Fill At Least One Contact Number", "Info:");
                        return false;
                    }

                    if($sms && message < 8){
                        toastr.info("Message is Required With More Than 8 Character. When target is SMS", "Info:");
                        return false;
                    }

                    if($email && email === ''){
                        toastr.info("Please, Select Fill At Lease One Email ID", "Info:");
                        return false;
                    }

                    if($email && subject === ''){
                        toastr.info("Subject is Required. When target is Email", "Info:");
                        return false;
                    }

                    if($email && emailMessage < 12){
                        toastr.info("Message is Required With More Than 12 Character. When target is SMS", "Info:");
                        return false;
                    }

                }else{
                    toastr.info("Please, Select Message Type", "Info:");
                    return false;
                }

            });
            /*Message End*/
            $('.email').css('display', 'none');

        });

        function messageTypeCondition(f) {
            //alert('ok');
            $sms = $('#typeSms').is(':checked');
            $email = $('#typeEmail').is(':checked');
            if($sms) {
                $('.email').css('display', 'none');
                $('.sms').css('display', 'block');
            }

            if($email) {
                $('.email').css('display', 'block');
                $('.sms').css('display', 'none');
            }


        }
    </script>
    @include('includes.scripts.summarnote')

    @endsection