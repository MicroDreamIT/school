
<?php $__env->startSection('content'); ?>

     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Receive Detail</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Student</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail
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
            
                <!-- Zero configuration table -->
                <div class="main-content">
        <div class="main-content-inner">
            <div class="page-content">
                
                <div class="page-header">
                    <h1>
                        Student
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                            Profile
                        </small>
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-md-12 ">
                    <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="space-2"></div>

                        <div id="user-profile-2" class="user-profile">
                            <div class="tabbable  ">
                                    <ul class="nav nav-tabs  padding-18 hidden-print ">
                                        <li class="active btn btn-primary btn-sm m-1">
                                            <a data-toggle="tab" class="white" href="#profile">
                                                <i class="white ace-icon fa fa-user bigger-140"></i>
                                                Profile
                                            </a>
                                        </li>
                                        <li class="btn btn-primary btn-sm m-1">
                                            <a data-toggle="tab" class="white" href="#academicInfo">
                                                <i class="green ace-icon fa fa-university bigger-140"></i>
                                                Academic
                                            </a>
                                        </li>

                                        <li class="btn btn-primary btn-sm m-1">
                                            <a data-toggle="tab" class="white" href="#documents">
                                                <i class="pink ace-icon fa fa-files-o bigger-140"></i>
                                                Documents
                                            </a>
                                        </li>

                                        <li class="btn btn-primary btn-sm m-1">
                                            <a data-toggle="tab" class="white" href="#notes">
                                                <i class="red ace-icon fa fa-sticky-note-o bigger-140"></i>
                                                Notes
                                            </a>
                                        </li>

                                        <li class="btn btn-primary btn-sm m-1">
                                            <a data-toggle="tab" class="white" href="#login-access">
                                                <i class="red ace-icon fa fa-key bigger-140"></i>
                                                Login Access
                                            </a>
                                        </li>

                                    </ul>

                                    <div class="tab-content no-border padding-24">
                                        <div id="profile" class="tab-pane in active">
                                           <?php echo $__env->make('user-student.detail.includes.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div><!-- /#home -->

                                        <div id="academicInfo" class="tab-pane">
                                            <?php echo $__env->make('user-student.detail.includes.academicInfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div><!-- /#AcademicInfo -->

                                        <div id="documents" class="tab-pane">
                                            <?php echo $__env->make('user-student.detail.includes.documents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div><!-- /#Documents -->

                                        <div id="notes" class="tab-pane">
                                            <?php echo $__env->make('user-student.detail.includes.notes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div><!-- /#Notes -->

                                        <div id="login-access" class="tab-pane">
                                            <?php echo $__env->make('user-student.detail.includes.login-access', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </div><!-- /#Login Detail -->


                                    </div>
                            </div>

                        </div>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>
 <?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<!-- inline scripts related to this page -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user-student.layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/detail/index.blade.php ENDPATH**/ ?>