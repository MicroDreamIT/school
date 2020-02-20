<div class="row">
    <label class="col-md-2 control-label">
        <i class="fa fa-print bigger-120 white" aria-hidden="true"></i> Header Text
    </label>
    <div class="col-md-8">
        <?php echo Form::textarea('print_header', null, ["class" => "form-control border-form","id"=>"summernote"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'print_header'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br>
<div class="row">
    <label class="col-md-2 control-label">
        <i class="fa fa-print bigger-120 white" aria-hidden="true"></i> Footer Text
    </label>
    <div class="col-md-8">
        <?php echo Form::textarea('print_footer', null, ["class" => "form-control border-form summernote"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'print_footer'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/setting/general/includes/forms/print.blade.php ENDPATH**/ ?>