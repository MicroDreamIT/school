<div id="accordion" class="accordion-style1 panel-group hidden-print">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                    <h3 class="header large lighter blue btn btn-primary">
                        <i class="bigger-110 ace-icon fa fa-angle-double-right" data-icon-hide="ace-icon fa fa-angle-double-down" data-icon-show="ace-icon fa fa-angle-double-right"></i>
                        Filter <?php echo e($panel, false); ?>

                        <i class="fa fa-filter" aria-hidden="true"></i>&nbsp;
                    </h3>
                </a>
            </h4>
        </div>

        <div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
                
                <div class="clearfix">
                    <div class="row">
                        <label class="col-sm-2 control-label">Faculty/Class</label>
                        <div class="col-sm-5">
                            <?php echo Form::select('faculty', $data['faculties'], null, ['class' => 'form-control chosen-select', 'onChange' => 'loadSemesters(this);']); ?>

                        </div>

                        <label class="col-sm-2 control-label">Sem./Sec.</label>
                        <div class="col-sm-3">
                            <select name="semester_select" class="form-control semester_select">
                                <option> Select Sem./Sec. </option>
                            </select>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <?php echo Form::label('years_id', 'Year', ['class' => 'col-sm-1 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::select('years_id', $data['years'], null, ["class" => "form-control border-form","required"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'years_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <?php echo Form::label('months_id', 'Month', ['class' => 'col-sm-1 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::select('months_id', $data['months'], null, ["class" => "form-control border-form","required"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'months_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <?php echo Form::label('exams_id', 'Exam', ['class' => 'col-sm-1 control-label']); ?>

                        <div class="col-sm-5">
                            <?php echo Form::select('exams_id', $data['exams'], null, ["class" => "form-control border-form chosen-select","required"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'exams_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <br/>

                    <div class="clearfix form-actions">
                    <div class="align-right">
                        <button class="btn btn-info" type="submit" id="filter-btn">
                            <i class="fa fa-filter bigger-110"></i>
                            Filter
                        </button>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/examination/schedule/includes/search_form.blade.php ENDPATH**/ ?>