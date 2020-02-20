<!-- 'name', 'email', 'password', 'profile_image', 'email', 'contact_number', 'address','user_type', -->
<div class="tabbable">
    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
        <li class="active" style="margin-right:10px">
            <a data-toggle="tab" href="#registrationinfo" class="btn btn-warning btn-sm"><i class="fa fa-user bigger-110"></i> General Information</a>
        </li>
        <li style="margin-right:10px">
            <a data-toggle="tab" href="#academicInfo" class="btn btn-warning btn-sm"><i class="fa fa-certificate bigger-110"></i> Academic Info</a>
        </li style="margin-right:10px">
        <li class="">
            <a data-toggle="tab" href="#profileimage" class="btn btn-warning btn-sm"><i class="fa fa-image bigger-110"></i> Profile Images</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="registrationinfo" class="tab-pane active">
            <?php echo $__env->make('student.registration.includes.forms.generalinfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('student.registration.includes.forms.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div id="academicInfo" class="tab-pane">
            <?php echo $__env->make('student.registration.includes.forms.academicinfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div id="profileimage" class="tab-pane">
            <?php echo $__env->make('student.registration.includes.forms.profileimage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="space-4"></div>

    <div class="hr hr-24"></div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/student/registration/includes/form.blade.php ENDPATH**/ ?>