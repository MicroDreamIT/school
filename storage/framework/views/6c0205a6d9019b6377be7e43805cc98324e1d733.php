
<?php $__env->startSection('content'); ?>


 
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Import</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Students</a>
                                    </li>
                                    <li class="breadcrumb-item active">Import
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
              <?php echo $__env->make($view_path.'.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- PAGE CONTENT BEGINS -->     <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('includes.validation_error_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Import &nbsp;</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="col-xs-12 ">
                        

                            <?php echo Form::open(['route' => $base_route.'.bulk.import', 'method' => 'POST', 'class' => 'form-horizontal',
                             'id' => 'validation-form', "enctype" => "multipart/form-data"]); ?>

                                <hr>
                                <a href="<?php echo e(asset('assets/csv-template/student-import.csv'), false); ?>" target="_blank" class="easy-link-menu"><h3><i class="fa fa-download"></i> CSV Template for Bulk Student Import</h3></a>
                                <hr>
                                <div class="form-group">
                                    <?php echo Form::label('file', 'File', ['class' => 'col-sm-2 control-label']); ?>

                                    <div class="col-sm-4">
                                        <?php echo Form::file('file', null, ["class" => "form-control border-form", "required"]); ?>

                                        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'file'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>

                                <div class="clearfix form-actions">
                                    <div class="col-md-12 align-right">
                                        <button class="btn btn-info" type="submit" id="filter-btn">
                                            <i class="fa fa-upload"></i>
                                            Import
                                        </button>
                                    </div>
                                </div>
                                <div class="hr hr-18 dotted hr-double"></div>
                            <?php echo Form::close(); ?>

                        
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
    <!-- page specific plugin scripts -->

    <?php echo $__env->make('includes.scripts.jquery_validation_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('student.registration.includes.student-comman-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.inputMask_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.datepicker_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/student/registration/import.blade.php ENDPATH**/ ?>