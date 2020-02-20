<div class="row">
    <?php echo Form::label('institute', 'Institute', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-5">
        <?php echo Form::text('institute', null, ["class" => "form-control border-form", "required", "autofocus"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'institute'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('salogan', 'Salogan', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-5">
        <?php echo Form::text('salogan', null, ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'salogan'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br>
<div class="row">
    <?php echo Form::label('copyright', 'Copyright©', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-11">
        <?php echo Form::text('copyright', null, ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'copyright'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br>
<div class="row">
    <?php echo Form::label('address', 'Address', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-5">
        <?php echo Form::text('address', null, ["class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!--<label class="col-md-1 control-label">
        <i class="fa fa-phone bigger-120 white" aria-hidden="true"></i>
    </label>-->
      <?php echo Form::label('phone', 'Phone', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-5">
        <?php echo Form::text('phone', null, ["class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'phone'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br>
<div class="row">
    <!--<label class="col-md-1 control-label">
        <i class="fa fa-envelope bigger-120 white" aria-hidden="true"></i>
    </label>-->
    <?php echo Form::label('email', 'Email', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-5">
        <?php echo Form::email('email', null, ["class" => "form-control border-form" , "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!--<label class="col-md-1 control-label">
        <i class="fa fa-globe bigger-120 white" aria-hidden="true"></i>
    </label>-->
    <?php echo Form::label('globe', 'Globe', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-5">
        <?php echo Form::text('website', null, ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'website'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br>
<div class="row">
        <?php echo Form::label('logo_image', 'Logo', ['class' => 'col-md-1 control-label']); ?>

        <div class="col-md-5">
            <?php echo Form::file('logo_image', ["class" => "form-control border-form"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'logo_image'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <?php if(isset($data['row'])): ?>
            <?php if($data['row']->logo): ?>
                <img id="avatar"  src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['row']->logo), false); ?>" class="img-responsive" >
            <?php endif; ?>
        <?php endif; ?>
  
        <?php echo Form::label('favicon_image', 'Favicon', ['class' => 'col-md-1 control-label']); ?>

        <div class="col-md-5">
            <?php echo Form::file('favicon_image', ["class" => "form-control border-form"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'favicon_image'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <?php if(isset($data['row'])): ?>
            <?php if($data['row']->favicon): ?>
                <img id="avatar"  src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['row']->favicon), false); ?>" class="img-responsive" >
            <?php endif; ?>
        <?php endif; ?>

</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/setting/general/includes/forms/general.blade.php ENDPATH**/ ?>