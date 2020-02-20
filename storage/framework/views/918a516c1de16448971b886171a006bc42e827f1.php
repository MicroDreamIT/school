<h4 class="header large lighter blue"><i class="ace-icon glyphicon glyphicon-plus"></i>Profile Pictures</h4>
<div class="row">
    <?php echo Form::label('student_main_image', 'Student Profile Picture', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::file('student_main_image', ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'student_main_image'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
 <div class="col-md-4 text-center">
    <?php if(isset($data['row'])): ?>
        <?php if($data['row']->student_image): ?>
            <img id="avatar"  src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'studentProfile'.DIRECTORY_SEPARATOR.$data['row']->student_image), false); ?>" class="img-responsive" width="100px">
        <?php endif; ?>
    <?php else: ?>
        <img id="" class="img-responsive" alt="Avatar" src="<?php echo e(asset('assets/images/avatars/profile-pic.jpg'), false); ?>" width="100px">
    <?php endif; ?>
</div>
</div>
<br/>
<hr/>
<br/>
<div class="row">
    <?php echo Form::label('student_signature_main_image', 'Student Signature', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::file('student_signature_main_image', ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'student_signature_main_image'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-md-4 text-center">

    <?php if(isset($data['row'])): ?>
        <?php if($data['row']->student_signature): ?>
            <img id="avatar"  src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'studentProfile'.DIRECTORY_SEPARATOR.$data['row']->student_signature), false); ?>" class="img-responsive" width="100px">
        <?php endif; ?>
    <?php else: ?>
        <img id="" class="img-responsive" alt="Avatar" src="<?php echo e(asset('assets/images/avatars/profile-pic.jpg'), false); ?>" width="100px">
    <?php endif; ?>
</div>
</div>
<br/>
<hr/>
<br/>
<div class="row">
    <?php echo Form::label('father_main_image', 'Father Picture', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::file('father_main_image', ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'father_main_image'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-md-4 text-center">
    <?php if(isset($data['row'])): ?>
        <?php if($data['row']->father_image): ?>
            <img id="avatar"  src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['row']->father_image), false); ?>" class="img-responsive" width="100px">
        <?php endif; ?>
    <?php else: ?>
        <img id="" class="img-responsive" alt="Avatar" src="<?php echo e(asset('assets/images/avatars/profile-pic.jpg'), false); ?>" width="100px">
    <?php endif; ?>
</div>
</div>
<br/>
<hr/>
<br/>
<div class="row">
    <?php echo Form::label('mother_main_image', 'Mother Picture', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::file('mother_main_image', ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'mother_main_image'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-md-4 text-center">
    <?php if(isset($data['row'])): ?>
        <?php if($data['row']->mother_image): ?>
            <img id="avatar"  src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['row']->mother_image), false); ?>" class="img-responsive" width="100px">
        <?php endif; ?>
    <?php else: ?>
        <img id="" class="img-responsive" alt="Avatar" src="<?php echo e(asset('assets/images/avatars/profile-pic.jpg'), false); ?>" width="100px">
    <?php endif; ?>
</div>
</div>
<br/>
<hr/>
<br/>
<div class="row">
    <?php echo Form::label('guardian_main_image', 'Guardian Picture', ['class' => 'col-md-2 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::file('guardian_main_image', ["class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'guardian_main_image'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-md-4 text-center">
    <?php if(isset($data['row'])): ?>
        <?php if($data['row']->guardian_image): ?>
            <img id="avatar"  src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'parents'.DIRECTORY_SEPARATOR.$data['row']->guardian_image), false); ?>" class="img-responsive" width="100px">
        <?php endif; ?>
    <?php else: ?>
        <img id="" class="img-responsive" alt="Avatar" src="<?php echo e(asset('assets/images/avatars/profile-pic.jpg'), false); ?>" width="100px">
    <?php endif; ?>
</div>
</div>
<br/>
<br/><?php /**PATH /home/viholddep/public_html/edu/resources/views/student/registration/includes/forms/profileimage.blade.php ENDPATH**/ ?>