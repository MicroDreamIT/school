<h4 class="header large lighter blue"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?></h4>
<div class="col-sm-3"></div>
<!-- div.table-responsive -->
<table id="studentsTable" class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>S.N.</th>
            <th> </th>
            <th>Reg.Num</th>
            <th>Student Name</th>
            <th>
                
                <?php $__currentLoopData = $data['attendance_status']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <label class="pos-rel">
                        <?php echo Form::radio('mark-all', $status->id, false, ['class' => 'ace','id' => 'mark-'.$status->id]); ?>

                        <span class="lbl"></span> <span class="<?php echo e($status->display_class, false); ?> btn-sm"><?php echo e($status->title, false); ?> All</span>
                    </label>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody id="student_wrapper">

    </tbody>
</table>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/subject/includes/student.blade.php ENDPATH**/ ?>