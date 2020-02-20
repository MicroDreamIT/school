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
            <i class="ace-icon fa fa-caret-right blue"></i>PayFor
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

    <?php if(isset($data['recent_payroll_pay']) && $data['recent_payroll_pay']->count() > 0): ?>
        <?php ($i=1); ?>
        <?php $__currentLoopData = $data['recent_payroll_pay']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salaryPay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i, false); ?></td>
                <td>
                    <a class="blue" href="<?php echo e(route('account.salary.payment.view', ['id' => $salaryPay->staff_id]), false); ?>">
                        <?php echo e($salaryPay->reg_no, false); ?>

                    </a>
                </td>
                <td><?php echo e($salaryPay->title, false); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($salaryPay->date)->format('Y-m-d'), false); ?></td>
                <td>
                    <b><?php echo e($salaryPay->paid_amount, false); ?></b>
                </td>
            </tr>
            <?php ($i++); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="center" colspan="5">
                <a class="green" href="<?php echo e(route('account.payroll.balance'), false); ?>">More</a>
            </td>
        </tr>
    <?php else: ?>
        <tr>
            <td colspan="5">No data found.</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/account/payroll.blade.php ENDPATH**/ ?>