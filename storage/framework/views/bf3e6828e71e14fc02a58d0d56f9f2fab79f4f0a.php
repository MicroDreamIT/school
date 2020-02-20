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
                    <?php echo $__env->make('student.includes.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Year</label>
                        <div class="col-sm-1">
                            <?php echo Form::select('year', $data['years'], null, ['class' => 'form-control']); ?>


                        </div>

                        <label class="col-sm-1 control-label">Month</label>
                        <div class="col-sm-2">
                            <?php echo Form::select('month', $data['months'], null, ['class' => 'form-control']); ?>

                        </div>


                        <label class="col-sm-1 control-label">Subject</label>
                        <div class="col-sm-4">
                            <?php echo Form::select('sem_subject', $data['subject'], null, ['class' => 'form-control chosen-select']); ?>

                        </div>

                        <label class="col-sm-1 control-label">Type</label>
                        <div class="col-sm-1">
                            <select name="attendance_type" class="form-control" onChange ="loadStudent(this)">
                                <option value="0"> Select Type </option>
                                <option value="1"> Theory </option>
                                <option value="2"> Practical </option>
                            </select>
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
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/subject/includes/search_form.blade.php ENDPATH**/ ?>