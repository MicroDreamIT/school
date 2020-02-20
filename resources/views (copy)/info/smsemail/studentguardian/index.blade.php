
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

                             @include($view_path.'.studentguardian.includes.search_form')

                             
                            {!! Form::open(['route' => $base_route.'.student-guardian.send', 'method' => 'POST', 'class' => 'form-horizontal',
                                'id' => 'group_message_send_form', "enctype" => "multipart/form-data"]) !!}
                            @include($view_path.'.studentguardian.includes.form')
                            @include($view_path.'.studentguardian.includes.table')
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


    <script type="text/javascript">
        $(document).ready(function () {
            $('#filter-btn').click(function () {
                @include('student.includes.common-script.student_filter_common_script')
                    location.href = url;
            });


            /*message*/
            $('.email').css('display', 'none');
            /*Send Message */
            $('#group-message-send-btn').click(function () {
                /*type*/
                $sms = $('#typeSms').is(':checked');
                $email = $('#typeEmail').is(':checked');

                /*Group*/
                $student = $('#toStudent').is(':checked');
                $guardian = $('#toGuardian').is(':checked');
                $father = $('#toFather').is(':checked');
                $mother = $('#toMother').is(':checked');

                var subject = $('input[name="subject"]').val();
                var emailMessage = document.getElementById("summernote");
                var emailMessage = (emailMessage.value).length; // This will now contain text of textarea

                var message = document.getElementById("smsmessage");
                var message = (message.value).length; // This will now contain text of textarea

                if($sms || $email){
                    if($sms && message < 8){
                        toastr.info("Message is Required With More Than 8 Character. When target is SMS", "Info:");
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

                    if($student || $guardian || $father || $mother){
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

                        //var $this = $(this);
                        var form = $('#group_message_send_form');

                    }else{
                        toastr.info("Please, Select At Least One Target Group", "Info:");
                        return false;
                    }
                }else{
                    toastr.info("Please, Select Message Type", "Info:");
                    return false;
                }
            });
            /*Message End*/

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
                       toastr.info(data.message);
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
    @include('includes.scripts.summarnote')
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.datepicker_script')