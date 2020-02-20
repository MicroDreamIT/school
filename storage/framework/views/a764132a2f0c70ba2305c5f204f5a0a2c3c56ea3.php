
<?php $__env->startSection('css'); ?>
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css'), false); ?>" />
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Fees</a>
                                    </li>
                                    <li class="breadcrumb-item active">  Collect Fees
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
        <div class="main-page-content-inner">
            <div class="page-content">
              
                <div class="row">
                    <div class="col-md-12">
                    <!-- PAGE CONTENT BEGINS -->
                        
                            <?php if (\Entrust::hasRole(['super-admin','admin','account'])) : ?>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div><?php echo $data['feeSalaryChart']->container(); ?></div>
                                    </div>
                                    <div class="col-md-2">
                                        <div><?php echo $data['feeCompare']->container(); ?></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div><?php echo $data['transactionChart']->container(); ?></div>
                                    </div>
                                </div>
                            <?php endif; // Entrust::hasRole ?>
                        

                        <div class="row">
                            <div class="col-sm-9">
                                <?php if (\Entrust::hasRole(['super-admin','admin','account'])) : ?>
                                    <?php echo $__env->make('dashboard.includes.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; // Entrust::hasRole ?>
                                <?php if (\Entrust::hasRole(['super-admin','admin','library'])) : ?>
                                    <?php echo $__env->make('dashboard.includes.library', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; // Entrust::hasRole ?>
                                <?php if (\Entrust::hasRole(['super-admin','admin'])) : ?>
                                <?php echo $__env->make('dashboard.includes.attendance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endif; // Entrust::hasRole ?>
                                <?php echo $__env->make('dashboard.includes.birthday', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div><!-- /.col -->
                            <div class="col-sm-3">
                                <?php echo $__env->make('dashboard.includes.summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div><!-- /.col -->
                            
                        </div>

        </div><!-- /.row -->
        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!-- page specific plugin scripts -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js" charset="utf-8"></script>
 <?php echo $data['feeSalaryChart']->script(); ?>

 <?php echo $data['feeCompare']->script(); ?>

 <?php echo $data['transactionChart']->script(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/index.blade.php ENDPATH**/ ?>