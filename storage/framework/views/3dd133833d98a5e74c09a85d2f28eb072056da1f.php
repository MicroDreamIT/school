<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?></h4>
<br/>
<div class="row">
    <?php echo Form::label('user_type', 'Type', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::select('user_type', ["0"=>"Select Type","1"=>"Student","2"=>"Staff"], null, ['class' => 'form-control']); ?>

    </div>

    <?php echo Form::label('reg_no', 'REG No.', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('reg_no', $data['reg_no'], ["placeholder" => "", "class" => "form-control border-form","autofocus"]); ?>

    </div>

    <?php echo Form::label('status', 'Status', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::select('status', ["active"=>"Active","in-active"=>"In-Active"], null, ['class' => 'form-control']); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<br/>
<?php if(!isset($data['row'])): ?>
    <div class="row">
        <?php echo Form::label('route', 'Route', ['class' => 'col-sm-2 control-label']); ?>

        <div class="col-sm-4">
            <?php echo Form::select('route', $data['routes'], null, ['class' => 'form-control', "onChange" => "loadVehicle(this)"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'route'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <label class="col-sm-2 control-label">Vehicle</label>
        <div class="col-sm-4">
            <select name="vehicle_select" class="form-control vehicle_select">
                <option value="0"> Select Vehicle </option>
            </select>
        </div>
    </div>
    <br/>
<?php endif; ?>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/user/includes/form.blade.php ENDPATH**/ ?>