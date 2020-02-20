<?php echo $__env->make('layouts.includes_new.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Head-->
<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- BEGIN: Header-->
 
    <?php echo $__env->make('layouts.includes_new.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.includes_new.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="new-content-div">
         <?php echo $__env->yieldContent('content'); ?>
</div>
    <!-- BEGIN: Vendor JS-->
   
 <?php echo $__env->make('layouts.includes_new.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->yieldContent('js'); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/layouts/master_new.blade.php ENDPATH**/ ?>