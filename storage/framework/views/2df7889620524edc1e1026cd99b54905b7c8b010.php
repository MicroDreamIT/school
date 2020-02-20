<div class="row">
    <?php echo Form::label('reg_no', 'REG. NO.', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'reg_no'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('reg_date', 'Reg. Date', ['class' => 'col-sm-1 control-label']); ?>

    <div class=" col-sm-3">
        <div class="row ">
            <?php echo Form::text('reg_start_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "form-control pickadate picker__input picker__input--active", "data-date-format" => "yyyy-mm-dd"]); ?>

            <span class="input-group-addon">
                                    <i class="fa fa-exchange"></i>
                                </span>
            <?php echo Form::text('reg_end_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "form-control pickadate picker__input picker__input--active", "data-date-format" => "yyyy-mm-dd"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'reg_start_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'reg_end_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <label class="col-sm-1 control-label">Status</label>
    <div class="col-sm-2">
        <?php echo Form::select('academic_status', $data['academic_status'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);']); ?>

    </div>
    <div class="col-sm-2">
        <select class="form-control border-form" name="status" id="cat_id">
            <option value="all"> Select Status </option>
            <option value="active" >Active</option>
            <option value="in-active" >In-Active</option>
        </select>
    </div>
</div>
<br/>
<div class="row">
    <label class="col-sm-2 control-label">Faculty/Class</label>
    <div class="col-sm-4">
        <?php echo Form::select('faculty', $data['faculties'], null, ['class' => 'form-control chosen-select', 'onChange' => 'loadSemesters(this);']); ?>

    </div>

    <label class="col-sm-1 control-label">Sem./Sec.</label>
    <div class="col-sm-2">
        <select name="semester_select" class="form-control semester_select" >
            <option value="0"> Select Sem./Sec. </option>
        </select>
    </div>

    <label class="col-sm-1 control-label">Batch</label>
    <div class="col-sm-2">
        <?php echo Form::select('batch', $data['batch'], null, ['class' => 'form-control']); ?>

    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('religion', 'Religion', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('religion', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'religion'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('caste', 'Caste', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('caste', null, ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'caste'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('nationality', 'Nationality', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('nationality', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'nationality'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('mother_tongue', 'Mot.Tongue', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('mother_tongue', null, ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mother_tongue'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/student/includes/search_form.blade.php ENDPATH**/ ?>