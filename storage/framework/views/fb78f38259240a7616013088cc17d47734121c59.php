<?php echo $__env->make('layouts.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('top-script'); ?>

<?php $__env->stopSection(); ?>
    <body class="no-skin">
        <div id="overlay">
            <i class="ace-icon fa fa-spinner fa-spin blue bigger-125"></i>
        </div>
        <?php echo $__env->make('layouts.includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-container ace-save-state" id="main-container">
                <script type="text/javascript">
                    try{ace.settings.loadState('main-container')}catch(e){}
                </script>
               <?php echo $__env->make('layouts.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
                <?php echo $__env->make('layouts.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
                </a>
            </div><!-- /.main-container -->

        <?php echo $__env->yieldContent('js'); ?>

    </body>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/layouts/master.blade.php ENDPATH**/ ?>