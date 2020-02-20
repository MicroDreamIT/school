<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-left">
        <a class="<?php echo request()->is('student')?'btn-success':'btn-primary'; ?> btn-sm page_nav_li" href="<?php echo e(route('student'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detail</a>
        <a class="<?php echo request()->is('student/registration*')?'btn-success':'btn-primary'; ?> btn-sm page_nav_li" href="<?php echo e(route('student.registration'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Registration</a>
        <a class="page_nav_li <?php echo request()->is('student/import*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('student.import'), false); ?>"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;Bulk Registration</a>
        <a class="page_nav_li <?php echo request()->is('student/transfer*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('student.transfer'), false); ?>"><i class="fa fa-exchange" aria-hidden="true"></i>&nbsp;Transfer</a>
        <a class="page_nav_li <?php echo request()->is('student/document*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('student.document'), false); ?>"><i class="fa fa-files-o" aria-hidden="true"></i>&nbsp;Documents</a>
        <a class="page_nav_li <?php echo request()->is('student/note*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('student.note'), false); ?>"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;Notes</a>
        <a class="page_nav_li <?php echo request()->is('account/fees/balance')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('account.fees.balance'), false); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;Balance Fees</a>
        <a class="page_nav_li <?php echo request()->is('library/student*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('library.student'), false); ?>"><i class="fa fa-calculator" aria-hidden="true"></i> Library</a>
        <a class="page_nav_li <?php echo request()->is('attendance/student*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('attendance.student'), false); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Attendance</a>
    </div>
    <hr class="hr-6 ">
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/student/includes/buttons.blade.php ENDPATH**/ ?>