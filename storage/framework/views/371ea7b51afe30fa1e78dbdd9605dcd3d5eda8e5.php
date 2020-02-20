<div class="row">
    <?php echo Form::label('reg_date', 'Date', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('reg_date', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control pickadate picker__input picker__input--active","readonly"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'reg_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php if(!isset($data['row'])): ?>
        <label class="col-sm-2 control-label">Faculty/Class</label>
        <div class="col-sm-4">
            <select name="faculty" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Faculty/Class..."  onChange ="loadSemesters(this)" >
                <option value="">  </option>
                <?php $__currentLoopData = $data['faculties']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key, false); ?>"><?php echo e($faculty, false); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        
    <?php else: ?>
        <label class="col-sm-2 control-label">Faculty/Class</label>
        <div class="col-sm-4">
            <?php echo Form::select('faculty', $data['faculties'], null, ['class' => 'form-control',"disabled"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'faculty'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <label class="col-sm-2 control-label">Sem./Sec.</label>
        <div class="col-sm-4">
            <?php echo Form::select('semester', $data['semester'], null, ['class' => 'form-control',"disabled"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'semester'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endif; ?>
</div>
<br/>
<div class="row">
    <?php echo Form::label('first_name', 'NAME OF STUDENT', ['class' => 'col-sm-2 control-label',]); ?>

    <div class="col-sm-3">
        <?php echo Form::text('first_name', null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'first_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-sm-3">
        <?php echo Form::text('middle_name', null, ["class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'middle_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-sm-3">
        <?php echo Form::text('last_name', null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'last_name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('date_of_birth', 'Date of Birth', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('date_of_birth', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control border-form date-picker input-mask-date","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'date_of_birth'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('gender', 'Gender', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::select('gender', ['' => '','MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'OTHER' => 'OTHER'], null, ['class'=>'form-control border-form',"required"]);; ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'gender'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('mobile_1', 'Mobile 1', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mobile_1'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('email', 'E-mail', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('email', null, ["class" => "form-control border-form" ,"required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::password('password',  ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('confirmPassword', 'Confirm Password', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::password('confirmPassword',  ["placeholder" => "", "class" => "form-control border-form"/*,"onkeyup"=>"passCheck()"*/, "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'confirmPassword'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<?php /**PATH /home/viholddep/public_html/edu/resources/views/student/public-registration/includes/forms/generalinfo.blade.php ENDPATH**/ ?>