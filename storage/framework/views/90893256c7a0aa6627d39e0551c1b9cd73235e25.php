<div class="row">
    <div class="col-md-11">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
        </div>
        <!-- div.table-responsive -->
            <!-- div.table-responsive -->
        <div class="table-responsive">
            <table  class="table table-striped dataex-html5-selectors">

                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Faculty/Class</th>
                    <th>Sem.</th>
                    <th>Reg. Num.</th>
                    <th>Reg. Date</th>
                    <th>University Reg.</th>
                    <th>Student Name</th>

                    <th>Date Of Birth</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Nationality</th>
                    <th>Mother Tongueue</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>

                    <th>Temp. Address</th>
                    <th>Temp. State</th>
                    <th>Temp. Country</th>

                    <th>Home Phone</th>
                    <th>Mobile Number</th>

                    <th>Academic Status</th>
                    <th>Status</th>

                    <th>Grand Father Name</th>
                    <th>Father Name</th>
                    <th>Father Eligibility</th>
                    <th>Father Occupation</th>
                    <th>Father Office</th>
                    <th>Father Office Number</th>
                    <th>Father Resident Number</th>
                    <th>Father Mobile</th>
                    <th>Father Email</th>

                    <th>Mother Name</th>
                    <th>Mother Eligibility</th>
                    <th>Mother Occupation</th>
                    <th>Mother Office</th>
                    <th>Mother Office Number</th>
                    <th>Mother Resident Number</th>
                    <th>Mother Mobile</th>
                    <th>Mother Email</th>

                    <th>Guardian Name</th>
                    <th>Guardian Eligibility</th>
                    <th>Guardian Occupation</th>
                    <th>Guardian Office</th>
                    <th>Guardian Office Number</th>
                    <th>Guardian Resident Number</th>
                    <th>Guardian Mobile</th>
                    <th>Guardian Email</th>
                    <th>Guardian Relation</th>
                    <th>Guardian Address</th>

                    <th>ExtraInfo</th>
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
                            <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>"><?php echo e($student->reg_no, false); ?></a></td>
                            <td><?php echo e(\Carbon\Carbon::parse($student->reg_date)->format('Y-m-d'), false); ?> </td>
                            <td><?php echo e($student->university_reg, false); ?></td>
                            <td><a href="<?php echo e(route('student.view', ['id' => $student->id]), false); ?>"> <?php echo e($student->first_name.' '.$student->middle_name.' '. $student->last_name, false); ?></a></td>
                            <td><?php echo e(\Carbon\Carbon::parse($student->date_of_birth)->format('Y-m-d'), false); ?></td>

                            <td><?php echo e($student->gender, false); ?></td>
                            <td><?php echo e($student->blood_group, false); ?></td>
                            <td><?php echo e($student->nationality, false); ?></td>
                            <td><?php echo e($student->mother_tongue, false); ?></td>
                            <td><?php echo e($student->email, false); ?></td>
                            <td><?php echo e($student->address, false); ?></td>
                            <td><?php echo e($student->state, false); ?></td>
                            <td><?php echo e($student->country, false); ?></td>
                            <td><?php echo e($student->temp_address, false); ?></td>
                            <td><?php echo e($student->temp_state, false); ?></td>
                            <td><?php echo e($student->temp_country, false); ?></td>
                            <td><?php echo e($student->home_phone, false); ?></td>
                            <td>
                                <?php if(isset($student->mobile_2)): ?>
                                    <?php echo e($student->mobile_1.', '.$student->mobile_2, false); ?>

                                <?php else: ?>
                                    <?php echo e($student->mobile_1, false); ?>

                                <?php endif; ?>
                            </td>
                            <td><?php echo e(ViewHelper::getStudentAcademicStatusId($student->academic_status), false); ?></td>
                            <td><?php echo e($student->status=="active"?"Active":"In-Active", false); ?></td>

                            <td><?php echo e($student->grandfather_first_name.' '.$student->grandfather_middle_name.' '. $student->grandfather_last_name, false); ?></td>
                            <td><?php echo e($student->father_first_name.' '.$student->father_middle_name.' '. $student->father_last_name, false); ?></td>
                            <td><?php echo e($student->father_eligibility, false); ?></td>
                            <td><?php echo e($student->father_occupation, false); ?></td>
                            <td><?php echo e($student->father_office, false); ?></td>
                            <td><?php echo e($student->father_office_number, false); ?></td>
                            <td><?php echo e($student->father_residence_number, false); ?></td>
                            <td><?php echo e($student->father_mobile_1.', '.$student->father_mobile_1, false); ?></td>
                            <td><?php echo e($student->father_email, false); ?></td>

                            <td><?php echo e($student->mother_first_name.' '.$student->mother_middle_name.' '. $student->mother_last_name, false); ?></td>
                            <td><?php echo e($student->mother_eligibility, false); ?></td>
                            <td><?php echo e($student->mother_occupation, false); ?></td>
                            <td><?php echo e($student->mother_office, false); ?></td>
                            <td><?php echo e($student->mother_office_number, false); ?></td>
                            <td><?php echo e($student->mother_residence_number, false); ?></td>
                            <td><?php echo e($student->mother_mobile_1.', '.$student->mother_mobile_1, false); ?></td>
                            <td><?php echo e($student->mother_email, false); ?></td>

                            <td><?php echo e($student->guardian_first_name.' '.$student->guardian_middle_name.' '. $student->guardian_last_name, false); ?></td>
                            <td><?php echo e($student->guardian_eligibility, false); ?></td>
                            <td><?php echo e($student->guardian_occupation, false); ?></td>
                            <td><?php echo e($student->guardian_office, false); ?></td>
                            <td><?php echo e($student->guardian_office_number, false); ?></td>
                            <td><?php echo e($student->guardian_residence_number, false); ?></td>
                            <td><?php echo e($student->guardian_mobile_1.', '.$student->guardian_mobile_1, false); ?></td>
                            <td><?php echo e($student->guardian_email, false); ?></td>
                            <td><?php echo e($student->guardian_relation, false); ?></td>
                            <td><?php echo e($student->guardian_address, false); ?></td>

                            <td><?php echo e($student->extra_info, false); ?></td>

                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="51">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            <?php echo Form::close(); ?>


        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/report/student/includes/table.blade.php ENDPATH**/ ?>