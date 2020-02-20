<div class="row">
    <?php echo Form::label('reg_no', 'Reg. No.', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'reg_no'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('title', 'Title', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::text('title', null, ["placeholder" => "", "class" => "form-control border-form","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('document_file', 'Select File', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::file('document_file', null, ["placeholder" => "", "class" => "form-control border-form","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'document_file'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php if(isset($data['row'])): ?>


<br/>
    <div class="row">
        <?php echo Form::label('old_file', 'Old File', ['class' => 'col-sm-4 control-label']); ?>

        <div class="col-sm-8">
            <?php if($data['row']->file): ?>
                <a href="<?php echo e(asset($folder_name.DIRECTORY_SEPARATOR.'student'.DIRECTORY_SEPARATOR.ViewHelper::getStudentById( $data['row']->member_id ).DIRECTORY_SEPARATOR.$data['row']->file), false); ?>" target="_blank">
                    <i class="ace-icon fa fa-download bigger-120"></i> &nbsp;<?php echo e($data['row']->title, false); ?>

                </a>
            <?php else: ?>
                <p>No File.</p>
            <?php endif; ?>
        </div>
    </div>

<?php endif; ?>
<br/>
<div class="row">
    <?php echo Form::label('description', 'Description', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::textarea('description', null, ["placeholder" => "", "class" => "form-control border-form", "rows"=>"2"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php /**PATH /home/viholddep/public_html/edu/resources/views/student/document/includes/form.blade.php ENDPATH**/ ?>