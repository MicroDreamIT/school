<div class="row">
    <div class="col-md-11">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <?php echo Form::open(['route' => 'print-out.general-certificate', 'id' => 'bulk_action_form']); ?>

        <div class="clearfix">
            <div class="row m-2">
                    <label class="col-md-2 control-label">Certificate Template</label>
                    <div class="col-md-6">
                        <?php echo Form::select('certificate', $data['certificates'], null, ['class' => 'form-control', 'id'=>'certificate-template', "required"]); ?>


                    </div>
                    <div class="col-md-4">
                <button type="submit" class="btn btn-success" id="certificate-generate-btn"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Print Certificates</button>
            </div>
            <hr class="hr-8">
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
                        <th class="center">
                            <label class="pos-rel">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"></span>
                            </label>
                        </th>
                        <th>S.N.</th>
                        <th>Faculty/Class</th>
                        <th>Sem./Sec.</th>
                        <th>Reg. Date</th>
                        <th>Reg. Num.</th>
                        <th>Name of Student</th>
                        <th></th>
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
                                <td><?php echo e(\Carbon\Carbon::parse($student->reg_date)->format('Y-m-d'), false); ?>

                                </td>
                                <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>"><?php echo e($student->reg_no, false); ?></a></td>
                                <td> <?php echo e($student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></td>
                                <td>
                                    <?php echo e(ViewHelper::getAcademicStatus($student->academic_status), false); ?>

                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($student->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                            <?php echo e($student->status == 'active'?"Active":"In Active", false); ?>

                                        </button>
                                    </div>
                                </td>

                            </tr>
                            <?php ($i++); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10">Data not found.</td>
                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
        </div>
        <?php echo Form::close(); ?>

    </div>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/certificate/generate/includes/table.blade.php ENDPATH**/ ?>