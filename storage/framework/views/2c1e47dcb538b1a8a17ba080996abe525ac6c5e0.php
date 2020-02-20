<?php if($data['notice_disaplay'] && $data['notice_disaplay']->count() >0): ?>
    <?php $__currentLoopData = $data['notice_disaplay']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <h3><?php echo e($notice->title, false); ?></h3>
            <hr class="hr-2">
            <?php echo $notice->message; ?>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/dashboard/includes/notice.blade.php ENDPATH**/ ?>