<div class="row">
    <div class="col-md-12">
        <?php echo $__env->make('includes.data_table_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- div.table-responsive -->
        <div>
            <?php echo Form::open(['route' => $base_route.'.bulk-action', 'id' => 'bulk_action_form']); ?>


                <table class="table table-striped dataex-html5-selectors">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>S.N.</th>
                            <th>Reg.No.</th>
                            <th><?php echo e($panel, false); ?></th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($data['document']) && $data['document']->count() > 0): ?>
                            <?php ($i=1); ?>
                            <?php $__currentLoopData = $data['document']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="center first-child">
                                        <label>
                                            <input type="checkbox" name="chkIds[]" value="<?php echo e($document->id, false); ?>" class="ace" />
                                            <span class="lbl"></span>
                                        </label>
                                    </td>
                                    <td><?php echo e($i, false); ?></td>
                                    <td><a href="<?php echo e(route('student.view', ['id' => $document->member_id]), false); ?>"> <?php echo e(ViewHelper::getStudentById( $document->member_id ), false); ?></a></td>
                                    <td><a href="<?php echo e(asset('documents'.DIRECTORY_SEPARATOR.'student'.DIRECTORY_SEPARATOR.ViewHelper::getStudentById( $document->member_id ).'/'.$document->file), false); ?>" target="_blank">
                                            <i class="ace-icon fa fa-download bigger-120"></i> &nbsp;<?php echo e($document->title, false); ?>

                                           </a></td>
                                    
                                    <td class="hidden-480 ">
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($document->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                                <?php echo e($document->status == 'active'?"Active":"In Active", false); ?>

                                                <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                            </button>

                                            <ul class="dropdown-menu">
                                                <li style="margin:5px">
                                                    <a href="<?php echo e(route($base_route.'.active', ['id' => $document->id]), false); ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                </li>
<hr/>
                                                <li style="margin:5px">
                                                    <a href="<?php echo e(route($base_route.'.in-active', ['id' => $document->id]), false); ?>"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                    <td>
                                      

                                            <a href="<?php echo e(route($base_route.'.edit', ['id' => $document->id]), false); ?>" class="btn btn-success btn-sm">
                                                <i class="ace-icon fa fa-pencil bigger-130"></i>
                                            </a>

                                            <a href="<?php echo e(route($base_route.'.delete', ['id' => $document->id]), false); ?>" class="btn btn-danger btn-sm bootbox-confirm" >
                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                            </a>
                                     
                                      
                                    </td>
                                </tr>
                                <?php ($i++); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/student/document/includes/table.blade.php ENDPATH**/ ?>