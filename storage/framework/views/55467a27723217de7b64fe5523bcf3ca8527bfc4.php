<div id="accordion" class="accordion-style1 panel-group">
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
                    <?php echo $__env->make('student.includes.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <br/>
                    <div class="row">
                        <?php echo Form::label('issue_date', 'Issue Date', ['class' => 'col-sm-1 control-label']); ?>

                        <div class=" col-sm-3">
                            <div class="input-group ">
                                <?php echo Form::text('issue_start_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]); ?>

                                <span class="input-group-addon">
                                    <i class="fa fa-exchange"></i>
                                </span>
                                <?php echo Form::text('issue_end_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]); ?>

                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'issue_start_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'issue_end_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                        <?php echo Form::label('year_of_study', 'Study Year', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::text('year_of_study', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'year_of_study'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <?php echo Form::label('percentage_of_attendance', 'Percentage of Attendance', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::text('percentage_of_attendance', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'percentage_of_attendance'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                    </div>
                    <br/>
                </div>
                <div class="clearfix form-actions">
                    <div class="col-md-12 align-right">        &nbsp; &nbsp; &nbsp;
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
<?php /**PATH /home/viholddep/public_html/edu/resources/views/certificate/attendance/includes/search_form.blade.php ENDPATH**/ ?>