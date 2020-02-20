<?php $__currentLoopData = $academicInfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academicInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr class="option_value">
        <td>
            <div class="btn-group">
                <span class="btn btn-xs btn-primary" >
                    <i class="fa fa-arrows" aria-hidden="true"></i>
                </span>
            </div>
        </td>
        <td>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Institution
                    </th>
                    <td>
                        <?php echo Form::text('academic_info_id[]', $academicInfo->id, ["class" => "col-xs-10 col-sm-11"]); ?>

                        <?php echo Form::text('institution[]', $academicInfo->institution, ["class" => "col-xs-10 col-sm-11"]); ?>

                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Board/Training
                    </th>
                    <td>
                        <?php echo Form::text('board[]', $academicInfo->board, ["class" => "col-xs-10 col-sm-11"]); ?>

                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Pass Year
                    </th>
                    <td>
                        <?php echo Form::text('pass_year[]', $academicInfo->pass_year, ["class" => "col-xs-10 col-sm-11"]); ?>

                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Symbol Number
                    </th>
                    <td>
                        <?php echo Form::text('symbol_no[]', $academicInfo->symbol_no, ["class" => "col-xs-10 col-sm-11"]); ?>

                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Percentage
                    </th>
                    <td>
                        <?php echo Form::text('percentage[]', $academicInfo->percentage, ["class" => "col-xs-10 col-sm-11"]); ?>

                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Division / Grade
                    </th>
                    <td>
                        <?php echo Form::text('division_grade[]', $academicInfo->division_grade, ["class" => "col-xs-10 col-sm-11"]); ?>

                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Major Subject
                    </th>
                    <td>
                        <?php echo Form::text('major_subjects[]', $academicInfo->major_subjects, ["class" => "col-xs-10 col-sm-11"]); ?>

                    </td>
                </tr>
                <tr>
                    <th class="align-right" style="border: none !important; background: none !important;">
                        Remark
                    </th>
                    <td>
                        <?php echo Form::text('remark[]', $academicInfo->remark, ["class" => "col-xs-10 col-sm-11"]); ?>

                    </td>
                </tr>
            </table>
        </td>
        <td width="5%">
            <div class="btn-group">
                <?php if (\Entrust::ability('super-admin', 'student-delete-academic-info')) : ?>
                <a href="<?php echo e(route('student.delete-academicInfo', ['id' => $academicInfo->id]), false); ?>" class="btn btn-danger btn-sm bootbox-confirm align-right" >
                    <i class="ace-icon fa fa-trash-o bigger-130"></i> Delete
                </a>
                <?php endif; // Entrust::ability ?>
            </div>

        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/student/registration/includes/forms/academic_tr_edit.blade.php ENDPATH**/ ?>