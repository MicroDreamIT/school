<div class="table-responsive">
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>S.N.</th>
            <th>Reg.Num</th>
            <th>Staff Name</th>
            <th>Designation</th>
            <th>DateofBirth</th>
            
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data['staff_birthday']) && $data['staff_birthday']->count() > 0): ?>
            <?php ($i=1); ?>
            <?php $__currentLoopData = $data['staff_birthday']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i, false); ?></td>
                    <td><a href="<?php echo e(route('staff.view', ['id' => $staff->id]), false); ?>"><?php echo e($staff->reg_no, false); ?></a></td>
                    <td><a href="<?php echo e(route('staff.view', ['id' => $staff->id]), false); ?>"> <?php echo e($staff->first_name.' '.$staff->middle_name.' '. $staff->last_name, false); ?></a></td>
                    <td><?php echo e(ViewHelper::getDesignationId($staff->designation), false); ?></td>
                    <td><?php echo e(\Carbon\Carbon::parse($staff->date_of_birth)->format('Y-m-d'), false); ?></td>
                    
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
<?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/birthday/staff.blade.php ENDPATH**/ ?>