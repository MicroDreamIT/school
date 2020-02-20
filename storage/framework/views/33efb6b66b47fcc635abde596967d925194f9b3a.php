<div class="clearfix hidden-print ">
    <div class="easy-link-menu">
        <a class="page_nav_li <?php echo request()->is('account/payroll')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('account.payroll'), false); ?>"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;Pay History</a>
        <a class="page_nav_li <?php echo request()->is('account/payroll/master')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('account.payroll.master'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Payroll Detail</a>
        <a class="page_nav_li <?php echo request()->is('account/payroll/master/add')?'btn-success':'btn-primary'; ?> btn-sm" class="main_nav_li" href="<?php echo e(route('account.payroll.master.add'), false); ?>"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Payroll</a>
        <a class="page_nav_li <?php echo request()->is('account/salary/payment*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('account.salary.payment'), false); ?>"><i class="fa fa-calculator" aria-hidden="true"></i>&nbsp;Pay Salary</a>
        <a class="page_nav_li <?php echo request()->is('account/payroll/balance')?'btn-success':'btn-warning'; ?> btn-sm" href="<?php echo e(route('account.payroll.balance'), false); ?>"><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Balance Salary</a>
        <a class="page_nav_li <?php echo request()->is('account/payroll/head')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('account.payroll.head'), false); ?>"><i class="fa fa-header" aria-hidden="true"></i>&nbsp;Payroll Head</a>
    </div>
</div>
<hr class="hr-6"><?php /**PATH /home/viholddep/public_html/edu/resources/views/account/payroll/includes/buttons.blade.php ENDPATH**/ ?>