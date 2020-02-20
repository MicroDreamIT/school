<h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search Student</h4>
<div class="form-horizontal">
    <div class="form-group">
        <?php echo Form::label('Date', 'Date', ['class' => 'col-sm-1 control-label']); ?>

        <div class=" col-sm-2">
            <div class="input-group ">
                <?php echo Form::text('date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd","required", "onChange"=>"loadStudent(this);"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <label class="col-sm-2 control-label">Faculty/Class</label>
        <div class="col-sm-4">
            <?php echo Form::select('faculty', $data['faculties'], null, ['class' => 'form-control chosen-select', 'onChange' => 'loadSemesters(this);']); ?>


        </div>

        <label class="col-sm-1 control-label">Sem./Sec.</label>
        <div class="col-sm-2">
            <select name="semester_select" class="form-control semester_select" onChange ="loadSubject(this)">
                <option> Select Sem./Sec. </option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-1 control-label">Subject</label>
        <div class="col-sm-6">
            <select name="sem_subject" class="form-control sem_subject" onChange ="loadStudent(this)">
                <option> Select Subject </option>
            </select>
        </div>

        <label class="col-sm-1 control-label">Type</label>
        <div class="col-sm-4">
            <select name="attendance_type" class="form-control" onChange ="loadStudent(this)">
                <option value="0"> Select Type </option>
                <option value="1"> Theory </option>
                <option value="2"> Practical </option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-1 control-label">Batch</label>
        <div class="col-sm-11">
            <?php echo Form::select('batch', $data['batch'], null, ['class' => 'form-control' , 'onChange' => 'loadStudent(this);']); ?>

            <em>Select Only if you want to filter batch-wise</em>
        </div>

    </div>

    <div class="hr hr-18 dotted hr-double"></div>
</div>
<!-- Option Values -->


<?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/subject/includes/form.blade.php ENDPATH**/ ?>