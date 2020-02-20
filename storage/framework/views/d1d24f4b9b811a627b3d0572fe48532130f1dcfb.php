<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Payroll List</h4>
        <div class="clearfix">
            <a class="label label-primary label-lg white" href="<?php echo e(route('print-out.payroll.staff-ledger', ['id' => $data['staff']->id]), false); ?>" target="_blank">
                Print Ledger
                <i class="ace-icon fa fa-print  align-top bigger-125 icon-on-right"></i>
            </a>

            <label class="label label-info arrowed label-lg white">Total Balance Amount : <?php echo e(number_format($data['staff']->balance, 2), false); ?>/-</label>
            <span>
                <a class="btn-warning btn-sm" href="<?php echo e(route('account.salary.payment.view', ['id' => $data['staff']->id]), false); ?>">
                     <i class="fa fa-calculator" aria-hidden="true"></i> Pay Salary Now
                 </a>
            </span>
        </div>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Staff Payroll  Record list on table. Filter list using the search box as you wish.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered table-hover dynamic-table">
                <thead class="header">
                    <tr role="row">
                    <th>S.No.</th>
                    <th>Tag Line</th>
                    <th>Head</th>
                    <th>Due Date</th>
                    <th>Amount </th>
                    <th>Allowance </th>
                    <th>Fine </th>
                    <th>Paid </th>
                    <th>Balance </th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['payroll_master']) && $data['payroll_master']->count() > 0): ?>
                    <?php ($i =1); ?>
                    <?php $__currentLoopData = $data['payroll_master']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payrollMaster): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td><?php echo e($payrollMaster->tag_line, false); ?></td>
                            <td><?php echo e(ViewHelper::getPayrollHeadById($payrollMaster->payroll_head), false); ?></td>
                            <td><?php echo e(\Carbon\Carbon::parse($payrollMaster->fee_due_date)->format('Y-m-d'), false); ?></td>
                            <td><?php echo e($payrollMaster->amount, false); ?></td>
                            <td><?php echo e($payrollMaster->paySalary()->sum('allowance'), false); ?></td>
                            <td><?php echo e($payrollMaster->paySalary()->sum('fine'), false); ?></td>
                            <td><?php echo e($payrollMaster->paySalary()->sum('paid_amount'), false); ?></td>
                            <td>
                                <?php echo e($net_balance = ($payrollMaster->amount - ($payrollMaster->paySalary()->sum('paid_amount') + $payrollMaster->paySalary()->sum('fine')))+ $payrollMaster->paySalary()->sum('allowance'), false); ?>

                            </td>
                            <td align="left">
                                <?php if($net_balance == 0): ?>
                                    <span class="label label-success">Paid</span>
                                <?php elseif($net_balance < 0 ): ?>
                                    <span class="label label-danger">Negative</span>
                                <?php elseif($net_balance < $payrollMaster->amount): ?>
                                    <span class="label label-warning">Partial</span>
                                <?php else: ?>
                                    <span class="label label-danger">Due</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="10">No Payroll Data Found</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/staff/detail/includes/payroll.blade.php ENDPATH**/ ?>