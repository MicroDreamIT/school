<?php if (\Entrust::ability('super-admin,admin', 'user-add, role-add')) : ?>
    <div class="clearfix hidden-print ">
        <div class="easy-link-menu align-right">
            <a class="<?php echo request()->is('user*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('user'), false); ?>"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;User</a>
            <a class="<?php echo request()->is('role*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('role'), false); ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Role Accessibility</a>
        </div>
    </div>
    <hr class="hr-6">
<?php endif; // Entrust::ability ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/user/includes/commanbuttons.blade.php ENDPATH**/ ?>