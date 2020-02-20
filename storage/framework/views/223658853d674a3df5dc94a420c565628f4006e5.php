
<div class="row">
    <div class="col-md-12">
        <h4 class="header large lighter blue"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;Edit Login Access</h4>
        <?php echo Form::model($data['student_login'], ['route' => ['user-student.password', $data['student_login']->id], 'method' => 'POST', 'class' => 'form-horizontal']); ?>


        <?php echo Form::hidden('id', $data['student_login']->id); ?>

        <?php echo Form::hidden('role_id', 6); ?>

        <?php echo Form::hidden('hook_id', $data['student']->id); ?>

        <br/>
        <div class="row">
            <?php echo Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-4">
                <?php echo Form::text('name', null, ["placeholder" => "", "class" => "form-control border-form", "disabled"]); ?>

                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'name'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php echo Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']); ?>

            <div class="col-sm-4">
                <?php echo Form::email('email', null, ["placeholder" => "", "class" => "form-control border-form", "disabled"]); ?>

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
        <br/>
        <div class="col-sm-4">
            <label data-toggle="dropdown" class="label <?php echo e($data['student_login']->status == 'active'?"label-success":"label-danger", false); ?>" >
                <?php echo e($data['student_login']->status == 'active'?"Active User":"User Locked", false); ?>

            </label>
        </div>
        <div class="clearfix hr-8"></div>

        <div class="clearfix form-actions">
            <div class="col-md-12 align-right">
                <button class="btn btn-info" type="submit">
                    <i class="fa fa-save bigger-110"></i>
                    Change Password
                </button>
            </div>
        </div>


        <div class="hr hr-24"></div>
        <?php echo Form::close(); ?>

    </div>

</div>
<?php /**PATH /home/viholddep/public_html/edu/resources/views/user-student/detail/includes/login-access.blade.php ENDPATH**/ ?>