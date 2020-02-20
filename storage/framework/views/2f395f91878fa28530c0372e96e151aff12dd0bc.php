<div class="clearfix hidden-print" >
    <div class="align-right">
        <a class="page_nav_li <?php echo request()->is('certificate/issue')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('certificate.issue'), false); ?>"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i> Issue</a>
        <a class="page_nav_li <?php echo request()->is('certificate/attendance*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('certificate.attendance'), false); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Attendance</a>
        <a class="page_nav_li <?php echo request()->is('certificate/transfer*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('certificate.transfer'), false); ?>"><i class="fa fa-exchange" aria-hidden="true"></i> Transfer</a>
        <a class="page_nav_li <?php echo request()->is('certificate/bonafide*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('certificate.bonafide'), false); ?>"><i class="fa fa-user" aria-hidden="true"></i> Bonafide</a>
        <a class="page_nav_li <?php echo request()->is('certificate/course-completion*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('certificate.course-completion'), false); ?>"><i class="fa fa-line-chart" aria-hidden="true"></i> Course Completion</a>
        <a class="page_nav_li <?php echo request()->is('certificate/issue-history*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('certificate.issue-history'), false); ?>"><i class="fa fa-history" aria-hidden="true"></i> History</a>
        <a class="page_nav_li <?php echo request()->is('certificate/generate*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('certificate.generate'), false); ?>"><i class="fa fa-certificate" aria-hidden="true"></i> Custom</a>
        <a class="page_nav_li <?php echo request()->is('certificate/template*')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('certificate.template'), false); ?>"><i class="fa fa-magic" aria-hidden="true"></i> Template</a>
    </div>
</div>
<hr class="hr-4">
<?php /**PATH /home/viholddep/public_html/edu/resources/views/certificate/includes/buttons.blade.php ENDPATH**/ ?>