<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;<?php echo e($panel, false); ?> List</h4>
        <div class="clearfix">
            <span class="pull-right tableTools-container"></span>
        </div>
    <!-- div.table-responsive -->
        <div class="table-responsive">
            <table  class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>S.N.</th>
                        <th width="15%">Gateway</th>
                        <th>Config</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(isset($data['paymentGateway']) && $data['paymentGateway']->count() > 0): ?>
                        <?php ($i = 1); ?>
                        <?php $__currentLoopData = $data['paymentGateway']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php echo Form::model($Gateway, ['route' => [$base_route.'.update', $Gateway->id], 'method' => 'POST', 'class' => 'form-horizontal', 'id' => 'validation-form', "enctype" => "multipart/form-data"]); ?>

                                <tr>
                                <td><?php echo e($i, false); ?></td>
                                <td>
                                    <a href="<?php echo e($Gateway->link, false); ?>" target="_blank">
                                        <img id="avatar" class="editable img-responsive" alt="<?php echo e($Gateway->identity, false); ?>" src="<?php echo e(asset('assets/images/paymenticon/'.$Gateway->logo.'.png'), false); ?>" width="300px" />
                                    </a>
                                </td>
                                <td>
                                    <?php ($configuarations = json_decode($Gateway->config, true)); ?>
                                    <?php if(isset($configuarations)): ?>
                                        <?php $__currentLoopData = $configuarations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $conf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <label class="col-sm-4 control-label"><?php echo e($key, false); ?></label>
                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo e($conf, false); ?>" name="<?php echo e($key, false); ?>" <?php echo e($Gateway->status=="active"?"":"disabled", false); ?> class="form-control border-form">
                                            </div>
                                           <!-- <hr class="hr-2">-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </td>
                                <td class="hidden-480 ">
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($Gateway->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                            <?php echo e($Gateway->status == 'active'?"Active":"In Active", false); ?>

                                            <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                        </button>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="<?php echo e(route($base_route.'.active', ['id' => $Gateway->id]), false); ?>" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                            </li>

                                            <li>
                                                <a href="<?php echo e(route($base_route.'.in-active', ['id' => $Gateway->id]), false); ?>" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                                <td>
                                    <button class="btn btn-info" type="submit">
                                        <i class="fa fa-save bigger-110"></i>
                Update
                                    </button>
                                </td>
                            </tr>
                            <?php echo Form::close(); ?>

                            <?php ($i++); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr><td colspan="7">No data found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/setting/payment/includes/table.blade.php ENDPATH**/ ?>