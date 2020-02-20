<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-left">
        <a class="page_nav_li <?php echo request()->is('info/smsemail')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.smsemail'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detail</a>
        <a class="page_nav_li <?php echo request()->is('info/smsemail/create')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.smsemail.create'), false); ?>"><i class="fa fa-group" aria-hidden="true"></i>&nbsp;Group Message</a>
        <a class="page_nav_li <?php echo request()->is('info/smsemail/student-guardian')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.smsemail.student-guardian'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Student & Guardian</a>
        <a class="page_nav_li <?php echo request()->is('info/smsemail/staff')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.smsemail.staff'), false); ?>"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Staff</a>
        <a class="page_nav_li <?php echo request()->is('info/smsemail/individual')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.smsemail.individual'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Individual</a>
        

    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/info/smsemail/includes/buttons.blade.php ENDPATH**/ ?>