<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-left">
        <a class="page_nav_li <?php echo request()->is('guardian')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('guardian'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detail</a>
        <a class="page_nav_li <?php echo request()->is('guardian/registration*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('guardian.registration'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Registration</a>
    </div>
    <hr class="hr-6 ">
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/guardian/includes/buttons.blade.php ENDPATH**/ ?>