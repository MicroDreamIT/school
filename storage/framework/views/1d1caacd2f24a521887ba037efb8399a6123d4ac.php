<div class="row">
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
        <div class="table-header">
            <?php echo e($panel, false); ?>  Record list on table. Filter <?php echo e($panel, false); ?> using the filter.
        </div>
        <!-- div.table-responsive -->
        <div>
           <table class="table table-striped dataex-html5-selectors">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Event</th>
                    <th>Alert</th>
                    <th>Template</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['row']) && $data['row']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['row']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i, false); ?></td>
                            <td><?php echo e($event->event, false); ?></td>
                            <td>
                                <?php if($event->sms==1): ?>
                                <div class="btn-group">
                                    <span data-toggle="dropdown" class="btn btn-primary btn-sm <?php echo e($event->sms==1?"btn-info":"btn-warning", false); ?>" >
                                        SMS
                                    </span>
                                </div>
                                <?php endif; ?>

                                <?php if($event->email==1): ?>
                                    <div class="btn-group">
                                        <span data-toggle="dropdown" class="btn btn-primary btn-sm <?php echo e($event->email==1?"btn-info":"btn-warning", false); ?>" >
                                            E-Mail
                                        </span>
                                    </div>
                                    <?php endif; ?>
                            </td>
                            <td>
                                <?php if($event->subject): ?>
                                    <span class="label label-info arrowed-right arrowed-in">
                                        <?php echo e($event->subject, false); ?>

                                    </span>
                                    <br>
                                <?php endif; ?>
                                <?php echo e($event->template, false); ?>

                            </td>
                            <td class="hidden-480 ">
                                <div class="btn-group">
                                    <span data-toggle="dropdown" class="btn btn-primary btn-sm <?php echo e($event->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                        <?php echo e($event->status == 'active'?"Active":"In Active", false); ?>

                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="btn btn-success btn-xs" href="<?php echo e(route($base_route.'.edit', ['id' => $event->id]), false); ?>">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i> Edit
                                    </a>
                                </div>
                                <div class="hidden-md hidden-lg">
                                    <div class="inline pos-rel">
                                        <button class="btn btn-sm btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="<?php echo e(route($base_route.'.edit', ['id' => $event->id]), false); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="green">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
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
                <?php else: ?>
                    <tr>
                        <td colspan="11">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/setting/alert/includes/table.blade.php ENDPATH**/ ?>