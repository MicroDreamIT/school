<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><i class="ace-icon fa fa-warning"></i> Warning !</strong>
        Some thing is wrong, Please check.
        <hr class="hr-2">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error, false); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

<?php endif; ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/includes/validation_error_messages.blade.php ENDPATH**/ ?>