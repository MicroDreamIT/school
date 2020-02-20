<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="page_nav_li <?php echo request()->is('staff')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('staff'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Staff Detail</a>
        <a class="page_nav_li <?php echo request()->is('staff/add*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('staff.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Registration</a>
        <a class="page_nav_li <?php echo request()->is('staff/import*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('staff.import'), false); ?>"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Bulk Registration</a>
        <a class="page_nav_li <?php echo request()->is('staff/document*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('staff.document'), false); ?>"><i class="fa fa-files-o" aria-hidden="true"></i>&nbsp;Documents</a>
        <a class="page_nav_li <?php echo request()->is('staff/note*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('staff.note'), false); ?>"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;Notes</a>
        <a class="page_nav_li <?php echo request()->is('account/payroll/balance')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('account.payroll.balance'), false); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;Payroll</a>
        <a class="page_nav_li <?php echo request()->is('library/staff*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('library.staff'), false); ?>"><i class="fa fa-book" aria-hidden="true"></i> Library</a>
        <a class="page_nav_li <?php echo request()->is('attendance/staff*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('attendance.staff'), false); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Attendance</a>
        <a class="page_nav_li <?php echo request()->is('staff/designation*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('staff.designation'), false); ?>"><i class="fa fa-star-half-full" aria-hidden="true"></i> Designation</a>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/staff/includes/buttons.blade.php ENDPATH**/ ?>