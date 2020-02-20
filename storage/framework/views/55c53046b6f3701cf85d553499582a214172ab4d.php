<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <?php echo Form::open(['route' => 'info.smsemail.dueReminder', 'id' => 'send_reminder_message']); ?>

        <div class="clearfix">
            <span class="form-group due-reminder-submit">
                <a class="btn-primary btn-sm message-send-btn" style="color: white;"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Send Due Reminder SMS/Email Alert</a>
                <a class="btn-success btn-sm bulk-due-slip" style="color: white;" >Bulk Due Detail Slip <i class="fa fa-print" aria-hidden="true"></i></a>
                <a class="btn-primary btn-sm short-due-slip" style="color: white;" >Bulk Short Due Reminder Slip <i class="fa fa-print" aria-hidden="true"></i></a>
            </span>
            <span class="pull-right tableTools-container"></span>
        </div>
        <br/>
        <div class="table-header">
            <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
         
                  <table  class="table table-striped dataex-html5-selectors">
                <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th>S.N.</th>
                    <th>Faculty/Class</th>
                    <th>Sem.</th>
                    <th>Reg. Num.</th>
                    <th>Name of Student</th>
                    <th>Total Fee</th>
                    <th>Balance</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php if(isset($data['student']) && $data['student']->count() > 0): ?>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $data['student']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="<?php echo e($student->id, false); ?>" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td><?php echo e($i, false); ?></td>
                                <td> <?php echo e(ViewHelper::getFacultyTitle( $student->faculty ), false); ?></td>
                                <td> <?php echo e(ViewHelper::getSemesterTitle( $student->semester ), false); ?></td>
                                <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>"><?php echo e($student->reg_no, false); ?></a></td>
                                <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>"> <?php echo e($student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></a></td>
                                <td>
                                    <?php echo e($student->fee_amount, false); ?>

                                </td>
                                <td>
                                    <?php echo e($student->balance, false); ?>

                                </td>
                                <td>
                                    <div class="btn btn-primary btn-sm action-buttons ">
                                        <a class="white" href="<?php echo e(route('account.fees.collection.view', ['id' => $student->id]), false); ?>">
                                            <i class="ace-icon fa fa-calculator bigger-130"></i>&nbsp;
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php ($i++); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                <tfoot>
                    <tr style="font-size: 14px; background: orangered;color: white;">
                        <td colspan="6" class="text-right">Total</td>
                        <td  class="align-right"><?php echo e($data['student']->sum('fee_amount'), false); ?></td>
                        <td  class="align-right"> <?php echo e($data['student']->sum('balance'), false); ?> </td>
                        <td class="hdidden-print"> </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <?php echo Form::close(); ?>

    </div>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/account/fees/balance/includes/table.blade.php ENDPATH**/ ?>