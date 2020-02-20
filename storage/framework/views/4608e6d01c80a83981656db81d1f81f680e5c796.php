

<style>
li
{
    margin:5px;
}
    </style>

    
<?php $__env->startSection('content'); ?>
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
            <?php echo $__env->make($view_path.'.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('includes.validation_error_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                            <div class="tabbable  ">
                                <ul class="nav nav-tabs  padding-18 hidden-print ">
                                    <li class="active">
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#profile">
                                            <i class="green ace-icon fa fa-user bigger-140"></i>
                                            Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#fees">
                                            <i class="orange ace-icon fa fa-calculator bigger-140"></i>
                                            Payroll
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
                                            Documents
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#notes">
                                            <i class="red ace-icon fa fa-sticky-note-o bigger-140"></i>
                                            Notes
                                        </a>
                                    </li>

                                    <li>
                                        <a data-toggle="tab" class="btn btn-primary btn-sm" href="#login-access">
                                            <i class="red ace-icon fa fa-key bigger-140"></i>
                                            Login Access
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="profile" class="tab-pane in active">
                                        <?php echo $__env->make($view_path.'.detail.includes.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#home -->

                                    <div id="fees" class="tab-pane">
                                        <?php echo $__env->make($view_path.'.detail.includes.payroll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#home -->

                                    <div id="library" class="tab-pane">
                                        <?php echo $__env->make($view_path.'.detail.includes.library', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#Library -->

                                    <div id="attendance" class="tab-pane">
                                        <?php echo $__env->make($view_path.'.detail.includes.attendance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#attendance -->

                                    <div id="hostel" class="tab-pane">
                                        <?php echo $__env->make($view_path.'.detail.includes.hostel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#Hostel -->


                                    <div id="transport" class="tab-pane">
                                        <?php echo $__env->make($view_path.'.detail.includes.transport', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#Transport -->

                                    <div id="documents" class="tab-pane">
                                        <?php echo $__env->make($view_path.'.detail.includes.documents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#Documents -->

                                    <div id="notes" class="tab-pane">
                                        <?php echo $__env->make($view_path.'.detail.includes.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#Notes -->

                                    <div id="login-access" class="tab-pane">
                                        <?php echo $__env->make($view_path.'.detail.includes.login-access', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#Login Detail -->
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
     

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/staff/detail/index.blade.php ENDPATH**/ ?>