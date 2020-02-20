<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <div class="clearfix">

    <span class="easy-link-menu">
        <a class="btn-danger btn-sm bulk-action-btn" attr-action-type="delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</a>
    </span>

            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
        </div>
        <!-- div.table-responsive -->
            <!-- div.table-responsive -->
        <div class="table-responsive">
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
                        <th>User</th>
                        <th>User Type</th>
                       
                        <th>Event</th>
                        <th width="20%">Old Values</th>
                        <th width="20%">New Values</th>
                        <th>URL</th>
                        <th>IP Address</th>
                        
                        <th>Tags</th>
                        <th>CreatedAt</th>
                        <th>UpdatedAt</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($data['user-activity']) && $data['user-activity']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['user-activity']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="<?php echo e($activity->id, false); ?>" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td><?php echo e($i, false); ?></td>
                            <td> <?php echo e($activity->name, false); ?> </td>
                            <td> <?php echo e($activity->display_name, false); ?> </td>
                            <td><?php echo e($activity->event, false); ?></td>
                            <td>
                                <div id="accordion" class="accordion-style1 panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOld-<?php echo e($i, false); ?>" aria-expanded="false">
                                                    <i class="bigger-110 ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                    Old Values
                                                </a>
                                            </h4>
                                        </div>

                                        <div class="panel-collapse collapse" id="collapseOld-<?php echo e($i, false); ?>" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <?php if($activity->old_values): ?>
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <?php $__currentLoopData = $activity->old_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td class="text-uppercase" style="font-weight: 600"><?php echo e(str_replace('_',' ',$key), false); ?></td>
                                                                <?php if($key == 'ref_text'): ?>
                                                                    <td>
                                                                        <table class="table table-striped table-bordered table-hover">
                                                                            <?php ($refText  =json_decode($value)); ?>
                                                                            <?php $__currentLoopData = $refText; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyfield => $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <tr>
                                                                                    <?php if($key == 'ref_text'): ?>
                                                                                        <td class="text-uppercase" width="10%" style="font-weight: 600"><?php echo e(str_replace('_',' ',$keyfield), false); ?></td>
                                                                                        <td> <?php echo e($text, false); ?> </td>
                                                                                    <?php endif; ?>
                                                                                </tr>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </table>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td><?php echo e($value, false); ?></td>
                                                                <?php endif; ?>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </table>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div id="accordion" class="accordion-style1 panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNew-<?php echo e($i, false); ?>" aria-expanded="false">
                                                    <i class="bigger-110 ace-icon fa fa-angle-right" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                    New Values
                                                </a>
                                            </h4>
                                        </div>

                                        <div class="panel-collapse collapse" id="collapseNew-<?php echo e($i, false); ?>" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <?php if($activity->new_values): ?>
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <?php $__currentLoopData = $activity->new_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                
                                                                <td class="text-uppercase" style="font-weight: 600"><?php echo e(str_replace('_',' ',$key), false); ?></td>
                                                                <?php if($key == 'ref_text'): ?>
                                                                    <td>
                                                                        <table class="table table-striped table-bordered table-hover">
                                                                            <?php ($refText  =json_decode($value)); ?>
                                                                            <?php $__currentLoopData = $refText; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyfield => $text): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <tr>
                                                                                    <?php if($key == 'ref_text'): ?>
                                                                                        <td class="text-uppercase" width="10%" style="font-weight: 600"><?php echo e(str_replace('_',' ',$keyfield), false); ?></td>
                                                                                        <td> <?php echo e($text, false); ?> </td>
                                                                                    <?php endif; ?>
                                                                                </tr>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </table>
                                                                    </td>
                                                                <?php else: ?>
                                                                    <td><?php echo e($value, false); ?></td>
                                                                <?php endif; ?>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </table>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            <td><?php echo e($activity->url, false); ?></td>
                            <td><?php echo e($activity->ip_address, false); ?></td>
                            
                            <td><?php echo e($activity->tags, false); ?></td>
                            <td><?php echo e($activity->created_at, false); ?></td>
                            <td><?php echo e($activity->updated_at, false); ?></td>
                            <td>
                                <div class="action-buttons">
                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $activity->id]), false); ?>" class="btn btn-danger btn-sm bootbox-confirm" >
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr>
                        <td colspan="16">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            <?php echo Form::close(); ?>


        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/super-suit/user-activity/includes/table.blade.php ENDPATH**/ ?>