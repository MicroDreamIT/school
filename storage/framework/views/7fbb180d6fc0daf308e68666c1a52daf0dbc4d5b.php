<!--[if lte IE 8]>
<script src="<?php echo e(asset('assets/js/excanvas.min.js'), false); ?>"></script>
<![endif]-->
<script src="<?php echo e(asset('assets/js/jquery.inputlimiter.min.js'), false); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.maskedinput.min.js'), false); ?>"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {

        $.mask.definitions['~']='[+-]';
        $('.input-mask-date').mask('9999-99-99');
       /* $('.input-mask-phone').mask('999-999999');
        $('.input-mask-mobile').mask('9999999999');*/
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        /*$(".input-mask-registration").mask("075-DEMO-9999");*/
    });
</script>

<?php /**PATH /home/viholddep/public_html/edu/resources/views/includes/scripts/inputMask_script.blade.php ENDPATH**/ ?>