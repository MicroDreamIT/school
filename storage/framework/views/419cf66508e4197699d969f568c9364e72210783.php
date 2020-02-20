<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Notes List</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Staff Notes Record list on table. Filter list using the search box as you wish.
        </div>
    <!-- div.table-responsive -->
        <div>
            <table id="" class="table table-striped table-bordered table-hover dynamic-table">
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
                        <td colspan="7" class="align-left">No notes data found.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/staff/detail/includes/notes.blade.php ENDPATH**/ ?>