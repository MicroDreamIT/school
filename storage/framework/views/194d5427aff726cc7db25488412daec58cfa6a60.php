<br/>
<div class="row">
    <?php echo Form::label('title', 'Subject', ['class' => 'col-sm-3 control-label']); ?>

    <div class="col-sm-9">
        <?php echo Form::text('title', null, ["placeholder" => "e.g. English", "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('code', 'Code', ['class' => 'col-sm-3 control-label']); ?>

    <div class="col-sm-9">
        <?php echo Form::text('code', null, ["placeholder" => "e.g. E01", "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'code'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('full_mark_theory', 'FM (T)', ['class' => 'col-sm-3 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::number('full_mark_theory', null, ["class" => "form-control border-form upper",'min'=>'0']); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'full_mark_theory'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo Form::label('pass_mark_theory', 'PM (T)', ['class' => 'col-sm-3 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::number('pass_mark_theory', null, ["class" => "form-control border-form upper",'min'=>'0']); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'pass_mark_theory'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('full_mark_practical', 'FM (P)', ['class' => 'col-sm-3 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::number('full_mark_practical', null, ["class" => "form-control border-form upper",'min'=>'0']); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'full_mark_practical'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo Form::label('pass_mark_practical', 'PM (P)', ['class' => 'col-sm-3 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::number('pass_mark_practical', null, ["class" => "form-control border-form upper",'min'=>'0']); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'pass_mark_practical'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('credit_hour', 'Credit Hour', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::number('credit_hour', null, ["class" => "form-control border-form upper",'min'=>'0']); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'credit_hour'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('sub_type', 'Subject Type', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('sub_type',['Compulsory'=>'Compulsory','Optional'=>'Optional'], null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'sub_type'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('class_type', 'Class Type', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('class_type',['Theory'=>'Theory','Practical'=>'Practical','Both'=>'Both'], null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'class_type'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('staff_id', 'Teacher/Staff', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('staff_id',$data['staffs'], null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'staffs'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('description', 'Description', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::textarea('description', null, ["class" => "form-control border-form upper",'rows'=>'1']); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/><?php /**PATH /home/viholddep/public_html/edu/resources/views/academic/subject/includes/form.blade.php ENDPATH**/ ?>