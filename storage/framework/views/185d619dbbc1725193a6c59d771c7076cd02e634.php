<div class="row">
    <div class="col-md-12">
        <?php echo $__env->make('includes.data_table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- div.table-responsive -->
        <div>
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
                            <th>Detail</th>
                            <th>Staffs</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($data['vehicle']) && $data['vehicle']->count() > 0): ?>
                            <?php ($i=1); ?>
                            <?php $__currentLoopData = $data['vehicle']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="center first-child">
                                        <label>
                                            <input type="checkbox" name="chkIds[]" value="<?php echo e($vehicle->id, false); ?>" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td><?php echo e($i, false); ?></td>
                                    <td>
                                        <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-right">
                                                        <div class="inline position-relative">
                                                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                                <span class="white"><?php echo e($vehicle->number, false); ?></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Type</td>
                                                <td><?php echo e($vehicle->type, false); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Model</td>
                                                <td><?php echo e($vehicle->model, false); ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><?php echo e($vehicle->description, false); ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td>
                                        <table class="table table-striped table-bordered table-hover">
                                            <?php if(isset($vehicle->staff)): ?>
                                                <?php $__currentLoopData = $vehicle->staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $staff): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="center">
                                                                <div>
                                                                    <span class="profile-picture">
                                                                        <?php if($staff->staff_image != ''): ?>
                                                                            <img class="editable img-responsive" alt="" src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'staff'.DIRECTORY_SEPARATOR.$staff->staff_image), false); ?>" width="100px" />
                                                                        <?php endif; ?>
                                                                    </span>
                                                                    <div class="space-4"></div>
                                                                    <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                                                        <div class="inline position-relative">
                                                                            <a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
                                                                                <span class="white"><?php echo e($staff->first_name.' '.$staff->middle_name.' '.$staff->last_name, false); ?></span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>HomePhone</td>
                                                        <td><?php echo e($staff->home_phone, false); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mobile</td>
                                                        <td><?php echo e($staff->mobile_1, false); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td><?php echo e($staff->address, false); ?></td>
                                                    </tr>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </table>
                                    </td>
                                    <td class="hidden-480 ">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($vehicle->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                                <?php echo e($vehicle->status == 'active'?"Active":"In Active", false); ?>

                                                <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo e(route($base_route.'.active', ['id' => $vehicle->id]), false); ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo e(route($base_route.'.in-active', ['id' => $vehicle->id]), false); ?>"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a class="green" href="<?php echo e(route($base_route.'.edit', ['id' => $vehicle->id]), false); ?>">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a href="<?php echo e(route($base_route.'.delete', ['id' => $vehicle->id]), false); ?>" class="red bootbox-confirm">
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
                                                        <a href="<?php echo e(route($base_route.'.edit', ['id' => $vehicle->id]), false); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo e(route($base_route.'.delete', ['id' => $vehicle->id]), false); ?>" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
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
                                <td colspan="8">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/vehicle/includes/table.blade.php ENDPATH**/ ?>