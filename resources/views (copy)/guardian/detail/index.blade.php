

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Guardian Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Details</a>
                                    </li>
                                    
                                </ol>
                            </div>
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
                                    <h4 class="card-title">Details</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="col-xs-12 ">
               
                        <div class="space-2"></div>

                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable  ">
                                    <ul class="nav nav-tabs  padding-18 hidden-print ">
                                        <li class="active">
                                            <a data-toggle="tab" class="btn btn-primary"href="#profile">
                                                <i class="green ace-icon fa fa-user bigger-140"></i>
                                                Profile
                                            </a>
                                        </li>

                                        @ability('super-admin', 'user-add')
                                        <li style="margin-left:10px">
                                            <a data-toggle="tab" class="btn btn-primary" href="#login-access">
                                                <i class="red ace-icon fa fa-key bigger-140"></i>
                                                Login Access
                                            </a>
                                        </li>
                                        @endability

                                    </ul>

                                    <div class="tab-content no-border padding-24">
                                        <div id="profile" class="tab-pane in active">
                                           @include($view_path.'.detail.includes.profile')
                                           @include($view_path.'.detail.includes.students')
                                        </div><!-- /#home -->

                                        @ability('super-admin', 'user-add')
                                        <div id="login-access" class="tab-pane">
                                            @include($view_path.'.detail.includes.login-access')
                                        </div><!-- /#Login Detail -->
                                        @endability


                                    </div>
                            </div>

                        </div>
                        <!-- PAGE CONTENT ENDS -->
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
    @include('includes.scripts.delete_confirm')
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            /*link guardian*/
            $('select[name="student_link_id"]').select2({
                placeholder: 'Select Student...',
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
        });

    </script>

