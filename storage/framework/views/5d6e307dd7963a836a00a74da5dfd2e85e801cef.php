<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i> Salary Paid History </h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Salary Paid  Record list on table. Filter Salary Paid using the filter.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table  class="table table-striped dataex-html5-selectors">
                    <thead>
                        <tr>
                            <th >S.N.</th>
                            <th>Reg.Num</th>
                            <th>Staff Name</th>
                            <th>Head</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Method</th>
                            <th>User</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($data['salaryPay']) && $data['salaryPay']->count() > 0): ?>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $data['salaryPay']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $salaryPay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i, false); ?></td>
                                <td> <a href="<?php echo e(route('student.view', ['id' => $salaryPay->staff_id]), false); ?>" target="_blank"><?php echo e($salaryPay->reg_no, false); ?></a></td>
                                <td> <a href="<?php echo e(route('student.view', ['id' => $salaryPay->staff_id]), false); ?>" target="_blank"><?php echo e($salaryPay->first_name.' '.$salaryPay->middle_name.' '. $salaryPay->last_name, false); ?></a></td>
                                
                                <td><?php echo e(ViewHelper::getFeeHeadById($salaryPay->payroll_head), false); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($salaryPay->date)->format('Y-m-d'), false); ?> </td>
                                <td class="text-right"><?php echo e($salaryPay->paid_amount, false); ?></td>
                                <td><?php echo e($salaryPay->payment_mode, false); ?></td>
                                <td> <?php echo e(ViewHelper::getUserNameId( $salaryPay->created_by ), false); ?></td>
                                <td>
                                    <div class="btn btn-primary btn-sm action-buttons">
                                        <a class="white" href="<?php echo e(route('account.salary.payment.view', ['id' => $salaryPay->staff_id]), false); ?>">
                                            <i class="ace-icon fa fa-calculator bigger-130"></i>&nbsp;
                                        </a>
                                    </div>
                                </td>
                            <?php ($i++); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11">No Salary Paid data found. Please Filter Salary Paid to show. </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr style="font-size: 14px; background: orangered;color: white;">
                            <td colspan="5" class="text-right">Total</td>
                            <td  class="align-right"><?php echo e($data['salaryPay']->sum('paid_amount'), false); ?></td>
                            <td> </td>
                            <td> </td>
                            <td> </td>
                        </tr>
                    </tfoot>
                </table>
        </div>
        <?php echo Form::close(); ?>

    </div>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/account/payroll/includes/table.blade.php ENDPATH**/ ?>