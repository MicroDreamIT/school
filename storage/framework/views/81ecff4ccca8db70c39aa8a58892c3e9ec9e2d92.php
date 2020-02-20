<br/>
<div class="row">
    <?php echo Form::label('title', 'Status', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::text('title', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>

<?php /**PATH /home/viholddep/public_html/edu/resources/views/academic/student-batch/includes/form.blade.php ENDPATH**/ ?>