<div class="tabbable">
    <ul class="nav nav-tabs  padding-18 hidden-print ">
        <li class="active">
            <a data-toggle="tab" class="btn btn-primary btn-sm m-1" href="#regular-attendance">
                <i class="green ace-icon fa fa-calendar bigger-140"></i>
                Regular Attendance
            </a>
        </li>

        <li>
            <a data-toggle="tab" class="btn btn-primary btn-sm m-1" href="#subject-attendance">
                <i class="blue ace-icon fa fa-calendar bigger-140"></i>
                Subject Wise Attendance
            </a>
        </li>

    </ul>

    <div class="tab-content no-border padding-24">
        <div id="regular-attendance" class="tab-pane in active">
            <?php echo $__env->make($view_path.'.attendance.includes.attendance.regular-attendance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!-- /#home -->

        <div id="subject-attendance" class="tab-pane">
            <?php echo $__env->make($view_path.'.attendance.includes.attendance.subject-attendance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!-- /#attendance -->
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/attendance/includes/attendance.blade.php ENDPATH**/ ?>