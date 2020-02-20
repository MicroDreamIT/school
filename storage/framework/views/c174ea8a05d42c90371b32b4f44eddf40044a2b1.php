<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i> Fees Receive History </h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table  class="table table-striped dataex-html5-selectors">
                    <thead>
                        <tr>
                            <th >S.N.</th>
                            <th>Reg. Num.</th>
                            <th>Name</th>
                            <th>Sem/Sec</th>
                            <th>Head</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Method</th>
                            <th>User</th>
                            <th>Note</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($data['feesCollection']) && $data['feesCollection']->count() > 0): ?>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $data['feesCollection']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feesCollection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i, false); ?></td>
                                <td> <a href="<?php echo e(route('student.view', ['id' => $feesCollection->students_id]), false); ?>"><?php echo e($feesCollection->reg_no, false); ?></a></td>
                                <td> <a href="<?php echo e(route('student.view', ['id' => $feesCollection->students_id]), false); ?>"><?php echo e($feesCollection->first_name.' '.$feesCollection->middle_name.' '. $feesCollection->last_name, false); ?></a></td>
                                <td> <?php echo e(ViewHelper::getSemesterTitle( $feesCollection->semester ), false); ?></td>
                                
                                <td><?php echo e(ViewHelper::getFeeHeadById($feesCollection->fee_head), false); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($feesCollection->date)->format('Y-m-d'), false); ?> </td>
                                <td class="text-right"><?php echo e($feesCollection->paid_amount, false); ?></td>
                                <td><?php echo e($feesCollection->payment_mode, false); ?></td>
                                <td> <?php echo e(ViewHelper::getUserNameId( $feesCollection->created_by ), false); ?></td>
                                <td><?php echo e($feesCollection->note, false); ?></td>
                                <td>
                                    <div class="btn btn-primary btn-sm action-buttons">
                                        <a class="white" href="<?php echo e(route('account.fees.collection.view', ['id' => $feesCollection->students_id]), false); ?>">
                                            <i class="ace-icon fa fa-calculator bigger-130"></i>&nbsp;
                                        </a>
                                    </div>
                                </td>
                            <?php ($i++); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="11">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                    <tfoot>
                        <tr style="font-size: 14px; background: orangered;color: white;">
                            <td colspan="6" class="text-right">Total</td>
                            <td  class="align-right"><?php echo e($data['feesCollection']->sum('paid_amount'), false); ?></td>
                            <td> </td>
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


<?php /**PATH /home/viholddep/public_html/edu/resources/views/account/fees/includes/table.blade.php ENDPATH**/ ?>