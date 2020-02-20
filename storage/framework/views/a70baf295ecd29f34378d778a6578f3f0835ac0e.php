<div class="row">
    <div class="col-md-12">
    <?php echo $__env->make('includes.data_table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <?php echo Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']); ?>

             <table  class="table table-striped dataex-html5-selectors">
                    <thead>
                        <tr>
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>S.N.</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Day in Month</th>
                        <th>Holiday</th>
                        <th>Open Day</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($data['attendance_master']) && $data['attendance_master']->count() > 0): ?>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $data['attendance_master']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance_master): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="<?php echo e($attendance_master->id, false); ?>" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td><?php echo e($i, false); ?></td>
                                <td><?php echo e(ViewHelper::getYearById($attendance_master->year), false); ?> </td>
                                <td><?php echo e(ViewHelper::getMonthById($attendance_master->month), false); ?> </td>
                                <td><?php echo e($attendance_master->day_in_month, false); ?> </td>
                                <td><?php echo e($attendance_master->holiday, false); ?> </td>
                                <td><?php echo e($attendance_master->open, false); ?> </td>
                                <td class="hidden-480 ">
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($attendance_master->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                            <?php echo e($attendance_master->status == 'active'?"Active":"In Active", false); ?>

                                            <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                        </button>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo e(route($base_route.'.active', ['id' => $attendance_master->id]), false); ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            </li>

                                            <li>
                                                <a href="<?php echo e(route($base_route.'.in-active', ['id' => $attendance_master->id]), false); ?>"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <a class="green" href="<?php echo e(route($base_route.'.edit', ['id' => $attendance_master->id]), false); ?>">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>

                                        <a href="<?php echo e(route($base_route.'.delete', ['id' => $attendance_master->id]), false); ?>" class="red bootbox-confirm">
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
                                                    <a href="<?php echo e(route($base_route.'.edit', ['id' => $attendance_master->id]), false); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $attendance_master->id]), false); ?>" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
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


<?php /**PATH /home/viholddep/public_html/edu/resources/views/attendance/master/includes/master_table.blade.php ENDPATH**/ ?>