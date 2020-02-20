<!-- 'name', 'email', 'password', 'profile_image', 'email', 'contact_number', 'address','user_type', -->
<div class="tabbable">
    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
        <li class="active">
            <a data-toggle="tab" href="#registrationinfo" class="btn-primary btn-sm"><i class="fa fa-user bigger-110"></i> General Information</a>
        </li>
      
    </ul>

    <div class="tab-content">
        <div id="registrationinfo" class="tab-pane active">
            <?php echo $__env->make('student.public-registration.includes.forms.generalinfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('student.public-registration.includes.forms.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        
    </div>

    <div class="space-4"></div>

    <div class="hr hr-24"></div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/student/public-registration/includes/form.blade.php ENDPATH**/ ?>