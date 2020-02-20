<div class="clearfix hidden-print " >
    <div class="easy-link-menu align-right">
        <a class="page_nav_li <?php echo request()->is('library/book*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('library.book'), false); ?>"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Book Detail</a>
        <a class="page_nav_li <?php echo request()->is('library/issue-history*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('library.issue-history'), false); ?>"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;Issue History</a>
        <a class="page_nav_li <?php echo request()->is('library/member*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('library.member'), false); ?>"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Membership</a>
        <a class="page_nav_li <?php echo request()->is('library/student*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('library.student'), false); ?>"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Students Member</a>
        <a class="page_nav_li <?php echo request()->is('library/staff*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('library.staff'), false); ?>"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Staffs Member</a>
        <a class="page_nav_li <?php echo request()->is('library/return-over')?'btn-success':'btn-warning'; ?> btn-sm " href="<?php echo e(route('library.return-over'), false); ?>"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;  Return Period Over&nbsp;</a>
    </div>
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/library/includes/buttons.blade.php ENDPATH**/ ?>