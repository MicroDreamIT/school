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
                        <?php echo Form::label('tc_num', 'Transfer Certificate No.', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::text('tc_num', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'tc_num'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

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

                        <?php echo Form::label('leave_date', 'Leave Date', ['class' => 'col-sm-1 control-label']); ?>

                        <div class=" col-sm-3">
                            <div class="input-group ">
                                <?php echo Form::text('leave_start_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]); ?>

                                <span class="input-group-addon">
                        <i class="fa fa-exchange"></i>
                    </span>
                                <?php echo Form::text('leave_end_date', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]); ?>

                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'leave_start_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'leave_end_date'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <?php echo Form::label('character', 'Character', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::text('character', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'character'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <?php echo Form::label('paid_fee_status', 'Fee Paid Status', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::text('paid_fee_status', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'paid_fee_status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <?php echo Form::label('qualified_to_promote', 'Qualified to Promote', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::text('qualified_to_promote', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'qualified_to_promote'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <?php echo Form::label('leaving_time_class', 'Leaving Time Class', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-10">
                            <?php echo Form::text('leaving_time_class', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'leaving_time_class'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php /**PATH /home/viholddep/public_html/edu/resources/views/certificate/transfer/includes/search_form.blade.php ENDPATH**/ ?>