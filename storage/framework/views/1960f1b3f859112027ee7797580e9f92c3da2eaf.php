<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Transport History</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Staff Transport  Record list on table. Filter list using the search box as you wish.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table id="" class="table table-striped table-bordered table-hover dynamic-table">
                <thead >
                <tr>
                    <th>S.N.</th>
                    <th>Year</th>
                    <th>Route</th>
                    <th>Vehicle</th>
                    <th>History</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['transport_history']) && $data['transport_history']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['transport_history']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td><?php echo e(ViewHelper::getYearById($history->years_id), false); ?> </td>
                            <td><?php echo e(ViewHelper::getRouteNameById($history->routes_id), false); ?> </td>
                            <td><?php echo e(ViewHelper::getVehicleById($history->vehicles_id), false); ?></td>
                            <td>
                                <label class="label label-primary"><?php echo e($history->history_type, false); ?></label>
                            </td>
                            <td><?php echo e(\Carbon\Carbon::parse($history->created_at)->format('Y-m-d'), false); ?> </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="11">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/staff/detail/includes/transport.blade.php ENDPATH**/ ?>