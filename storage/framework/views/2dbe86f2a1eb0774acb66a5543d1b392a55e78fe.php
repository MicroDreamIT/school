<!-- 'name', 'email', 'password', 'profile_image', 'email', 'contact_number', 'address','user_type', -->
<div class="tabbable">
    <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#general"><i class="fa fa-list-alt bigger-110"></i> General Information & Branding</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " data-toggle="tab" href="#print"><i class="fa fa-print bigger-110"></i> Print</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " data-toggle="tab" href="#social"><i class="fa fa-facebook bigger-110"></i> Social Media</a>
        </li>
        
    </ul>

    <div class="tab-content">
        <div id="general" class="tab-pane active">
            <?php echo $__env->make('setting.general.includes.forms.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('setting.general.includes.forms.timezone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div id="print" class="tab-pane">
            <?php echo $__env->make('setting.general.includes.forms.print', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div id="social" class="tab-pane">
            <?php echo $__env->make('setting.general.includes.forms.social', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
    </div>

    <div class="hr hr-24"></div>
</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/setting/general/includes/form.blade.php ENDPATH**/ ?>