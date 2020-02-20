<div class="row">
    <?php echo Form::label('name', 'Name or Email', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-3">
        <?php echo Form::text('name', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('role', 'User Role', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-3">
        <?php echo Form::select('role', $data['roles'], null, ['class' => 'form-control']); ?>

    </div>
    <?php echo Form::label('status', 'Status', ['class' => 'col-md-1 control-label']); ?>

    <div class="col-md-2">
        <?php echo Form::select('status', ["all"=>"Select Status","active"=>"Active", "in-active"=>"InActive"], null, ['class' => 'form-control']); ?>

    </div>

</div>
<div class="col-md-12 align-right clearfix form-actions">
    <button class="btn btn-info" type="submit" id="filter-btn">
                            <i class="fa fa-filter bigger-110"></i>
                            Filter
                        </button>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/user/includes/search_form.blade.php ENDPATH**/ ?>