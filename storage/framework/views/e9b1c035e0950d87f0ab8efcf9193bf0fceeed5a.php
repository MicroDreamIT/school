<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-left">
        <a class="page_nav_li <?php echo request()->is('user')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('user'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detail</a>
        <?php if (\Entrust::ability('super-admin,admin', 'user-add')) : ?>
            <a class="page_nav_li <?php echo request()->is('user/add')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('user.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Create User</a>
        <?php endif; // Entrust::ability ?>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/user/includes/buttons.blade.php ENDPATH**/ ?>