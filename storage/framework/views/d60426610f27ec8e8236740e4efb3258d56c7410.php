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
            <i class="ace-icon fa fa-calendar blue"></i>Issued On
        </th>

        <th>
            <i class="ace-icon fa fa-calendar blue"></i>Due Date
        </th>

        <th>
            <i class="ace-icon fa fa-history blue"></i>Status
        </th>
    </tr>
    </thead>

    <tbody>

    <?php if(isset($data['book_issued']) && $data['book_issued']->count() > 0): ?>
        <?php ($i=1); ?>
        <?php $__currentLoopData = $data['book_issued']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookIssue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i, false); ?></td>
                <td>
                    <?php if($bookIssue->user_type == 1): ?>
                    <a href="<?php echo e(route('library.student.view', ['id' => $bookIssue->member_id]), false); ?>">
                        <?php echo e($bookIssue->reg_no, false); ?>

                        <span class="label label-info arrowed-right arrowed-in">Student</span>
                    </a>
                    <?php else: ?>
                        <a href="<?php echo e(route('library.staff.view', ['id' => $bookIssue->member_id]), false); ?>">
                            <?php echo e($bookIssue->reg_no, false); ?>

                            <span class="label label-success arrowed-right arrowed-in">Staff</span>
                        </a>
                        <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('library.book.view', ['id' => $bookIssue->bookmaster_id]), false); ?>">
                        <?php echo e($bookIssue->title, false); ?>

                    </a>
                </td>

                <td><?php echo e(\Carbon\Carbon::parse($bookIssue->issued_on)->format('Y-m-d'), false); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($bookIssue->due_date)->format('Y-m-d'), false); ?></td>
                <td>
                    <?php if($bookIssue->due_date >  Carbon\Carbon::now()): ?>
                        <div class="label label-primary label-sm arrowed-in arrowed-right arrowed">
                            <?php echo e(\Carbon\Carbon::parse($bookIssue->due_date)->diffForHumans(\Carbon\Carbon::now()), false); ?><br>
                        </div>
                    <?php else: ?>
                        <div class="label label-danger label-sm arrowed-in arrowed-right arrowed">
                            <?php echo e(\Carbon\Carbon::parse($bookIssue->due_date)->diffForHumans(\Carbon\Carbon::now()), false); ?><br>
                        </div>
                    <?php endif; ?>
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
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/library/bookissue.blade.php ENDPATH**/ ?>