<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Notes List</h4>

        <!-- div.table-responsive -->
        <div class="table-responsive">

           <table  class="table table-striped dataex-html5-selectors">
                <thead>
                <tr>
                    <th width="5%">S.N.</th>
                    <th>Subject</th>
                    <th>Note Description</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['note']) && $data['note']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['note']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $note): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td><?php echo e($note->subject, false); ?></td>
                            <td><?php echo e($note->note, false); ?></td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/detail/includes/notes.blade.php ENDPATH**/ ?>