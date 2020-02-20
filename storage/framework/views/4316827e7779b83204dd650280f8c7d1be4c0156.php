<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <?php echo Form::open(['route' => $base_route.'.transfering', 'id' => 'bulk_action_form']); ?>

        <div class="clearfix">
            <div class="row">
                    <label class="col-sm-2 control-label">Faculty/Class</label>
                    <div class="col-sm-4">
                        <?php echo Form::select('faculty', $data['faculties'], null, ['class' => 'form-control', 'onChange' => 'loadSemesters(this);','id'=>'transfer-faculty', "required"]); ?>


                    </div>

                    <label class="col-sm-2 control-label">Sem./Sec.</label>
                    <div class="col-sm-4">
                        <select name="semester_select" class="form-control semester_select" id='transfer-semester'  required>
                            <option> Select Sem./Sec. </option>
                        </select>
                    </div>
                </div>
                <br/>
                <div class="row">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-4">
                    <?php echo Form::select('student_status', $data['academic_status'], null, ['class' => 'form-control','id'=>'transfer-status' , "required"]); ?>

                </div>
                <button type="submit" class="btn btn-success btn-sm m-1" id="student-transfer-btn"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Transfer</button>
                <button type="reset" class="btn btn-warning btn-sm m-1"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Reset</button>
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
                        <th>Status</th>
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
                                <td><a href="<?php echo e(route($base_route.'.view', ['id' => $student->id]), false); ?>"><?php echo e($student->reg_no, false); ?></a></td>
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
                            <td colspan="10">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
        </div>
        <?php echo Form::close(); ?>

    </div>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/student/transfer/includes/table.blade.php ENDPATH**/ ?>