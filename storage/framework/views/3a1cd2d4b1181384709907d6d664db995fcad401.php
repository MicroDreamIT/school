<div class="widget-box transparent">
    <div class="widget-header widget-header-flat">
        <h4 class="widget-title lighter">
            <i class="ace-icon fa fa-star orange"></i>
            Overal Summary
        </h4>

        <div class="widget-toolbar">
            <a href="#" data-action="collapse">
                <i class="ace-icon fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="widget-body">
        <div class="widget-main no-padding">
            <table class="table table-bordered table-striped">
                <thead class="thin-border-bottom">
                <tr>
                    <th colspan="2"> <i class="ace-icon fa fa-users green"></i>Student Status
                    </th>
                </tr>
                </thead>

                <tbody>
                <?php if(isset($data['student_active_status']) && $data['student_active_status']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['student_active_status']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($student_count->status == 'active'?"Active":"In Active", false); ?></td>
                            <td>
                                <b><?php echo e($student_count->total, false); ?></b>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><b class="blue">Total Student:</b></td>

                        <td>
                            <b class="green"><?php echo e($data['academic_status_count']->sum('total'), false); ?></b>
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="11">No data found.</td>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>

            <table class="table table-bordered table-striped">
                <thead class="thin-border-bottom">
                <tr>
                    <th colspan="2"> <i class="ace-icon fa fa-users blue"></i>Academic Status
                    </th>
                </tr>
                </thead>

                <tbody>
                <?php if(isset($data['academic_status_count']) && $data['academic_status_count']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['academic_status_count']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(ViewHelper::getAcademicStatus($student_count->academic_status), false); ?></td>

                            <td>
                                <b><?php echo e($student_count->total, false); ?></b>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><b class="blue">Total Student:</b></td>

                        <td>
                            <b class="green"><?php echo e($data['academic_status_count']->sum('total'), false); ?></b>
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="11">No data found.</td>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
    <hr class="hr-double hr-8">
    <div class="widget-body">
        <div class="widget-main no-padding">
            <table class="table table-bordered table-striped">
                <thead class="thin-border-bottom">
                <tr>
                    <th colspan="2"> <i class="ace-icon fa fa-user-secret green"></i>Staff Status
                    </th>
                </tr>
                </thead>

                <tbody>
                <?php if(isset($data['staff_status']) && $data['staff_status']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['staff_status']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($staff_count->status == 'active'?"Active":"In Active", false); ?></td>
                            <td>
                                <b><?php echo e($staff_count->total, false); ?></b>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><b class="blue">Total Staff:</b></td>

                        <td>
                            <b class="green"><?php echo e($data['staff_status']->sum('total'), false); ?></b>
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="11">No data found.</td>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
    <hr class="hr-double hr-8">
    <div class="widget-body">
        <div class="widget-main no-padding">
            <table class="table table-bordered table-striped">
                <thead class="thin-border-bottom">
                <tr>
                    <th colspan="2"> <i class="ace-icon fa fa-book green"></i>Book Status
                    </th>
                </tr>
                </thead>

                <tbody>
                <?php if(isset($data['books_status']) && $data['books_status']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['books_status']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book_count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(ViewHelper::getBookStatusById($book_count->book_status), false); ?></td>
                            <td>
                                <b><?php echo e($book_count->total, false); ?></b>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><b class="blue">Total Book:</b></td>

                        <td>
                            <b class="green"><?php echo e($data['books_status']->sum('total'), false); ?></b>
                        </td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="11">No data found.</td>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
    <hr class="hr-double hr-8">
    
</div><!-- /.widget-box --><?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/summary.blade.php ENDPATH**/ ?>