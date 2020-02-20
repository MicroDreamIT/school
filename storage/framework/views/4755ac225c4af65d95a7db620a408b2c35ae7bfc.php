<span class="badge badge badge-danger badge-pill mr-2">Red mark input are required. </span>
<hr class="hr-16">
<div class="row" style="margin:15px;">
    <?php echo Form::label('reg_no', 'REG.NO.', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        

        <?php echo Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'reg_no'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('reg_date', 'Date of Admission', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        

        <?php echo Form::text('reg_date', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control date-picker border-form input-mask-date","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'reg_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<div class="row" style="margin:15px;">
    <br/>
   <?php echo Form::label('university_reg', 'UNIVERSITY REG. NO.', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
         

        <?php echo Form::text('university_reg', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'university_reg'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<div class="row" style="margin:15px;">

    <?php if(!isset($data['row'])): ?>
        <label class="col-sm-2 control-label">Faculty/Class</label>
        <div class="col-sm-5">
            <select name="faculty" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Faculty/Class..."  onChange ="loadSemesters(this)" >
                <option value="">  </option>
                <?php $__currentLoopData = $data['faculties']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key, false); ?>"><?php echo e($faculty, false); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <label class="col-sm-2 control-label">Sem./Sec.</label>
        <div class="col-sm-3">
            <select name="semester" class="form-control semester" required > </select>
            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'semester'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php else: ?>
        <label class="col-sm-2 control-label">Faculty/Class</label>
        <div class="col-sm-5">
            <?php echo Form::select('faculty', $data['faculties'], null, ['class' => 'form-control chosen-select',"disabled"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'faculty'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <label class="col-sm-2 control-label">Sem./Sec.</label>
        <div class="col-sm-3">
            <?php echo Form::select('semester', $data['semester'], null, ['class' => 'form-control',"disabled"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'semester'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endif; ?>
</div>

<div class="row" style="margin:15px;">
    <?php if(!isset($data['row'])): ?>
        <label class="col-sm-2 control-label">Batch</label>
        <div class="col-sm-5">
            <?php echo Form::select('batch', $data['batch'], 1, ['class' => 'form-control']); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'batch'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo Form::select('academic_status', $data['academic_status'], 1, ['class' => 'form-control']); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'academic_status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php else: ?>
        <label class="col-sm-2 control-label">Batch</label>
        <div class="col-sm-5">
            <?php echo Form::select('batch', $data['batch'], null, ['class' => 'form-control']); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'batch'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-3">
            <?php echo Form::select('academic_status', $data['academic_status'], null, ['class' => 'form-control']); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'academic_status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endif; ?>
</div>

<div class="row" style="margin:15px;">
    <?php echo Form::label('first_name', 'NAME OF STUDENT', ['class' => 'col-sm-3 control-label',]); ?>

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

<div class="row" style="margin:15px;">
    <?php echo Form::label('date_of_birth', 'Date of Birth', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('date_of_birth', null, ["data-date-format" => "yyyy-mm-dd", "class" => "form-control border-form date-picker input-mask-date","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'date_of_birth'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('gender', 'Gender', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::select('gender', ['' => '','MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'OTHER' => 'OTHER'], null, ['class'=>'form-control border-form',"required"]);; ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'gender'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('blood_group', 'Blood Group', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::select('blood_group', ['' => '','A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+','B-' => 'B-','AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+','O-' => 'O-', ], null,
        [ 'class'=>'form-control border-form']);; ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'blood_group'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<div class="row" style="margin:15px;">
    <?php echo Form::label('religion', 'Religion', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('religion', null, ["placeholder" => "", "class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'religion'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('caste', 'Caste', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-5">
        <?php echo Form::text('caste', null, ["class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'caste'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<div class="row" style="margin:15px;">
    <?php echo Form::label('nationality', 'Nationality', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('nationality', null, ["placeholder" => "", "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'nationality'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('mother_tongue', 'Mother Tongue', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('mother_tongue', null, ["class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mother_tongue'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('email', 'E-mail', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('email', null, ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<div class="row" style="margin:15px;">
    <?php echo Form::label('extra_info', 'Extra Info', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-10">
        <?php echo Form::textarea('extra_info', null, ["class" => "form-control border-form", "rows"=>"1"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'extra_info'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>

<div class="badge badge badge-primary badge-pill  mr-2">Contact</div>
<hr class="hr-8">
<div class="row" style="margin:15px;">
    <?php echo Form::label('home_phone', 'Phone', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('home_phone', null, ["class" => "form-control border-form input-mask-phone"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'home_phone'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('mobile_1', 'Mobile 1', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mobile_1'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('mobile_2', 'Mobile 2', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('mobile_2', null, ["class" => "form-control border-form input-mask-mobile"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mobile_2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>


<div class="badge badge badge-primary badge-pill  mr-2">Permanent Address</div>
<hr class="hr-8">
<div class="row" style="margin:15px;">
    <?php echo Form::label('address', 'Address', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('address', null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('state', 'State', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('state', null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'state'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('country', 'Country', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('country', null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'country'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>


<div class="badge badge badge-primary badge-pill  mr-2">Temporary Address</div>
<br/>
<div class="control-group col-sm-12">
    <div class="radio">
        <br/>
        <label>
            <?php echo Form::checkbox('permanent_address_copier', '', false, ['class' => 'ace', "onclick"=>"CopyAddress(this.form)"]); ?>

            <span class="lbl"> Temporary Address Same As Permanent Address</span>
        </label>
    </div>
</div>

<hr>
<hr class="hr-8">

<div class="row" style="margin:15px;">
    <?php echo Form::label('temp_address', 'Address', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('temp_address', null, ["class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'temp_address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('temp_state', 'State', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('temp_state', null, ["class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'temp_state'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('temp_country', 'Country', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('temp_country', null, ["class" => "form-control border-form upper"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'temp_country'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/student/registration/includes/forms/generalinfo.blade.php ENDPATH**/ ?>