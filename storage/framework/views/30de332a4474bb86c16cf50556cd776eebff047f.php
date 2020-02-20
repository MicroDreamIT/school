<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
        </div>
        <!-- div.table-responsive -->
        <div>
             <table  class="table table-striped dataex-html5-selectors">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Reg.Num</th>
                    <th>Staff Name</th>
                    <th>Designation</th>
                    <th>Book Taken</th>
                    <th>Eligible</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['staff']) && $data['staff']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['staff']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td><a href="<?php echo e(route($base_route.'.view', ['id' => $staff->member_id]), false); ?>"><?php echo e($staff->reg_no, false); ?></a></td>
                            <td><a href="<?php echo e(route($base_route.'.view', ['id' => $staff->member_id]), false); ?>"> <?php echo e($staff->first_name.' '.$staff->middle_name.' '. $staff->last_name, false); ?></a></td>
                            <td><?php echo e(ViewHelper::getDesignationId($staff->designation), false); ?></td>
                            <td> <?php echo e($staff->taken, false); ?></td>
                            <td> <?php echo e($staff->eligible, false); ?></td>
                            <td class="hidden-480 ">
                                <div class="btn-group">
                                    <span data-toggle="dropdown" class="btn btn-primary btn-sm <?php echo e($staff->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                        <?php echo e($staff->status == 'active'?"Active":"In Active", false); ?>

                                    </span>
                                </div>
                            </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="11">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/library/staff/includes/table.blade.php ENDPATH**/ ?>