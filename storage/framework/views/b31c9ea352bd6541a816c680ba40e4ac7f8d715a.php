<div class="clearfix hidden-print ">
    <div class=" ">
        <a class="page_nav_li <?php echo request()->is('attendance/subject')?'btn-success':'btn-primary'; ?>  btn-sm"  href="<?php echo e(route('attendance.subject'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Attendance Detail</a>
        <a class="page_nav_li <?php echo request()->is('attendance/subject/add')?'btn-success':'btn-primary'; ?>  btn-sm" href="<?php echo e(route('attendance.subject.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add / Edit <?php echo e($panel, false); ?></a>
        <a class="page_nav_li <?php echo request()->is('attendance/subject/alert')?'btn-success':'btn-primary'; ?>  btn-sm" href="<?php echo e(route('attendance.subject.alert'), false); ?>"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp; <?php echo e($panel, false); ?> Alert</a>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/subject/includes/buttons.blade.php ENDPATH**/ ?>