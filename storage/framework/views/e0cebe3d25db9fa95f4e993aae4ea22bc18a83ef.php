<div class="row">
    <?php echo Form::label('hostels_id', 'Hostels', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('hostels_id',$data['hostels'], null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'hostels_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br>
<div class="row">

    <?php echo Form::label('days_id', 'Day', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('days_id',$data['days'], null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'days_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br>
<div class="row">
    <?php echo Form::label('eating_times_id', 'Time', ['class' => 'col-sm-4 control-label']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('eating_times_id',$data['eating_times'], null, ["class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'eating_times_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br>
<div class="row">
    <?php echo Form::label('food_items', 'Find Food Item & Add', ['class' => 'col-sm-4 control-label align-center']); ?>

    <div class="col-sm-8">
        <?php echo Form::select('food_items', [], null, ["placeholder" => "Type Food Name...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'food_items'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <hr>
        <div class="align-right">
            <button type="button" class="btn btn-sm btn-primary" id="load-html-btn">
                <i class="fa fa-plus bigger-120"></i> Add Food
            </button>
        </div>
    </div>
</div>
<br>
<div class="space-4"></div>
<!-- Option Values -->
<?php echo $__env->make($view_path.'.includes.food', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/hostel/food/includes/form.blade.php ENDPATH**/ ?>