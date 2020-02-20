<br/>
<div class="form-horizontal">
    <div class="row">
        <div class="col-md-12">
            <?php echo Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']); ?>

            <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
            <div class="clearfix">
                <label class="col-sm-2 control-label">Route</label>
                <div class="col-sm-4">
                    <?php echo Form::select('route_bulk', $data['active_routes'], null, ['class' => 'form-control', "onChange" => "loadAllVehicles(this)"]); ?>

                </div>
                <label class="col-sm-2 control-label">Vehicle</label>
                <div class="col-sm-4">
                    <select name="vehicle_bulk" class="form-control vehicle_select">
                        <option value="0"> Select Vehicle... </option>
                    </select>
                </div>
            </div>
            <hr class="hr-12">
            <div class="clearfix">
                <span class="easy-link-menu">
                    
                    <a class="btn-primary btn-sm" attr-action-type="Shift" id="bulk-shift-btn"><i class="fa fa-exchange" aria-hidden="true"></i>&nbsp;Shift Now</a>
                    <a class="btn-primary btn-sm" attr-action-type="Active" id="bulk-active-btn"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Active</a>
                    <a class="btn-warning btn-sm bulk-action-btn" attr-action-type="Leave"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Leave</a>
                    <a class="btn-danger btn-sm bulk-action-btn" attr-action-type="Delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</a>
                </span>
                <span class="pull-right tableTools-container"></span>
            </div>
            <br/>
            <div class="table-header">
                <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
            </div>
            <!-- div.table-responsive -->
            <div class="table-responsive">
                
               <table  class="table table-striped dataex-html5-selectors">
                    <thead >
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>S.N.</th>
                            <th>Routes</th>
                            <th>Vehicle</th>
                            <th>Type</th>
                            <th>Reg. No. </th>
                            <th>Name </th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($data['user']) && $data['user']->count() > 0): ?>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $data['user']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="center first-child">
                                    <label>
                                        <input type="checkbox" name="chkIds[]" value="<?php echo e($user->id, false); ?>" class="ace" />
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td><?php echo e($i, false); ?></td>
                                <td><?php echo e($user->routes_id==""?"":ViewHelper::getRouteNameById($user->routes_id), false); ?> </td>
                                <td><?php echo e($user->vehicles_id ==""?"":ViewHelper::getVehicleById($user->vehicles_id), false); ?></td>
                                <td><?php echo e($user->user_type==1?"Student":"Staff", false); ?></td>
                                <td>
                                    <?php if($user->user_type == 1): ?>
                                        <a href="<?php echo e(route('student.view', ['id' => $user->member_id]), false); ?>">
                                            <?php echo e($regNumber = ViewHelper::getStudentById($user->member_id), false); ?>

                                        </a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('staff.view', ['id' => $user->member_id]), false); ?>">
                                            <?php echo e($regNumber = ViewHelper::getStaffById($user->member_id), false); ?>

                                        </a>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($user->user_type==1): ?>
                                        <?php echo e(ViewHelper::getStudentNameById($user->member_id), false); ?>

                                    <?php else: ?>
                                        <?php echo e(ViewHelper::getStaffNameById($user->member_id), false); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($user->status == "active"): ?>
                                        <label class="label label-primary">Active</label>
                                    <?php else: ?>
                                        <label class="label label-default">In-Active</label>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <div class="hidden-sm hidden-xs action-buttons">
                                        <?php if($user->status == 'active'): ?>
                                            <a class="open-ShiftUser green" data-toggle="modal"
                                               data-target="#shiftResident"
                                               data-id="<?php echo e($user->id, false); ?>"
                                               data-reg="<?php echo e($regNumber, false); ?>">
                                                 <span>
                                                     <i class="ace-icon fa fa-exchange bigger-130"></i> Shift
                                                 </span>
                                            </a>
                                            <a href="<?php echo e(route('transport.user.leave', ['id' => $user->id]), false); ?>" class="red user-confirm" attr-action-type="Leave">
                                                <i class="ace-icon fa fa-sign-out bigger-130"></i> Leave
                                            </a>
                                            <?php else: ?>
                                            
                                            <a class="open-ActiveAgain label label-primary" data-toggle="modal"
                                               data-target="#activeAgain"
                                               data-id="<?php echo e($user->id, false); ?>"
                                               data-reg="<?php echo e($regNumber, false); ?>">
                                                 <span>
                                                     <i class="ace-icon fa fa-check bigger-130"></i> Active
                                                 </span>
                                            </a>
                                        <?php endif; ?>
                                        <a class="green" href="<?php echo e(route($base_route.'.edit', ['id' => $user->id]), false); ?>">
                                            <i class="ace-icon fa fa-pencil bigger-130"></i>
                                        </a>

                                        <a href="<?php echo e(route($base_route.'.delete', ['id' => $user->id]), false); ?>" class="red bootbox-confirm">
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
                                                    <a href="<?php echo e(route($base_route.'.edit', ['id' => $user->id]), false); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                        <span class="green">
                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $user->id]), false); ?>" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
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
</div>

<?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/user/includes/table.blade.php ENDPATH**/ ?>