<div class="clearfix hidden-print " >
    <div class="align-right">
        <a class="page_nav_li <?php echo request()->is('hostel/resident*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('hostel.resident'), false); ?>"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Resident</a>
        <a class="page_nav_li <?php echo request()->is('hostel*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('hostel'), false); ?>"><i class="fa fa-bed" aria-hidden="true"></i> Hostel</a>
        <a class="page_nav_li <?php echo request()->is('hostel/food*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('hostel.food'), false); ?>"><i class="fa fa-spoon" aria-hidden="true"></i> Food & Meal</a>
    </div>
</div>
<hr class="hr-6">
<?php /**PATH /home/viholddep/public_html/edu/resources/views/hostel/includes/buttons.blade.php ENDPATH**/ ?>