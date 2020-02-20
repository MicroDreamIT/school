<br/>
<div class="row">
    <?php echo Form::label('semester', 'Sem./Sec.', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::text('semester', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'semester'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<br/>
<div class="row">
    <?php echo Form::label('gradingType_id', 'Grading Type', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('gradingType_id',$data['gradingScales'], null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'gradingType_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('staff_id', 'Teacher/Staff', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('staff_id',$data['staffs'], null, ["class" => "form-control border-form chosen-select","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'staffs'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('semester', 'Course Find and Add', ['class' => 'col-sm-12 control-label align-center']); ?>

    <br/>
    <div class="col-sm-12 mt-2">
        <?php echo Form::select('subject_id', [], null, ["placeholder" => "Type Course Name...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'subject_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <hr>
        <br/>
        <div class="align-right">
            <button type="button" class="btn btn-sm btn-primary" id="load-html-btn">
                <i class="fa fa-plus bigger-120"></i> Add Course
            </button>
        </div>
    </div>
</div>
<br/>
<div class="space-4"></div>
<!-- Option Values -->
<?php echo $__env->make($view_path.'.includes.subject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<br/><?php /**PATH /home/viholddep/public_html/edu/resources/views/academic/semester/includes/form.blade.php ENDPATH**/ ?>