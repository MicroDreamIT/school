<div class="col-md-12">
        
        <div class="clearfix">
            
           

            <span class="pull-right tableTools-container"></span>
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
             <table  class="table table-striped dataex-html5-selectors">
                <thead class="header">
                <tr role="row">
                    <th>S.No.</th>
                    <th>Sem./Sec.</th>
                    <th>Head</th>
                    <th>DueDate</th>
                    <th>Amount </th>
                    <th>Dis. </th>
                    <th>Fine </th>
                    <th>Paid </th>
                    <th>Due </th>
                    <th>Status</th>
                    
                </tr>
                </thead>
                <tbody>
                    <?php if(isset($data['fee_master']) && $data['fee_master']->count() > 0): ?>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $data['fee_master']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feemaster): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i, false); ?></td>
                                <td><?php echo e(ViewHelper::getSemesterById($feemaster->semester), false); ?></td>
                                <td><?php echo e(ViewHelper::getFeeHeadById($feemaster->fee_head), false); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($feemaster->fee_due_date)->format('Y-m-d'), false); ?></td>
                                <td><?php echo e($feemaster->fee_amount, false); ?></td>
                                <td><?php echo e($feemaster->feeCollect()->sum('discount')?$feemaster->feeCollect()->sum('discount'):'-', false); ?></td>
                                <td><?php echo e($feemaster->feeCollect()->sum('fine')?$feemaster->feeCollect()->sum('fine'):'-', false); ?></td>
                                <td><?php echo e($feemaster->feeCollect()->sum('paid_amount')?$feemaster->feeCollect()->sum('paid_amount'):'-', false); ?></td>
                                <td>
                                    <?php ($net_balance = ($feemaster->fee_amount - ($feemaster->feeCollect()->sum('paid_amount')
                                    + $feemaster->feeCollect()->sum('discount')))+ $feemaster->feeCollect()->sum('fine')); ?>
                                    <?php echo e($net_balance?$net_balance:'-', false); ?>

                                </td>
                                <td align="left" class="text text-left">
                                    <?php if($net_balance == 0): ?>
                                        <span class="label label-success">Paid</span>
                                    <?php elseif($net_balance < 0 ): ?>
                                        <span class="label label-warning">Negative</span>
                                    <?php elseif($net_balance < $feemaster->fee_amount): ?>
                                        <span class="label label-info">Partial</span>
                                    <?php else: ?>
                                        <span class="label label-danger">Due</span>
                                    <?php endif; ?>
                                </td>
                                
                            </tr>
                            <?php ($i++); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr style="font-size: 14px; background: orangered;color: white;">
                        <td colspan="4">Total</td>
                        <td><?php echo e($data['student']->fee_amount?$data['student']->fee_amount:'-', false); ?></td>
                        <td><?php echo e($data['student']->discount?$data['student']->discount:'-', false); ?></td>
                        <td><?php echo e($data['student']->fine?$data['student']->fine:'-', false); ?></td>
                        <td><?php echo e($data['student']->paid_amount?$data['student']->paid_amount:'-', false); ?></td>
                        <td>
                            <?php echo e($data['student']->balance?$data['student']->balance:'-', false); ?>

                        </td>
                        <td>
                            <?php if($data['student']->balance == 0): ?>
                                <span class="label label-success">Paid</span>
                            <?php elseif($data['student']->balance < 0 ): ?>
                                <span class="label label-warning">Negative</span>
                            <?php elseif($data['student']->balance < $data['student']->fee_amount): ?>
                                <span class="label label-warning">Partial</span>
                            <?php else: ?>
                                <span class="label label-danger">Due</span>
                            <?php endif; ?>
                        </td>
                        
                    </tr>
                </tfoot>
            </table>
        </div>
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/fees/includes/table.blade.php ENDPATH**/ ?>