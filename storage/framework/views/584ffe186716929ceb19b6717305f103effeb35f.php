<div class="table-responsive">
    <table class="table table-bordered table-striped">
    <thead class="thin-border-bottom">
    <tr>
        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>SN
        </th>

        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>Reg.No.
        </th>

        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>Fees Title
        </th>

        <th>
            <i class="ace-icon fa fa-calendar blue"></i>Date
        </th>

        <th>
            <i class="ace-icon fa fa-dollar blue"></i>Amount
        </th>
    </tr>
    </thead>

    <tbody>

        <?php if(isset($data['recent_fees_collection']) && $data['recent_fees_collection']->count() > 0): ?>
            <?php ($i=1); ?>
            <?php $__currentLoopData = $data['recent_fees_collection']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee_collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i, false); ?></td>
                    <td>
                        <a class="blue" href="<?php echo e(route('account.fees.collection.view', ['id' => $fee_collection->students_id]), false); ?>">
                            <?php echo e($fee_collection->reg_no, false); ?>

                        </a>
                    </td>
                    <td><?php echo e($fee_collection->fee_head_title, false); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($fee_collection->date)->format('Y-m-d'), false); ?></td>
                    <td>
                        <b><?php echo e($fee_collection->paid_amount, false); ?></b>
                    </td>
                </tr>
                <?php ($i++); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="center" colspan="5">
                    <a class="green" href="<?php echo e(route('account.fees.balance'), false); ?>">More</a>
                </td>
            </tr>
        <?php else: ?>
            <tr>
                <td colspan="11">No data found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/account/fees.blade.php ENDPATH**/ ?>