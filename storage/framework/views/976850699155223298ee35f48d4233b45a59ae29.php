<div class="clearfix hidden-print">
    <div class="align-left">
        <a class="page_nav_li <?php echo request()->is('hostel/food')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('hostel.food'), false); ?>"><i class="fa fa-spoon" aria-hidden="true"></i> Food & Meal</a>
        <a class="page_nav_li <?php echo request()->is('hostel/food/eating-time*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('hostel.food.eating-time'), false); ?>"><i class="fa fa-history" aria-hidden="true"></i> Eating Time</a>
        <a class="page_nav_li <?php echo request()->is('hostel/food/category*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('hostel.food.category'), false); ?>"><i class="fa fa-list-ol" aria-hidden="true"></i> Food Category</a>
        <a class="page_nav_li <?php echo request()->is('hostel/food/item*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('hostel.food.item'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i> Food Item</a>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/hostel/food/includes/buttons.blade.php ENDPATH**/ ?>