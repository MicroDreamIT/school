<div class="container">
<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;TargetExam List</h4>
        <?php echo Form::open(['route' => 'print-out.exam.admit-card', 'id' => 'bulk_action_form']); ?>

        <div class="clearfix">
            <div class="form-horizontal ">
                <div class="clearfix">
                 
                    <div class="row mt-2">
                        <?php echo Form::label('years_id', 'Year', ['class' => 'col-sm-1 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::select('years_id', $data['years'], null, ["class" => "form-control border-form","required"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'years_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <?php echo Form::label('months_id', 'Month', ['class' => 'col-sm-1 control-label']); ?>

                        <div class="col-sm-2">
                            <?php echo Form::select('months_id', $data['months'], null, ["class" => "form-control border-form","required"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'months_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <?php echo Form::label('exams_id', 'Exam', ['class' => 'col-sm-1 control-label']); ?>

                        <div class="col-sm-5">
                            <?php echo Form::select('exams_id', $data['exams'], null, ["class" => "form-control border-form chosen-select","required"]); ?>

                            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'exams_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                
                    <div class="row mt-2">
                        <label class="col-sm-2 control-label">Faculty/Class</label>
                        <div class="col-sm-4">
                            <?php echo Form::select('target_faculty', $data['faculties'], null, ['class' => 'form-control chosen-select', 'onChange' => 'loadSemesters(this);']); ?>

                        </div>

                        <label class="col-sm-1 control-label">Sem./Sec.</label>
                        <div class="col-sm-2">
                            <select name="semester_select" class="form-control semester_select">
                                <option> Select Sem./Sec. </option>
                            </select>
                        </div>
                        <br/>

                    </div>
                    <div class="row mt-2 ml-5">
                        <label class="pos-rel ml-5">
                            <?php echo Form::radio('print_type',1, true, ['class' => 'ace', "required"]); ?>

                            <span class="lbl"></span> <span class="label label-primary ml-1" >Admit Card </span>
                        </label>

                        <label class="pos-rel ml-5">
                            <?php echo Form::radio('print_type',2, false, ['class' => 'ace', "required"]); ?>

                            <span class="lbl"></span> <span class="label label-success ml-1" >Admit Card With Schedule </span>
                        </label>
                        </div>
                </div>
                <div class="clearfix form-actions">
                    <div class="align-right">
                        <button class="btn btn-info" type="submit" id="print-btn">
                            <i class="fa fa-print bigger-110"></i>
                            Print Admit Card
                        </button>
                    </div>
                </div>
                <div class="hr hr-24"></div>
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
                            <td colspan="10">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
        </div>
        <?php echo Form::close(); ?>

    </div>
</div>


</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/examination/admit-card/includes/table.blade.php ENDPATH**/ ?>