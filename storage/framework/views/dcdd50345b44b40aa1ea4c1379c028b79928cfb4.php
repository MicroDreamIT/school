<div class="clearfix hidden-print " >
    <div class="align-left">
        <a class="page_nav_li <?php echo request()->is('hostel')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('hostel'), false); ?>"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Detail</a>
        <a class="page_nav_li <?php echo request()->is('hostel/add')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('hostel.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i> Add Hostel</a>
        <a class="page_nav_li <?php echo request()->is('hostel/room-type*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('hostel.room-type'), false); ?>"><i class="fa fa-th-list" aria-hidden="true"></i> RoomType</a>
        <a class="page_nav_li <?php echo request()->is('bed-status*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('bed-status'), false); ?>"><i class="fa fa-list-alt" aria-hidden="true"></i> Bed Status</a>

    </div>
</div>
<hr class="hr-4"><?php /**PATH /home/viholddep/public_html/edu/resources/views/hostel/hostel/includes/buttons.blade.php ENDPATH**/ ?>