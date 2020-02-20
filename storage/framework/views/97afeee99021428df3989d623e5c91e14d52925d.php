<div class="row">
    <div class="col-md-12">
        <?php echo $__env->make('includes.data_table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- div.table-responsive -->
            <!-- div.table-responsive -->
        <div class="table-responsive ">
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
                    <th>Faculty/Class</th>
                    <th>Sem.</th>
                    <th>Reg.Num</th>
                    
                    <th>Student Name</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Service Activation</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['student']) && $data['student']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['student']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="<?php echo e($student->id, false); ?>" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td><?php echo e($i, false); ?></td>
                            <td> <?php echo e(ViewHelper::getFacultyTitle( $student->faculty ), false); ?></td>
                            <td> <?php echo e(ViewHelper::getSemesterTitle( $student->semester ), false); ?></td>
                            
                            <td><a href="<?php echo e(route($base_route.'.view', ['id' => $student->id]), false); ?>"><?php echo e($student->reg_no, false); ?></a></td>
                            <td><a href="<?php echo e(route($base_route.'.view', ['id' => $student->id]), false); ?>"> <?php echo e($student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></a></td>
                            <td>
                                <?php echo e(ViewHelper::getAcademicStatus($student->academic_status), false); ?>

                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($student->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                        <?php echo e($student->status == 'active'?"Active":"In Active", false); ?>

                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo e(route($base_route.'.active', ['id' => $student->id]), false); ?>" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="<?php echo e(route($base_route.'.in-active', ['id' => $student->id]), false); ?>" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <td>
                                    <a href="<?php echo e(route($base_route.'.view', ['id' => $student->id]), false); ?>" class="btn btn-primary btn-sm">
                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.edit', ['id' => $student->id]), false); ?>" class="btn btn-success btn-sm">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $student->id]), false); ?>" class="btn btn-danger btn-sm bootbox-confirm" >
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a href="<?php echo e(route('library.member.quick-membership', ['reg_no' => $student->reg_no,'user_type' => 1,'status' => 'active',]), false); ?>" class="label label-primary btn-sm">
                                        <i class="ace-icon fa fa-book bigger-130"></i>
                                    </a>

                                    <a class="open-ActiveAgain label label-primary" data-toggle="modal"
                                       data-target="#activeAgain"
                                       data-id="<?php echo e($student->id, false); ?>"
                                       data-reg="<?php echo e($student->reg_no, false); ?>">
                                         <span>
                                             <i class="ace-icon fa fa-bed bigger-130"></i>
                                         </span>
                                    </a>

                                    <a class="open-TransportActiveAgain label label-primary" data-toggle="modal"
                                       data-target="#TransportActiveAgain"
                                       data-id="<?php echo e($student->id, false); ?>"
                                       data-reg="<?php echo e($student->reg_no, false); ?>">
                                         <span>
                                             <i class="ace-icon fa fa-bus bigger-130"></i>
                                         </span>
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
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/student/includes/table.blade.php ENDPATH**/ ?>