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
                    <th><?php echo e($panel, false); ?></th>
                    <th>Marking</th>
                    <th>Info</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['subject']) && $data['subject']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['subject']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="<?php echo e($subject->id, false); ?>" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td><?php echo e($i, false); ?></td>
                            <td>
                                <?php echo e($subject->title, false); ?>

                                <hr class="hr hr-2  ">
                                <div class="label label-primary arrowed-right arrowed-in">
                                    <?php echo e($subject->code, false); ?>

                                </div>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>FM (T) - </td>
                                        <td>
                                            <div class="label label-info arrowed-right arrowed-in">
                                                <?php echo e($subject->full_mark_theory, false); ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PM (T) - </td>
                                        <td>
                                            <div class="label label-info arrowed-right arrowed-in">
                                                <?php echo e($subject->pass_mark_theory, false); ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FM (P) - </td>
                                        <td>
                                            <div class="label label-warning arrowed-right arrowed-in">
                                                <?php echo e($subject->full_mark_practical, false); ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PM (P) - </td>
                                        <td>
                                            <div class="label label-warning arrowed-right arrowed-in">
                                                <?php echo e($subject->pass_mark_practical, false); ?>

                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td >
                                <table>
                                    <tr>
                                        <td>Credit Hour - </td>
                                        <td>
                                            <div class="label label-info arrowed-right arrowed-in">
                                                <?php echo e($subject->credit_hour, false); ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Subject Type - </td>
                                        <td>
                                            <div class="label label-info arrowed-right arrowed-in">
                                                <?php echo e($subject->sub_type, false); ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Class Type - </td>
                                        <td>
                                            <div class="label label-info arrowed-right arrowed-in">
                                                <?php echo e($subject->class_type, false); ?>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Teacher/Staff - </td>
                                        <td>
                                            <div class="label label-info arrowed-right arrowed-in">
                                                <?php echo e(ViewHelper::getStaffNameById($subject->staff_id), false); ?>

                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </td>
                            <td class="hidden-480 ">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($subject->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                        <?php echo e($subject->status == 'active'?"Active":"In Active", false); ?>

                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo e(route('subject.active', ['id' => $subject->id]), false); ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="<?php echo e(route('subject.in-active', ['id' => $subject->id]), false); ?>"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="btn btn-sm btn-success" href="<?php echo e(route($base_route.'.edit', ['id' => $subject->id]), false); ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $subject->id]), false); ?>" class="btn btn-sm btn-danger">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                                <!--<div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-sm btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="<?php echo e(route($base_route.'.edit', ['id' => $subject->id]), false); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="green">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="<?php echo e(route($base_route.'.delete', ['id' => $subject->id]), false); ?>" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
                                                    <span class="red ">
                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                    </span>
                                                 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>-->
                            </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/academic/subject/includes/table.blade.php ENDPATH**/ ?>