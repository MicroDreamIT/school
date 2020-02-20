<div class="row">
    <div class="col-md-12">
    <?php echo $__env->make('includes.data_table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <?php echo Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']); ?>

            <table class="table table-striped dataex-html5-selectors">
                    <thead>
                        <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>S.N.</th>
                        <th>Reg. Num.</th>
                        <th>Name of Staff</th>
                        <th>Designation</th>
                        <th>Contact</th>
                        <th>Tag Line</th>
                        <th>Payroll Head</th>
                        <th>Due Date</th>
                        <th>Amount</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($data['payroll_master']) && $data['payroll_master']->count() > 0): ?>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $data['payroll_master']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payroll_master): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="<?php echo e($payroll_master->id, false); ?>" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td><?php echo e($i, false); ?></td>
                                <td><a href="<?php echo e(route('staff.view', ['id' => $payroll_master->staff_id]), false); ?>"><?php echo e($payroll_master->reg_no, false); ?></a></td>
                                <td><a href="<?php echo e(route('staff.view', ['id' => $payroll_master->staff_id]), false); ?>"> <?php echo e($payroll_master->first_name.' '.$payroll_master->middle_name.' '. $payroll_master->last_name, false); ?></a></td>
                                <td><?php echo e(ViewHelper::getDesignationId($payroll_master->designation), false); ?></td>
                                <td><a href="tel:<?php echo e($payroll_master->mobile_1, false); ?>"><?php echo e($payroll_master->mobile_1, false); ?></a> </td>
                                <td><?php echo e($payroll_master->tag_line, false); ?> </td>
                                <td><?php echo e(ViewHelper::getPayrollHeadById($payroll_master->payroll_head), false); ?> </td>
                                <td><?php echo e(\Carbon\Carbon::parse($payroll_master->due_date)->format('Y-m-d'), false); ?> </td>
                                <td><?php echo e($payroll_master->amount, false); ?> </td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <a class="green" href="<?php echo e(route($base_route.'.edit', ['id' => $payroll_master->id]), false); ?>">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>

                                        <a href="<?php echo e(route($base_route.'.delete', ['id' => $payroll_master->id]), false); ?>" class="red bootbox-confirm">
                                            <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                        </a>
                                    </div>
                                    <div class="hidden-md hidden-lg">
                                        <div class="inline pos-rel">
                                            <button class="btn btn-sm btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                    <a href="<?php echo e(route($base_route.'.edit', ['id' => $payroll_master->id]), false); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $payroll_master->id]), false); ?>" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
                                                            <span class="red ">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <?php ($i++); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
        </div>
        <?php echo Form::close(); ?>

    </div>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/account/payroll/master/includes/payroll_table.blade.php ENDPATH**/ ?>