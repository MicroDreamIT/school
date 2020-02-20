<div class="clearfix hidden-print " >
    <div class="easy-link-menu align-left">
        <a class="<?php echo request()->is('user-student/library')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('user-student.library'), false); ?>"><i class="fa fa-history" aria-hidden="true"></i>Library History</a>
        <a class="<?php echo request()->is('user-student/library/book-list*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('user-student.library.book-list'), false); ?>"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Book Request</a>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/library/includes/buttons.blade.php ENDPATH**/ ?>