<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="page_nav_li <?php echo request()->is('library/member')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('library.member'), false); ?>"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Member Detail</a>
        <a class="page_nav_li <?php echo request()->is('library/member/add')?'btn-success':'btn-primary'; ?> btn-sm main_nav_li"  href="<?php echo e(route('library.member.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Member</a>
    </div>
</div>
<hr class="hr-4"><?php /**PATH /home/viholddep/public_html/edu/resources/views/library/member/includes/buttons.blade.php ENDPATH**/ ?>