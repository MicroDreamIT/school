<br/>
<div class="row">
    <?php echo Form::label('title', "Route", ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::text('title', null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('rent', "Rent", ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::number('rent', null, ["class" => "form-control border-form", "min"=>"0","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'rent'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('description', "Desc.", ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::textarea('description', null, ["class" => "form-control border-form","rows"=>"2"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'description'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('find_vehicles', 'Find Vehicle & Add', ['class' => 'col-sm-4 control-label align-center']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('find_vehicles', [], null, ["placeholder" => "Type Vehicle Number...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'find_vehicles'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <hr>
        <div class="align-right">
            <button type="button" class="btn btn-sm btn-primary" id="load-html-btn">
                <i class="fa fa-plus bigger-120"></i> Add Vehicle
            </button>
        </div>
    </div>
</div>
<br/>
<div class="space-4"></div>
<!-- Option Values -->
<?php echo $__env->make($view_path.'.includes.vehicle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/route/includes/form.blade.php ENDPATH**/ ?>