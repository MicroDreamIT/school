<div class="clearfix hidden-print " >
    <div class="easy-link-menu align-right">
        <a class="page_nav_li <?php echo request()->is('transport/user*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('transport.user'), false); ?>"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;User</a>
        <a class="page_nav_li <?php echo request()->is('transport/route*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('transport.route'), false); ?>"><i class="fa fa-chain" aria-hidden="true"></i>&nbsp;Route</a>
        <a class="page_nav_li <?php echo request()->is('transport/vehicle*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('transport.vehicle'), false); ?>"><i class="fa fa-bus" aria-hidden="true"></i>&nbsp;Vehicle</a>

    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/includes/buttons.blade.php ENDPATH**/ ?>