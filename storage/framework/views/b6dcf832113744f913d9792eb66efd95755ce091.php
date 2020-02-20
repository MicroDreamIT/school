<?php if(session()->has('message_warning')): ?>

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="ace-icon fa fa-warning"></i>
        <?php echo e(session()->get('message_warning'), false); ?>

    </div>

<?php endif; ?>

<?php if(session()->has('message_success')): ?>

    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="ace-icon fa fa-hand-o-right"></i>
        <?php echo e(session()->get('message_success'), false); ?>

    </div>

<?php endif; ?>

<?php if(session()->has('message_danger')): ?>

    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <i class="ace-icon fa fa-hand-o-right"></i>
        <?php echo e(session()->get('message_danger'), false); ?>

    </div>

<?php endif; ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/includes/flash_messages.blade.php ENDPATH**/ ?>