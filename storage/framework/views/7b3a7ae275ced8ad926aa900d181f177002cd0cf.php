<div class="clearfix hidden-print ">
    <div class=" ">
        <a class="<?php echo request()->is('attendance/staff')?'btn-success':'btn-primary'; ?>  btn-sm"  href="<?php echo e(route('attendance.staff'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Attendance Detail</a>
        <a class="<?php echo request()->is('attendance/staff/add')?'btn-success':'btn-primary'; ?>  btn-sm" href="<?php echo e(route('attendance.staff.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add / Edit <?php echo e($panel, false); ?></a>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/staff/includes/buttons.blade.php ENDPATH**/ ?>