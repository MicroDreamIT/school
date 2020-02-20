<br/>
<div class="row">
    <?php echo Form::label('title', 'Title', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-10">
        <?php echo Form::text('title', null, ["placeholder" => "e.g. University Level", "class" => "form-control border-form upper","required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>From(%)</th>
            <th>To(%)</th>
            <th>Point</th>
            <th>Desc.</th>
            <th>
                <button type="button" class="btn btn-xs btn-primary pull-right" id="load-grade-html">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add
                </button>
            </th>
        </tr>
        </thead>

        <tbody id="grade_wrapper">

        <?php if(isset($data['row'])): ?>

            <?php $__currentLoopData = $data['grade_scale']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade_scale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php echo $__env->make($view_path.'.includes.grade_tr_edit', ['attribute_groups' => $data['grade_scale'],'attribute' => $grade_scale], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endif; ?>

        </tbody>

    </table>
</div>
<br/><?php /**PATH /home/viholddep/public_html/edu/resources/views/academic/grading/includes/form.blade.php ENDPATH**/ ?>