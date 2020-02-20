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
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Students</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['guardian']) && $data['guardian']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['guardian']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guardian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="<?php echo e($guardian->id, false); ?>" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td><?php echo e($i, false); ?></td>
                            <td><a href="<?php echo e(route($base_route.'.view', ['id' => $guardian->id]), false); ?>"> <?php echo e($guardian->guardian_first_name.' '.$guardian->guardian_middle_name.' '. $guardian->guardian_last_name, false); ?></a></td>
                            <td><?php echo e($guardian->guardian_address, false); ?></td>
                            <td><?php echo e($guardian->guardian_residence_number.' | '.$guardian->guardian_mobile_1, false); ?></td>
                            <td>
                                <?php if($guardian->students()->get()->count() > 0 ): ?>
                                    <table>
                                    <?php $__currentLoopData = $guardian->students()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>" target="_blank"> <?php echo e('['.$student->reg_no .'] '. $student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                <?php endif; ?>
                            </td>
                            <td class="hidden-480 ">
                                <div class="btn-group">
                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($guardian->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                        <?php echo e($guardian->status == 'active'?"Active":"In Active", false); ?>

                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            &nbsp;&nbsp; <a href="<?php echo e(route($base_route.'.active', ['id' => $guardian->id]), false); ?>" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>
<hr/>
                                        <li>
                                           &nbsp;&nbsp; <a href="<?php echo e(route($base_route.'.in-active', ['id' => $guardian->id]), false); ?>" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?php echo e(route($base_route.'.view', ['id' => $guardian->id]), false); ?>" class="btn btn-primary btn-sm">
                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.edit', ['id' => $guardian->id]), false); ?>" class="btn btn-success btn-sm">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $guardian->id]), false); ?>" class="btn btn-danger btn-sm bootbox-confirm" >
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                               
                            </td>
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
            <?php echo Form::close(); ?>


        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/guardian/includes/table.blade.php ENDPATH**/ ?>