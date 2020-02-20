<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <div class="clearfix">
            <span class="easy-link-menu">
                <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="print"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Print</a>
                <a class="btn-primary btn-sm bulk-action-btn" attr-action-type="active"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Active</a>
                <a class="btn-warning btn-sm bulk-action-btn" attr-action-type="in-active"><i class="fa fa-remove" aria-hidden="true"></i>&nbsp;In-Active</a>
                <a class="btn-danger btn-sm bulk-action-btn" attr-action-type="delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</a>
            </span>

            <span class="pull-right tableTools-container"></span>
        </div>
        <br/>
        <div class="table-header">
            <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
        </div>
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
                    <th>Faculty/Class</th>
                    <th>Sem.</th>
                    <th>Reg.Num</th>
                    <th>Student Name</th>
                    <th>Issue Date</th>
                    <th>Period</th>
                    <th>Character</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['student']) && $data['student']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['student']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="stuIds[]" value="<?php echo e($student->id, false); ?>" class="ace" />
                                    <input type="checkbox" name="chkIds[]" value="<?php echo e($student->certificate_id, false); ?>" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td><?php echo e($i, false); ?></td>
                            <td> <?php echo e(ViewHelper::getFacultyTitle( $student->faculty ), false); ?></td>
                            <td> <?php echo e(ViewHelper::getSemesterTitle( $student->semester ), false); ?></td>
                            <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>" target="_blank"><?php echo e($student->reg_no, false); ?></a></td>
                            <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>" target="_blank"> <?php echo e($student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></a></td>
                            <td><?php echo e(\Carbon\Carbon::parse($student->date_of_issue)->format('d-M-Y'), false); ?> </td>
                            <td><?php echo e($student->period, false); ?></td>
                            <td><?php echo e($student->character, false); ?></td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a href="<?php echo e(route($base_route.'.print', ['id' => encrypt($student->id)]), false); ?>" class="btn btn-primary btn-sm" target="_blank">
                                        <i class="ace-icon fa fa-print bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.view', ['id' => $student->id]), false); ?>" class="btn btn-primary btn-sm">
                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.edit', ['id' => $student->id]), false); ?>" class="btn btn-success btn-sm">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $student->id]), false); ?>" class="btn btn-danger btn-sm bootbox-confirm" target="_blank" >
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
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/certificate/bonafide/includes/table.blade.php ENDPATH**/ ?>