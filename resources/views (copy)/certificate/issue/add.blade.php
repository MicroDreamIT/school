
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Issue Certificate Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Details</a>
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
              {{--@include('certificate.fees.includes.buttons')--}}
                          @include('includes.flash_messages')
                           @include('includes.validation_error_messages')
                        <!-- PAGE CONTENT BEGINS -->
                           
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search & Verify Student Before Issue Certificate</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="row">
                          
                        <div class="col-md-12 col-xs-12">
                            <br/>
                               {!! Form::select('students_id', [], null, ["placeholder" => "Type Student Name | Reg.No. | Mobile | Email...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]) !!}
                                @include('includes.form_fields_validation_message', ['name' => 'students_id'])
                        </div>

                        

                    </div><!-- /.col -->

                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" float-right m-3 ">
                                    <button type="button" class="btn btn btn-primary" id="load-html-btn">
                                        <i class="fa fa-user bigger-120"></i> Verify Student
                                    </button>
                                </div>
                                <div class="col-md-12 m-5">
                        @include('certificate.issue.includes.form')

                        </div>
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>


    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        $(document).ready(function () {

            /*date*/
           /* var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!

            var yyyy = today.getFullYear();
            if(dd<10){
                dd='0'+dd;
            }
            if(mm<10){
                mm='0'+mm;
            }
            var today = yyyy +'-'+mm+'-'+ dd;
            $("#date").val( today );*/

            /*Find Student*/
            $('select[name="students_id"]').select2({
                placeholder: 'Search Student...',
                ajax: {
                    url: '{{ route('student.student-name-autocomplete') }}',
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

            /*Student Verify*/
            $('#load-html-btn').click(function () {
                $('#student_wrapper').empty();
                var students_id = $('select[name="students_id"]').val();
                if (!students_id)
                    toastr.warning("Please, Choose Student.", "Warning");
                else {

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('certificate.student-detail-html') }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: students_id
                        },
                        success: function (response) {
                            var data = $.parseJSON(response);

                            if (data.error) {
                            } else {

                                $('#student_wrapper').append(data.html);
                            }
                        }
                    });

                }
            });


        });

    </script>
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.datepicker_script')
