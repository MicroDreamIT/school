<div class="row">
    <div class="col-md-11">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Student List</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
        </div>
        <!-- div.table-responsive -->
        <div class="table-responsive">
            <table  class="table table-striped dataex-html5-selectors">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Faculty/Class</th>
                        <th>Sem./Sec.</th>
                        <th>Reg. No.</th>
                        <th>Name</th>
                        <th>Contact No.</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($data['student']) && $data['student']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['student']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td> <?php echo e(ViewHelper::getFacultyTitle( $student->faculty ), false); ?></td>
                            <td> <?php echo e(ViewHelper::getSemesterTitle( $student->semester ), false); ?></td>
                            <td><a href="<?php echo e(route($base_route.'.view', ['id' => $student->id]), false); ?>"><?php echo e($student->reg_no, false); ?></a></td>
                            <td><a href="<?php echo e(route($base_route.'.view', ['id' => $student->id]), false); ?>"> <?php echo e($student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></a></td>
                            <td><div class="label label-info arrowed"><?php echo e($student->mobile_1, false); ?></div></td>
                            <td>
                                <?php echo e(ViewHelper::getAcademicStatus($student->academic_status), false); ?>

                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($student->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                        <?php echo e($student->status == 'active'?"Active":"In Active", false); ?>

                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn btn-primary btn-sm action-buttons ">
                                    <a class="white" href="<?php echo e(route($base_route.'.view', ['id' => $student->id]), false); ?>">
                                        <i class="ace-icon fa fa-calculator bigger-130"></i>&nbsp;
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
        </div>
    </div>
</div>

<?php /**PATH /home/viholddep/public_html/edu/resources/views/account/fees/collection/includes/table.blade.php ENDPATH**/ ?>