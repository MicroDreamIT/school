<script src="<?php echo e(asset('assets/js/jquery.validate.min.js'), false); ?>"></script>
<script>

    function jqueryValidation(rules, messages) {


        $('#validation-form').validate({
            rules : rules,
            messages: messages,
        });

    }

</script><?php /**PATH /home/viholddep/public_html/edu/resources/views/includes/scripts/jquery_validation_scripts.blade.php ENDPATH**/ ?>