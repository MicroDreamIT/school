<br/>
<div class="row">
    <?php echo Form::label('faculty', 'Faculty/Class', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::text('faculty', null, ["placeholder" => "e.g. Class One/Bachelor of Business Admin..", "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'faculty'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('faculty_code', 'Faculty/ClassCode', ['class' => 'col-sm-6 control-label']); ?>

    <div class="col-sm-6">
        <?php echo Form::text('faculty_code', null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'faculty_code'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<?php if(isset($data['semester']) && $data['semester']->count() > 0): ?>
    <div class="row">
        <label class="col-sm-12 control-label align-left" for="status"> Semester/Section &nbsp;&nbsp;&nbsp;</label>
        <?php $__currentLoopData = $data['semester']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $semester): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-4">
                <div class="control-group">
                    <div class="checkbox">
                        <br/>
                        <label>
                            <?php if(!isset($data['row'])): ?>
                                <?php echo Form::checkbox('semester[]', $semester->id, false, ['class' => 'ace']); ?>

                            <?php else: ?>
                                <?php echo Form::checkbox('semester[]', $semester->id, array_key_exists($semester->id, $data['active_semester']), ['class' => 'ace']); ?>

                            <?php endif; ?>
                            <span class="lbl"> <?php echo e($semester->semester, false); ?> </span>
                        </label>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'semester[]'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <br/>
<?php endif; ?>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/academic/faculty/includes/form.blade.php ENDPATH**/ ?>