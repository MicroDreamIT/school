<div class="table-responsive">
    <table class="table table-bordered table-striped">
    <thead class="thin-border-bottom">
    <tr>
        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>SN
        </th>

        <th>
            <i class="ace-icon fa fa-caret-right blue"></i>Reg.No.
        </th>

        <th>
            <i class="ace-icon fa fa-book blue"></i>Book
        </th>

        <th>
            <i class="ace-icon fa fa-calendar blue"></i>Issueon
        </th>

        <th>
            <i class="ace-icon fa fa-calendar blue"></i>DueDate
        </th>

        <th>
            <i class="ace-icon fa fa-calendar blue"></i>DayOver
        </th>
    </tr>
    </thead>

    <tbody>

    <?php if(isset($data['book_return_over']) && $data['book_return_over']->count() > 0): ?>
        <?php ($i=1); ?>
        <?php $__currentLoopData = $data['book_return_over']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $return_over): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i, false); ?></td>
                <td>
                    <?php if($return_over->user_type == 1): ?>
                        <a href="<?php echo e(route('library.student.view', ['id' => $return_over->member_id]), false); ?>">
                            <?php echo e($return_over->reg_no, false); ?>

                            <span class="label label-info arrowed-right arrowed-in">Student</span>
                        </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('library.staff.view', ['id' => $return_over->member_id]), false); ?>">
                            <?php echo e($return_over->reg_no, false); ?>

                            <span class="label label-success arrowed-right arrowed-in">Staff</span>
                        </a>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('library.book.view', ['id' => $return_over->bookmaster_id]), false); ?>">
                        <?php echo e($return_over->title, false); ?>

                    </a>
                </td>

                <td><?php echo e(\Carbon\Carbon::parse($return_over->issued_on)->format('Y-m-d'), false); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($return_over->due_date)->format('Y-m-d'), false); ?></td>
                <td>
                    <div class="label label-danger label-lg ">
                        <?php echo e(\Carbon\Carbon::parse($return_over->due_date)->diffForHumans(\Carbon\Carbon::now()), false); ?>

                    </div>
                </td>
            </tr>
            <?php ($i++); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="center" colspan="6">
                <a class="green" href="<?php echo e(route('library.return-over'), false); ?>">More</a>
            </td>
        </tr>
    <?php else: ?>
        <tr>
            <td colspan="11">No data found.</td>
        </tr>
    <?php endif; ?>

    </tbody>
</table>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/library/returnover.blade.php ENDPATH**/ ?>