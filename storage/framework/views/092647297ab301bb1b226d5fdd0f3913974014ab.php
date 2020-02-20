<div class="row">
    <div class="col-xs-12">
    <!-- div.table-responsive -->
        <div class="table-responsive">
            <?php if(isset($data['rows']) && $data['rows']->count() > 0): ?>
                <?php ($i = 1); ?>
                <div id="accordion" class="accordion-style2 ui-accordion ui-widget ui-helper-reset ui-sortable" role="tablist">
                    <?php $__currentLoopData = $data['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="group">
                            <h3 class="accordion-header ui-accordion-header ui-state-default ui-accordion-icons ui-sortable-handle ui-corner-all" role="tab" id="ui-id-23" aria-controls="ui-id-24" aria-selected="false" aria-expanded="false" tabindex="0">
                                <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
                                <?php echo e($i.' '.$row->title, false); ?>


                            </h3>

                            <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-24" aria-labelledby="ui-id-23" role="tabpanel" style="display: none;" aria-hidden="true">
                                <p>
                                    <?php echo $row->message; ?>

                                </p>
                                <div class="align-right" style="font-weight: 600">
                                    <hr class="hr-4">
                                    Publish Date: <?php echo e(\Carbon\Carbon::parse($row->publish_date)->format('Y-m-d'), false); ?>

                                    <hr class="hr-4">
                                    End Date: <?php echo e(\Carbon\Carbon::parse($row->end_date)->format('Y-m-d'), false); ?>

                                    <hr class="hr-4">

                                    Visible For:
                                    <?php if(isset($row->display_group)): ?>
                                        <?php ($groups = explode(',',$row->display_group)); ?>
                                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="btn-group">
                                            <span data-toggle="dropdown" class="btn btn-primary btn-sm btn-info" >
                                                <?php echo e(\App\Facades\ViewHelperFacade::getRoleNameId($group), false); ?>

                                            </span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>

                                    <hr class="hr-10">
                                    <a class="btn-primary btn-sm" href="<?php echo e(route($base_route.'.edit', ['id' => $row->id]), false); ?>"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</a>
                                    <a class="btn-danger btn-sm bootbox-confirm" href="<?php echo e(route($base_route.'.delete', ['id' => $row->id]), false); ?>"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete</a>

                                </div>
                            </div>
                        </div>

                        <?php ($i++); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php else: ?>
                No data found.
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/info/notice/includes/table.blade.php ENDPATH**/ ?>