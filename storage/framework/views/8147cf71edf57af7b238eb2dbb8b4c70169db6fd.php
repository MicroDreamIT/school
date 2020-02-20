<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?></h4>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <?php echo Form::label('type', 'TYPE', ['class' => 'col-sm-4 control-label']); ?>

            <div class="col-sm-8">
                <label><?php echo Form::radio('type[]','sms' ,true, ["class" => "ace", "id"=>"typeSms","onclick" => "messageTypeCondition()"]); ?><span class="lbl"> SMS </span></label>
                <label><?php echo Form::radio('type[]','email' ,false, ["class" => "ace", "id"=>"typeEmail","onclick" => "messageTypeCondition()"]); ?><span class="lbl"> E-mail</span></label>
                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'type'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php if(isset($data['roles']) && $data['roles']->count() > 0): ?>
            <span class="label label-warning arrowed-right arrowed-in">Message Send Groups</span>
            <div class="form-group">
                <div class="checkbox">
                    <?php $__currentLoopData = $data['roles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label>
                            <?php echo Form::checkbox('role[]', $role->name, false, ['class' => 'ace role']); ?>

                            <span class="lbl"> <?php echo e($role->display_name, false); ?> </span>
                        </label>
                        <hr class="hr-4">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="control-group">
                </div>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-md-8 sms">
        <div class="form-group">
            <?php echo Form::label('message', 'Message', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-10">
                <?php echo Form::textarea('message', null, ["class" => "form-control border-form", "id"=>"smsmessage","rows"=>"10"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'message'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-8 email">
        <div class="form-group">
            <?php echo Form::label('subject', 'Subject', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-10">
                <?php echo Form::text('subject', null, ["class" => "form-control border-form"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'subject'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo Form::label('emailMessage', 'Message', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-10">
                <?php echo Form::textarea('emailMessage', null, ["class" => "form-control border-form", "id"=>"summernote","rows"=>"5"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'emailMessage'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<div class="clearfix form-actions">
    <div class="col-md-12 align-right">
        <button class="btn btn-warning" type="reset">
            <i class="fa fa-undo bigger-110"></i>
            Reset
        </button>

        <button class="btn btn-info" type="submit" id="group-message-send-btn">
            <i class="fa fa-save bigger-110"></i>
            Send
        </button>
    </div>
</div>

<div class="hr hr-24"></div><?php /**PATH /home/viholddep/public_html/edu/resources/views/info/smsemail/includes/form.blade.php ENDPATH**/ ?>