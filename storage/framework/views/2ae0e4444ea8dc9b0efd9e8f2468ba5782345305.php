<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="page_nav_li <?php echo request()->is('transport/user')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('transport.user'), false); ?>"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Detail</a>
        <a class="page_nav_li <?php echo request()->is('transport/user/add')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('transport.user.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Registration</a>
        <a class="page_nav_li <?php echo request()->is('transport/user/history')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('transport.user.history'), false); ?>"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;History</a>
    </div>
</div>
<hr class="hr-4"><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/user/includes/buttons.blade.php ENDPATH**/ ?>