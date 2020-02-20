<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="page_nav_li <?php echo request()->is('library/book')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('library.book'), false); ?>"><i class="fa fa-book main_nav_li" aria-hidden="true"></i>&nbsp;Book Detail</a>

        <a class="page_nav_li <?php echo request()->is('library/book/add')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('library.book.add'), false); ?>"><i class="fa fa-plus main_nav_li" aria-hidden="true"></i>&nbsp;New Book</a>
        <a class="page_nav_li <?php echo request()->is('library/book/import')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('library.book.import'), false); ?>"><i class="fa fa-upload main_nav_li" aria-hidden="true"></i>&nbsp;Bulk Import</a>

        <a class="page_nav_li <?php echo request()->is('library/book/category')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('library.book.category'), false); ?>"><i class="fa fa-pie-chart main_nav_li" aria-hidden="true"></i>&nbsp;Book Category</a>
    </div>
</div>
<hr class="hr-4"><?php /**PATH /home/viholddep/public_html/edu/resources/views/library/book/includes/buttons.blade.php ENDPATH**/ ?>