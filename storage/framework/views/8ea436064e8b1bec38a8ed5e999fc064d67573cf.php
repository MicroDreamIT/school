<hr class="hr-8">
<div class="btn-primary btn-sm col-md-2">Parent's Detail</div>
<br/>
<div class="row">
    <?php echo Form::label('father_name', 'NAME OF FATHER', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('father_first_name', null, [ "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'father_first_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-sm-3">
        <?php echo Form::text('father_middle_name', null, ["class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'father_first_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-sm-3">
        <?php echo Form::text('father_last_name', null, [ "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'father_last_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('mother_name', 'NAME OF MOTHER', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('mother_first_name', null, [ "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mother_first_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-sm-3">
        <?php echo Form::text('mother_middle_name', null, ["class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mother_first_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-sm-3">
        <?php echo Form::text('mother_last_name', null, [ "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mother_last_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<hr class="hr-8">
<div class="btn-primary btn-sm col-md-2">Guardian's Detail</div>
<br/>
<div class="control-group col-sm-12">
    <div class="radio">
        <label>
            <?php echo Form::radio('guardian_is', 'father_as_guardian', false, ['class' => 'ace', "onclick"=>"FatherAsGuardian(this.form)"]); ?>

            <span class="lbl"> Father is Guardian</span>
        </label>
        <label>
            <?php echo Form::radio('guardian_is', 'mother_as_guardian', false, ['class' => 'ace',"onclick"=>"MotherAsGuardian(this.form)"]); ?>

            <span class="lbl"> Mother is Guardian</span>
        </label>
        <label>
            <?php echo Form::radio('guardian_is', 'other_guardian', true, ['class' => 'ace', "onclick"=>"OtherGuardian(this.form)"]); ?>

            <span class="lbl"> Other's</span>
        </label>
        
    </div>
</div>
<hr>
<div id="guardian-detail">
    <hr class="hr-8">
    <div class="row">
        <?php echo Form::label('guardian_name', 'NAME OF GUARDIAN', ['class' => 'col-sm-2 control-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::text('guardian_first_name', null, [ "class" => "form-control border-form upper","required"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'guardian_first_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-sm-3">
            <?php echo Form::text('guardian_middle_name', null, ["class" => "form-control border-form upper"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'guardian_first_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-sm-3">
            <?php echo Form::text('guardian_last_name', null, [ "class" => "form-control border-form upper","required"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'guardian_last_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <br/>
    <div class="row">
        <?php echo Form::label('guardian_mobile_1', 'Mobile 1', ['class' => 'col-sm-2 control-label']); ?>

        <div class="col-sm-4">
            <?php echo Form::text('guardian_mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'guardian_mobile_1'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <?php echo Form::label('guardian_email', 'E-mail', ['class' => 'col-sm-2 control-label']); ?>

        <div class="col-sm-4">
            <?php echo Form::text('guardian_email', null, ["class" => "form-control border-form"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'guardian_email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
</div>
<br/>
    <div class="row">
        <?php echo Form::label('guardian_relation', 'Relation', ['class' => 'col-sm-2 control-label']); ?>

        <div class="col-sm-4">
            <?php echo Form::text('guardian_relation', null, ["class" => "form-control border-form upper","required"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'guardian_relation'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="row">


       
    </div>
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/student/public-registration/includes/forms/parent.blade.php ENDPATH**/ ?>