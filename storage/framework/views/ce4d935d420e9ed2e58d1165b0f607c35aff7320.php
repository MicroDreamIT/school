<div class="clearfix hidden-print ">
    <div class="easy-link-menu align-right">
        <a class="page_nav_li <?php echo request()->is('account/fee*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('account.fees'), false); ?>"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Student Fee</a>
        <a class="page_nav_li <?php echo request()->is('account/payroll*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('account.payroll.master.add'), false); ?>"><i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;Staff Payroll</a>
        <a class="page_nav_li <?php echo request()->is('account/transaction-head')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('account.transaction-head'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Ledger</a>
        <a class="page_nav_li <?php echo request()->is('account/transaction')?'btn-success':'btn-primary'; ?> btn-sm " href="<?php echo e(route('account.transaction'), false); ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Transactions</a>
        <a class="page_nav_li <?php echo request()->is('account/bank*')?'btn-success':'btn-primary'; ?> btn-sm" href="<?php echo e(route('account.bank'), false); ?>"><i class="fa fa-bank" aria-hidden="true"></i>&nbsp;Bank</a>
    </div>
    <hr class="hr-6">
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/account/includes/buttons.blade.php ENDPATH**/ ?>