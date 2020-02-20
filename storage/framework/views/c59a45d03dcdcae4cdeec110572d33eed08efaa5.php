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
                
                <div class="clearfix form-horizontal">
                    <br/>
                    <div class="row">
                        <?php echo Form::label('user_type', 'Type', ['class' => 'col-sm-1 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::select('user_type', ["0"=>"Select Type","1"=>"Student","2"=>"Staff"], null, ['class' => 'form-control']); ?>

                        </div>

                        <?php echo Form::label('reg_no', 'REG No.', ['class' => 'col-sm-1 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::text('reg_no', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]); ?>

                        </div>


                        <?php echo Form::label('route', 'Route', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-4">
                            <?php echo Form::select('route', $data['routes'], null, ['class' => 'form-control', "onChange" => "loadAllVehicles(this)"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'route'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <label class="col-sm-2 control-label">Vehicle</label>
                        <div class="col-sm-4">
                            <select name="vehicle_select" class="form-control vehicle_select">
                                <option value="0"> Select Vehicle </option>
                            </select>
                        </div>

                        <?php echo Form::label('status', 'Status', ['class' => 'col-sm-2 control-label']); ?>

                        <div class="col-sm-4">
                            <?php echo Form::select('status', ["0"=>"Select Status...", "1"=>"Active","2"=>"In-Active"], null, ['class' => 'form-control']); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <br/>
                </div>
                <div class="clearfix form-actions">
                    <div class="align-right">
                        <button class="btn btn-info" type="submit" id="filter-btn">
                            <i class="fa fa-filter bigger-110"></i>
                            Filter
                        </button>
                    </div>
                </div>
                <br/>
                

            </div>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/user/includes/search_form.blade.php ENDPATH**/ ?>