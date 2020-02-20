<div class="clearfix hidden-print " >
    <div class="easy-link-menu align-right">
        <a class="page_nav_li <?php echo request()->is('report/student*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('report.student'), false); ?>"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Student</a>
        <a class="page_nav_li <?php echo request()->is('report/staff*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('report.staff'), false); ?>"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Staff</a>

    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/report/includes/buttons.blade.php ENDPATH**/ ?>