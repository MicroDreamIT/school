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
                    <?php echo $__env->make('staff.includes.common.staff_search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="form-group">
                        <?php echo Form::label('payroll_due_date', 'Date', ['class' => 'col-sm-1 control-label']); ?>

                        <div class=" col-sm-3">
                            <div class="input-group ">
                                <?php echo Form::text('payroll_due_date_start', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker pickadate picker__input picker__input--active", "data-date-format" => "yyyy-mm-dd"]); ?>

                                <span class="input-group-addon">
                                    <i class="fa fa-exchange"></i>
                                </span>
                                <?php echo Form::text('payroll_due_date_end', null, ["placeholder" => "YYYY-MM-DD", "class" => "input-sm form-control border-form input-mask-date date-picker", "data-date-format" => "yyyy-mm-dd"]); ?>

                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'payroll_due_date_start'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'payroll_due_date_end'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                        <label class="col-sm-1 control-label">Head</label>
                        <div class="col-sm-4">
                            <?php echo Form::select('payroll_heads', $data['payroll_heads'], null, ['class' => 'form-control  chosen-select']); ?>

                        </div>

                        <?php echo Form::label('amount', 'Amount', ['class' => 'col-sm-1 control-label']); ?>

                        <div class=" col-sm-2">
                            <div class="input-group ">
                                <?php echo Form::number('amount_start', null, ["class" => "input-sm form-control border-form "]); ?>

                                <span class="input-group-addon">
                                    <i class="fa fa-exchange"></i>
                                </span>
                                <?php echo Form::number('amount_end', null, ["class" => "input-sm form-control border-form"]); ?>

                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'amount_start'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'amount_end'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>

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
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/account/payroll/master/includes/search_form.blade.php ENDPATH**/ ?>