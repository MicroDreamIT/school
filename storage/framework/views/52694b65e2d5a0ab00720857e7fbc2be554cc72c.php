<div class="table-responsive">
    <table class="table table-bordered table-striped">
    <thead class="thin-border-bottom">
    <tr>
        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>SN
        </th>

        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>TrHead
        </th>

        <th>
            <i class="ace-icon fa fa-calendar blue"></i>Date
        </th>

        <th>
            <i class="ace-icon fa fa-dollar blue"></i>Dr.Amount
        </th>

        <th>
            <i class="ace-icon fa fa-dollar blue"></i>Cr.Amount
        </th>
    </tr>
    </thead>

    <tbody>

    <?php if(isset($data['recent_transaction']) && $data['recent_transaction']->count() > 0): ?>
        <?php ($i=1); ?>
        <?php $__currentLoopData = $data['recent_transaction']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentTransaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i, false); ?></td>
                <td><?php echo e($recentTransaction->tr_head, false); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($recentTransaction->date)->format('Y-m-d'), false); ?></td>
                <td>
                    <b><?php echo e($recentTransaction->dr_amount, false); ?></b>
                </td>
                <td>
                    <b><?php echo e($recentTransaction->cr_amount, false); ?></b>
                </td>
            </tr>
            <?php ($i++); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="center" colspan="5">
                <a class="green" href="<?php echo e(route('account.transaction'), false); ?>">More</a>
            </td>
        </tr>
    <?php else: ?>
        <tr>
            <td colspan="5">No data found.</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/account/transaction.blade.php ENDPATH**/ ?>