<div class="table-responsive">
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>S.N.</th>
            <th>Faculty/Class</th>
            <th>Sem.</th>
            <th>Reg.Num</th>
            <th>Student Name</th>
            <th>DateofBirth</th>
            
        </tr>
        </thead>
        <tbody>
        <?php if(isset($data['student_birthday']) && $data['student_birthday']->count() > 0): ?>
            <?php ($i=1); ?>
            <?php $__currentLoopData = $data['student_birthday']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i, false); ?></td>
                    <td> <?php echo e(ViewHelper::getFacultyTitle( $student->faculty ), false); ?></td>
                    <td> <?php echo e(ViewHelper::getSemesterTitle( $student->semester ), false); ?></td>
                    
                    <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>"><?php echo e($student->reg_no, false); ?></a></td>
                    <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>"> <?php echo e($student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></a></td>
                    <td><?php echo e(\Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d'), false); ?></td>
                    
                </tr>
                <?php ($i++); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr>
                <td colspan="7">No Birthday data found.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/birthday/student.blade.php ENDPATH**/ ?>