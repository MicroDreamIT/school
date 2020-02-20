<h4 class="header large lighter blue"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> Add Form</h4>
<div class="alert alert-warning">
    <button type="button" class="close" data-dismiss="alert">
        <i class="ace-icon fa fa-times"></i>
    </button>
    <strong>Warning!</strong>
    Please be patient when adding fees because it effects on selected students and after that you will change manually.
    <br>
</div>
<?php echo Form::open(['route' => $base_route.'.store', 'id' => 'fee_add_form']); ?>


<div class="form-group">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>&nbsp;</th>
            <th>Due Date</th>
            <th>Fee Head</th>
            <th>Amount</th>
            <th>
                <button type="button" class="btn btn-xs btn-primary pull-right" id="load-fee-html">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New Fee Row
                </button>
            </th>
        </tr>
        </thead>

        <tbody id="fee_wrapper">

            <?php if(isset($data['row'])): ?>

                <?php $__currentLoopData = $data['product_attribute_array']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php echo $__env->make($view_path.'.includes.fee_tr_edit', ['attribute_groups' => $data['attribute_groups'],'attribute' => $attribute], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>

        </tbody>

    </table>
</div>


<div class="clearfix form-actions">
    <div class="col-md-12 align-right">
        <button class="btn btn-warning" type="reset">
            <i class="fa fa-undo bigger-110"></i>
            Reset
        </button>
        &nbsp; &nbsp; &nbsp;
        <button class="btn btn-success" type="submit" id="fee-add-btn">
            <i class="fa fa-save bigger-110"></i>
            Add Fee
        </button>
    </div>
</div>
<div class="hr-double hr-18"></div>

<?php /**PATH /home/viholddep/public_html/edu/resources/views/account/fees/master/includes/add.blade.php ENDPATH**/ ?>