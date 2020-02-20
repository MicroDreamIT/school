
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
                <div class="row">
                    <div class="col-md-12 ">
                        <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="form-horizontal">
                            <div class="hr hr-4 hr-dotted"></div>
                            <div class="row text-uppercase">
                                <div class="col-sm-5 pull-right align-right">
                                    <label class="label label-info label-lg white">Total Balance : <?php echo e(number_format($data['student']->balance, 2), false); ?>/-</label>
                                </div>
                                <div class="col-sm-7 pull-left">
                                    <strong>Balance In Word:</strong> <?php echo e(ViewHelper::convertNumberToWord($data['student']->balance), false); ?>only.
                                </div>
                            </div>
                            <div class="hr hr-8 hr-dotted"></div>

                            <div class="tabbable">
                                <ul class="nav nav-tabs  padding-18 hidden-print ">
                                    <li class="active">
                                        <a data-toggle="tab" class="btn btn-primary btn-sm m-1" href="#fees">
                                            <i class="green ace-icon fa fa-calculator bigger-140"></i>
                                            Fees
                                        </a>
                                    </li>

                                    <li >
                                        <a data-toggle="tab" class="btn btn-primary btn-sm m-1" href="#pay-online">
                                            <i class="blue ace-icon fa fa-calculator bigger-140"></i>
                                            Online Payment
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content no-border padding-24">
                                    <div id="fees" class="tab-pane in active">
                                        <?php echo $__env->make($view_path.'.fees.includes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div><!-- /#home -->

                                    <div id="pay-online" class="tab-pane">
                                         <?php if($data['student']->balance > 0): ?>
                                            <?php echo $__env->make($view_path.'.fees.includes.pay-online', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                         <?php else: ?>
                                            <div class="col-sm-5 pull-right align-right">
                                                <label class="label label-info label-lg white"></label>
                                            </div>
                                         <?php endif; ?>
                                    </div><!-- /#onlinepayment -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>
 <?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <!-- inline scripts related to this page -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user-student.layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/fees/index.blade.php ENDPATH**/ ?>