<div class="form-horizontal">
    <div class="row">
        <div class="col-md-11">
            <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Transport History List</h4>
            <div class="clearfix">

                    <span class="pull-right tableTools-container"></span>
            </div>
            <div class="table-header">
                <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
            </div>
            <!-- div.table-responsive -->
            <div class="table-responsive">
                <table  class="table table-striped dataex-html5-selectors">
                    <thead >
                        <tr>
                            <th>S.N.</th>
                            <th>Year</th>
                            <th>Route</th>
                            <th>Vehicle</th>
                            <th>Type</th>
                            <th>Reg.No. </th>
                            <th>Name</th>
                            <th>History</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($data['history']) && $data['history']->count() > 0): ?>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $data['history']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i, false); ?></td>
                                <td><?php echo e(ViewHelper::getYearById($history->years_id), false); ?> </td>
                                <td><?php echo e(ViewHelper::getRouteNameById($history->routes_id), false); ?> </td>
                                <td><?php echo e(ViewHelper::getVehicleById($history->vehicles_id), false); ?></td>
                                <td><?php echo e($history->user_type==1?"Student":"Staff", false); ?></td>
                                <td>
                                    <?php if($history->user_type == 1): ?>
                                        <a href="<?php echo e(route('student.view', ['id' => $history->member_id]), false); ?>">
                                            <?php echo e(ViewHelper::getStudentById($history->member_id), false); ?>

                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('staff.view', ['id' => $history->member_id]), false); ?>">
                                            <?php echo e(ViewHelper::getStaffById($history->member_id), false); ?>

                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($history->user_type==1): ?>
                                        <?php echo e(ViewHelper::getStudentNameById($history->member_id), false); ?>

                                    <?php else: ?>
                                        <?php echo e(ViewHelper::getStaffNameById($history->member_id), false); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <label class="label label-primary"><?php echo e($history->history_type, false); ?></label>
                                </td>
                                <td><?php echo e(\Carbon\Carbon::parse($history->created_at)->format('Y-m-d'), false); ?> </td>
                            </tr>
                            <?php ($i++); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="12">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/user/history/includes/table.blade.php ENDPATH**/ ?>