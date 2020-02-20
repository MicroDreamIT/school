
    <h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Create <?php echo e($panel, false); ?></h4>
<!-- PAGE CONTENT BEGINS -->
    <?php echo Form::open(['route' => $base_route.'.store', 'method' => 'POST', 'class' => 'form-horizontal',
    'id' => 'validation-form', "enctype" => "multipart/form-data"]); ?>

        <?php echo $__env->make($view_path.'.includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="clearfix form-actions">
            <div class="col-md-offset-8 col-md-9">
                <button class="btn btn-info" type="submit">
                    <i class="fa fa-save bigger-110"></i>
                    Create
                </button>
            </div>
        </div>
        <div class="hr hr-24"></div>
    <?php echo Form::close(); ?>

    <div class="hr hr-18 dotted hr-double"></div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/route/add.blade.php ENDPATH**/ ?>