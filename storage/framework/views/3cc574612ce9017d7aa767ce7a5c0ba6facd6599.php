<?php if (\Entrust::ability('super-admin', 'user-add')) : ?>

<div class="row">

    <?php if( !$data['staff_login']): ?>
    
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Create Staff Login Access</h4>

        <?php echo Form::open(['route' => 'staff.user.create', 'method' => 'POST', 'class' => 'form-horizontal',
                       'id' => 'validation-form', "enctype" => "multipart/form-data"]); ?>

            <?php echo Form::hidden('role_id', 5); ?>

            <?php echo Form::hidden('hook_id', $data['staff']->id); ?>

<br/>
            <div class="row">
                <?php echo Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']); ?>

                <div class="col-sm-4">
                    <?php echo Form::text('name', $data['staff']->first_name.' '.
                        $data['staff']->middle_name.' '.$data['staff']->last_name, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

                    <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <?php echo Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']); ?>

                <div class="col-sm-4">
                    <?php echo Form::email('email', $data['staff']->email, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

                    <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <br/>
            <div class="row">
                <?php echo Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']); ?>

                <div class="col-sm-4">
                    <?php echo Form::password('password',  ["placeholder" => "", "class" => "form-control border-form", "id"=>"pass", "required"]); ?>

                    <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <?php echo Form::label('confirmPassword', 'Confirm Password', ['class' => 'col-sm-2 control-label']); ?>

                <div class="col-sm-4">
                    <?php echo Form::password('confirmPassword',  ["placeholder" => "", "class" => "form-control border-form"/*,"onkeyup"=>"passCheck()"*/,"id"=>"repatpass", "required"]); ?>

                    <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'confirmPassword'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="space-4"></div>

            <div class="clearfix form-actions">
                <div class="col-md-12 align-right">
                    <button class="btn" type="reset">
                        <i class="fa fa-undo bigger-110"></i>
                        Reset
                    </button>

                    <button class="btn btn-info" type="submit">
                        <i class="fa fa-save bigger-110"></i>
                        Create Login Access
                    </button>
                </div>
            </div>

            <div class="hr hr-24"></div>
        <?php echo Form::close(); ?>

    </div>
    <?php else: ?>
    
    <div class="col-xs-12">
        <h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Edit Staff Login Access</h4>
        <a href="<?php echo e(route('staff.user.active', ['id' => $data['staff_login']->id]), false); ?>" title="Active" class="btn-success btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Un-Lock User</a>
        <a href="<?php echo e(route('staff.user.in-active', ['id' => $data['staff_login']->id]), false); ?>" title="In-Active" class="btn-warning btn-sm"><i class="fa fa-lock" aria-hidden="true"></i> Lock User</a>
        <a href="<?php echo e(route('staff.user.delete', ['id' => $data['staff_login']->id]), false); ?>" title="Delete" class="btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete User</a>
        <div class="hr hr-24"></div>

        <?php echo Form::model($data['staff_login'], ['route' => ['staff.user.update', $data['staff_login']->id], 'method' => 'POST', 'class' => 'form-horizontal',
                  'id' => 'validation-form', "enctype" => "multipart/form-data"]); ?>

        <?php echo Form::hidden('id', $data['staff_login']->id); ?>

        <?php echo Form::hidden('role_id', 5); ?>

        <?php echo Form::hidden('hook_id', $data['staff']->id); ?>


        <div class="form-group">
            <?php echo Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-4">
                <?php echo Form::text('name', null, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php echo Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-4">
                <?php echo Form::email('email', null, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <div class="form-group">
            <?php echo Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-4">
                <?php echo Form::password('password',  ["placeholder" => "", "class" => "form-control border-form", "id"=>"pass", "required"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php echo Form::label('confirmPassword', 'Confirm Password', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-4">
                <?php echo Form::password('confirmPassword',  ["placeholder" => "", "class" => "form-control border-form"/*,"onkeyup"=>"passCheck()"*/,"id"=>"repatpass", "required"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'confirmPassword'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <div class="col-sm-4">
            <label data-toggle="dropdown" class="label <?php echo e($data['staff_login']->status == 'active'?"label-success":"label-danger", false); ?>" >
                <?php echo e($data['staff_login']->status == 'active'?"Active User":"User Locked", false); ?>

            </label>
        </div>
       <div class="clearfix hr-8"></div>

        <div class="clearfix form-actions">
            <div class="col-md-12 align-right">
                <button class="btn" type="reset">
                    <i class="fa fa-undo bigger-110"></i>
                    Reset
                </button>

                <button class="btn btn-info" type="submit">
                    <i class="fa fa-save bigger-110"></i>
                Update Detail
                </button>
            </div>
        </div>


        <div class="hr hr-24"></div>
        <?php echo Form::close(); ?>

    </div>
    <?php endif; ?>

</div>
<?php endif; // Entrust::ability ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/staff/detail/includes/login-access.blade.php ENDPATH**/ ?>