<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-left">
        <a class="page_nav_li <?php echo request()->is('info/notice')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.notice'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Detail</a>
        <a class="page_nav_li <?php echo request()->is('info/notice/add')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.notice.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Create Notice</a>

    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/info/notice/includes/buttons.blade.php ENDPATH**/ ?>