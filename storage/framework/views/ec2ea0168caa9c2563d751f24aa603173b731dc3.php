<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Staffs List</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            Staffs  Record list on table. Filter Staffs using the filter.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
          <table  class="table table-striped dataex-html5-selectors">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Reg. Num.</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                    <th>Contact Num.</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['staff']) && $data['staff']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['staff']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td><a href="<?php echo e(route('staff.view', ['id' => $staff->id]), false); ?>" target="_blank"><?php echo e($staff->reg_no, false); ?></a></td>
                            <td><a href="<?php echo e(route('staff.view', ['id' => $staff->id]), false); ?>" target="_blank"> <?php echo e($staff->first_name.' '.$staff->middle_name.' '. $staff->last_name, false); ?></a></td>
                            <td><?php echo e(ViewHelper::getDesignationId($staff->designation), false); ?></td>
                            <td><?php echo e($staff->qualification, false); ?></td>
                            <td><div class="label label-info arrowed"><?php echo e($staff->mobile_1, false); ?> </div></td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($staff->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                        <?php echo e($staff->status == 'active'?"Active":"In Active", false); ?>

                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn btn-primary btn-sm action-buttons ">
                                    <a class="white" href="<?php echo e(route($base_route.'.view', ['id' => $staff->id]), false); ?>" target="_blank">
                                        <i class="ace-icon fa fa-calculator bigger-130"></i>&nbsp;
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="11">No Staffs data found. Please Filter Staffs to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/account/payroll/payment/includes/table.blade.php ENDPATH**/ ?>