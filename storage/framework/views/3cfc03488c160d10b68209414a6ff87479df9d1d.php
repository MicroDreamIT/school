<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i> Library Status List</h4>
        <div class="clearfix easy-link-menu">
            <span>
                <?php if($data['lib_member']): ?>
                    <a class="btn-primary btn-sm" href="<?php echo e(route('library.staff.view', ['id' => $data['lib_member']->member_id]), false); ?>">
                         <i class="fa fa-calculator" aria-hidden="true"></i> Library Status
                    </a>
                <?php endif; ?>
            </span>
        </div>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Staff Library Record list on table. Filter list using the search box as you wish.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered table-hover dynamic-table">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Reference No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Issued On</th>
                    <th>Due Date</th>
                    <th>Return Date</th>
                    <th>Day</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['books_history']) && $data['books_history']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['books_history']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books_history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td><?php echo e($books_history->book_code, false); ?> </td>
                            <td><?php echo e($books_history->title, false); ?> </td>
                            <td><?php echo e(ViewHelper::getBookCategoryById($books_history->categories), false); ?> </td>
                            <td><?php echo e(\Carbon\Carbon::parse($books_history->issued_on)->format('Y-m-d'), false); ?> </td>
                            <td><?php echo e(\Carbon\Carbon::parse($books_history->due_date)->format('Y-m-d'), false); ?> </td>
                            <?php if(!isset($books_history->return_date) && $books_history->due_date >= \Carbon\Carbon::now()->format('Y-m-d')): ?>
                                <td>
                                    <div class="label label-success label-lg ">
                                        <?php echo e(\Carbon\Carbon::parse($books_history->due_date)->diffForHumans(\Carbon\Carbon::now()), false); ?>

                                    </div>
                                </td>
                            <?php elseif(isset($books_history->return_date)): ?>
                                <td>
                                    <div class="label label-info label-lg ">
                                        <?php echo e(\Carbon\Carbon::parse($books_history->return_date)->format('Y-m-d'), false); ?><br>
                                    </div>
                                </td>
                            <?php else: ?>
                                <td>
                                    <div class="label label-danger label-lg ">
                                        <?php echo e(\Carbon\Carbon::parse($books_history->due_date)->diffForHumans(\Carbon\Carbon::now()), false); ?><br>
                                    </div>
                                </td>
                            <?php endif; ?>
                            <td>
                                <div class="label label-info label-lg ">
                                    <?php echo e((\Carbon\Carbon::parse($books_history->return_date)
                                    ->diffInDays(\Carbon\Carbon::parse($books_history->issued_on))), false); ?><br>
                                </div>
                            </td>

                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="10">Book Issued History Not Found.</td>
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php /**PATH /home/viholddep/public_html/edu/resources/views/staff/detail/includes/library.blade.php ENDPATH**/ ?>