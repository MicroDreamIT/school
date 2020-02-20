<div class="table-responsive">
    <table class="table table-bordered table-striped">
    <thead class="thin-border-bottom">
    <tr>
        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>SN
        </th>
        <th><i class="ace-icon fa fa-calendar blue"></i>Year</th>
        <th><i class="ace-icon fa fa-calendar blue"></i>Month</th>
        <th><i class="ace-icon fa fa-calendar blue"></i>Day in Month</th>
        <th><i class="ace-icon fa fa-calendar blue"></i>Holiday</th>
        <th><i class="ace-icon fa fa-calendar blue"></i>Open Day</th>
    </tr>
    </thead>

    <tbody>

    <?php if(isset($data['attendance_booklet']) && $data['attendance_booklet']->count() > 0): ?>
        <?php ($i=1); ?>
        <?php $__currentLoopData = $data['attendance_booklet']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booklet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i, false); ?></td>
                <td><?php echo e(ViewHelper::getYearById($booklet->year), false); ?> </td>
                <td><?php echo e(ViewHelper::getMonthById($booklet->month), false); ?> </td>
                <td><?php echo e($booklet->day_in_month, false); ?> </td>
                <td><?php echo e($booklet->holiday, false); ?> </td>
                <td><?php echo e($booklet->open, false); ?> </td>
            </tr>
            <?php ($i++); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="center" colspan="6">
                <a class="green" href="<?php echo e(route('attendance.master'), false); ?>">More</a>
            </td>
        </tr>
    <?php else: ?>
        <tr>
            <td colspan="11">No data found.</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/attendance/booklet.blade.php ENDPATH**/ ?>