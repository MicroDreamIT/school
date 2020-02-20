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
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Type</th>
                    <th>SendTo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['rows']) && $data['rows']->count() > 0): ?>
                    <?php ($i = 1); ?>
                    <?php $__currentLoopData = $data['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center" width="3%">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="<?php echo e($row->id, false); ?>" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td width="4%"><?php echo e($i, false); ?></td>

                            <td width="20%"> <?php echo e($row->subject, false); ?> </td>
                            <td><?php echo $row->message; ?></td>
                            <td width="5%">
                                <?php if($row->sms == 1 && $row->email == 1): ?>
                                    <div class="label label-info arrowed-right arrowed-in">
                                        SMS
                                    </div>
                                <hr class="hr-2">
                                    <div class="label label-primary arrowed-right arrowed-in">
                                        Email
                                    </div>
                                <?php elseif($row->sms == 1): ?>
                                    <div class="label label-info arrowed-right arrowed-in">
                                        SMS
                                    </div>
                                <?php elseif($row->email == 1): ?>
                                    <div class="label label-primary arrowed-right arrowed-in">
                                        Email
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td width="10%">
                                <?php if(isset($row->group) && $row->group != 0): ?>
                                    <?php ($groups = explode(',',$row->group)); ?>
                                    <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="label label-info arrowed-right arrowed-in">
                                            <?php echo e(\App\Facades\ViewHelperFacade::getRoleNameId($group), false); ?>

                                        </div>
                                        <hr class="hr-2">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <div class="label label-info arrowed-right arrowed-in">
                                        Individuals
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td width="5%">
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $row->id]), false); ?>" class="red bootbox-confirm">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-sm btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="<?php echo e(route($base_route.'.delete', ['id' => $row->id]), false); ?>" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
                                                    <span class="red ">
                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo Form::close(); ?>


                <?php else: ?>
                    <tr><td colspan="7">No data found.</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/info/smsemail/includes/table.blade.php ENDPATH**/ ?>