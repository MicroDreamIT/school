<div class="clearfix hidden-print ">
    <div class=" ">
        <a class="page_nav_li <?php echo request()->is('attendance/student')?'btn-success':'btn-primary'; ?>  btn-sm"  href="<?php echo e(route('attendance.student'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Attendance Detail</a>
        <a class="page_nav_li <?php echo request()->is('attendance/student/add')?'btn-success':'btn-primary'; ?>  btn-sm" href="<?php echo e(route('attendance.student.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add / Edit <?php echo e($panel, false); ?></a>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/student/includes/buttons.blade.php ENDPATH**/ ?>