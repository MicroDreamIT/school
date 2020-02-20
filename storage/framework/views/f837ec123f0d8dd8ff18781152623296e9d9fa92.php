<div class="clearfix hidden-print ">
    <div class="">
        <a class="page_nav_li <?php echo request()->is('attendance/master')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('attendance.master'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;List</a>
        <a class="page_nav_li <?php echo request()->is('attendance/master/add*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('attendance.master.add'), false); ?>"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>&nbsp;Add</a>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/master/includes/buttons.blade.php ENDPATH**/ ?>