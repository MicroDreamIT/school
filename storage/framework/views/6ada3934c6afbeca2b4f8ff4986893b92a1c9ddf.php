<h4 class="header large lighter blue"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?></h4>

<div class="row">
    <?php echo Form::label('name', 'Hostel', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('name', null, ["class" => "form-control border-form", "required", "autofocus"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('address', 'Address', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('address', null, ["class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'address'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div><br>

<div class="row">
    <?php echo Form::label('contact_detail', 'Contact Detail', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::textarea('contact_detail', null, ["class" => "form-control border-form", "rows"=>"3"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'contact_detail'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo Form::label('description', 'Description', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::textarea('description', null, ["placeholder" => "", "class" => "form-control border-form", "rows"=>"3"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div><br>


<div class="row">
    <?php echo Form::label('warden', 'Warden', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('warden', null, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'warden'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('warden_contact', 'WardenContact', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('warden_contact', null, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'warden_contact'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div><br>

<div class="row">
    <?php echo Form::label('type', 'Type', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::select('type', ["Boys"=>"Boys","Girls"=>"Girls", "Both"=>"Both"], null, ['class' => 'form-control', "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'type'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('status', 'Status', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::select('status', ["all"=>"Select Status","active"=>"Active", "in-active"=>"InActive"], null, ['class' => 'form-control', "required"]); ?>

    </div>
</div><br>

<?php if(!isset($data['row'])): ?>
    <div class="row">
        <?php echo Form::label('rooms', 'Total Room', ['class' => 'col-sm-2 control-label']); ?>

        <div class="col-sm-4">
            <?php echo Form::number('rooms', null, ["class" => "form-control border-form", "required", "min"=>"0"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'rooms'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <?php echo Form::label('room_type', 'RoomType', ['class' => 'col-sm-2 control-label']); ?>

        <div class="col-sm-4">
            <?php echo Form::select('room_type', $data['room_type'], null, ['class' => 'form-control', "required"]); ?>

        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/hostel/hostel/includes/form.blade.php ENDPATH**/ ?>