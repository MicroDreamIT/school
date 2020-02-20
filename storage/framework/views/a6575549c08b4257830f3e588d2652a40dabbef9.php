<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-university" aria-hidden="true"></i>&nbsp;Academic Info</h4>
        <div class="table-responsive">
            <?php if(isset($data['academicInfos'])): ?>
                <?php $__currentLoopData = $data['academicInfos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academicInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table id="responsive" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="80%">
                            <?php echo e($academicInfo->board, false); ?> | <?php echo e($academicInfo->pass_year, false); ?>

                        </th>
                        <th>
                            <?php if (\Entrust::ability('super-admin', 'student-delete-academic-info')) : ?>
                                <a href="<?php echo e(route('student.delete-academicInfo', ['id' => $academicInfo->id]), false); ?>" class="btn btn-danger btn-sm bootbox-confirm align-right" >
                                    <i class="ace-icon fa fa-trash-o bigger-130"></i> Delete
                                </a>
                            <?php endif; // Entrust::ability ?>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="option_value">
                        <td colspan="2">
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <td>
                                        Institution
                                    </td>
                                    <td>
                                       <?php echo e($academicInfo->institution, false); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Board/Training
                                    </td>
                                    <td>
                                        <?php echo e($academicInfo->board, false); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Pass Year
                                    </td>
                                    <td>
                                        <?php echo e($academicInfo->pass_year, false); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Symbol Number
                                    </td>
                                    <td>
                                        <?php echo e($academicInfo->symbol_no, false); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Percentage
                                    </td>
                                    <td>
                                        <?php echo e($academicInfo->percentage, false); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Division / Grade
                                    </td>
                                    <td>
                                        <?php echo e($academicInfo->division_grade, false); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Major Subject
                                    </td>
                                    <td>
                                        <?php echo e($academicInfo->major_subjects, false); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Remark
                                    </td>
                                    <td>
                                        <?php echo e($academicInfo->remark, false); ?>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </tbody>

            </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>

</div><!-- /.row --><?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/detail/includes/academicInfo.blade.php ENDPATH**/ ?>