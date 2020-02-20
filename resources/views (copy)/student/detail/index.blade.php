

<style>
li
{
    margin:5px;
}
    </style>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Students Manager</h2>
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
                    @include('includes.flash_messages')
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
                 
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="space-2"></div>

                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable">
                                <ul class="nav nav-tabs  padding-18 hidden-print ">
                                    <li class="active">
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#profile">
                                            <i class="green ace-icon fa fa-user bigger-140"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#academicInfo">
                                            <i class="green ace-icon fa fa-university bigger-140"></i>
                                            Academic
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#fees">
                                            <i class="orange ace-icon fa fa-calculator bigger-140"></i>
                                            Fees
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#library">
                                            <i class="purple ace-icon fa fa-book bigger-140"></i>
                                            Library
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#attendance">
                                            <i class="blue ace-icon fa fa-calendar bigger-140"></i>
                                            Attendance
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#examscore">
                                            <i class="blue ace-icon fa fa-line-chart bigger-140"></i>
                                            Exam
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#certificate">
                                            <i class="blue ace-icon fa fa-certificate bigger-140"></i>
                                            Certificate
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#hostel">
                                            <i class="blue ace-icon fa fa-bed bigger-140"></i>
                                            Hostel
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#transport">
                                            <i class="blue ace-icon fa fa-car bigger-140"></i>
                                            Transport
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#documents">
                                            <i class="pink ace-icon fa fa-files-o bigger-140"></i>
                                            Docs
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#notes">
                                            <i class="red ace-icon fa fa-sticky-note-o bigger-140"></i>
                                            Notes
                                        </a>
                                    </li>
                                    @ability('super-admin', 'user-add')
                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#login-access">
                                            <i class="red ace-icon fa fa-key bigger-140"></i>
                                            Login Access
                                        </a>
                                    </li>
                                    @endability

                                </ul>

                                <div class="tab-content no-border padding-24">
                                        <div id="profile" class="tab-pane in active">
                                            <div class="row">
                                                <div class="col-md-2 col-print-2 align-center">
                                                    @if(isset($generalSetting->logo))
                                                        <img src="{{ asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$generalSetting->logo) }}" width="150px">
                                                    @endif
                                                </div>
                                                <div class="col-md-10 col-print-10 align-center">
                                                    <div class="text-center">
                                                        <h2 class="no-margin-top" style="font-family: 'Merienda', cursive; font-size: 30px">
                                                            <strong>{{isset($generalSetting->institute)?$generalSetting->institute:""}}</strong>
                                                        </h2>
                                                        <h5 class="no-margin-top">
                                                            {{isset($generalSetting->address)?$generalSetting->address:""}}, {{isset($generalSetting->phone)?$generalSetting->phone:""}}
                                                        </h5>
                                                        <h3 class="text-uppercase no-margin-top" style="font-family: 'Merienda', cursive; font-size: 22px">REGISTRATION DETAIL</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="hr-double hr-8">
                                           @include($view_path.'.detail.includes.profile')
                                        </div><!-- /#home -->

                                        <div id="academicInfo" class="tab-pane">
                                            @include($view_path.'.detail.includes.academicInfo')
                                        </div><!-- /#AcademicInfo -->

                                        <div id="fees" class="tab-pane">
                                            @include($view_path.'.detail.includes.fees')
                                        </div><!-- /#home -->

                                        <div id="library" class="tab-pane">
                                            @include($view_path.'.detail.includes.library')
                                        </div><!-- /#Library -->

                                        <div id="attendance" class="tab-pane">
                                            @include($view_path.'.detail.includes.attendance')
                                        </div><!-- /#attendance -->

                                        <div id="examscore" class="tab-pane">
                                            @include($view_path.'.detail.includes.examscore')
                                        </div><!-- /#examscore -->

                                        <div id="certificate" class="tab-pane">
                                            @include($view_path.'.detail.includes.certificate')
                                        </div><!-- /#certificate -->

                                        <div id="hostel" class="tab-pane">
                                            @include($view_path.'.detail.includes.hostel')
                                        </div><!-- /#Hostel -->

                                        <div id="transport" class="tab-pane">
                                            @include($view_path.'.detail.includes.transport')
                                        </div><!-- /#Transport -->

                                        <div id="documents" class="tab-pane">
                                            @include($view_path.'.detail.includes.documents')
                                        </div><!-- /#Documents -->

                                        <div id="notes" class="tab-pane">
                                            @include($view_path.'.detail.includes.notes')
                                        </div><!-- /#Notes -->
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


     
    <script>
        $('.bulk-action-btn').click(function () {
            $chkIds = document.getElementsByName('chkIds[]');
            var $chkCount = 0;
            $length = $chkIds.length;
            for (var $i = 0; $i < $length; $i++) {
                if ($chkIds[$i].type == 'checkbox' && $chkIds[$i].checked) {
                    $chkCount++;
                }
            }

            if ($chkCount <= 0) {
                toastr.info("Please, Select At Least One Record.", "Info:");
                return false;
            }

            var $this = $(this);
            var bulk_action = $this.attr('attr-action-type');
            var form = $('#bulk_action_form');
            $('#bulk_action_form').submit();

        });
    </script>
    <!-- inline scripts related to this page -->
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    {{--@include('includes.scripts.paymentgateway.khalti')--}}


