


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
                <?php echo Form::open(['route' => $base_route,'method' => 'GET', 'class' => 'form-horizontal',
                        "enctype" => "multipart/form-data"]); ?>

                    <div class="clearfix">
                        <div class="form-group">
                            <?php echo Form::label('q', 'Search Using Name | Mobile No. | Email-Id', ['class' => 'col-sm-4 control-label']); ?>

                            <div class="col-sm-8">
                                <?php echo Form::text('q', null, ["placeholder" => "", "class" => "form-control border-form input-mask-registration", "autofocus"]); ?>

                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'q'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/guardian/includes/form.blade.php ENDPATH**/ ?>