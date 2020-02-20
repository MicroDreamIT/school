<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Document List</h4>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table  class="table table-striped dataex-html5-selectors">
                <thead>
                <tr >
                    <th width="5%">S.N.</th>
                    <th>Document With Link</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['document']) && $data['document']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['document']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td class="text-left">
                                <a href="<?php echo e(asset('documents'.DIRECTORY_SEPARATOR.'student'.DIRECTORY_SEPARATOR.ViewHelper::getStudentById( $document->member_id ).DIRECTORY_SEPARATOR.$document->file), false); ?>" target="_blank">
                                    <i class="ace-icon fa fa-download bigger-120"></i> &nbsp;<?php echo e($document->title, false); ?>

                                </a>
                            </td>
                            <td class="text-left"><?php echo e($document->description, false); ?></td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div><!-- /.row --><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/detail/includes/documents.blade.php ENDPATH**/ ?>