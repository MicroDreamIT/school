<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-right">
        <a class="page_nav_li <?php echo request()->is('info/notice*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.notice'), false); ?>"><i class="fa fa-files-o" aria-hidden="true"></i>&nbsp;Notice</a>
        <a class="page_nav_li <?php echo request()->is('info/smsemail*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('info.smsemail'), false); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Sms/Email</a>

    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/info/includes/buttons.blade.php ENDPATH**/ ?>