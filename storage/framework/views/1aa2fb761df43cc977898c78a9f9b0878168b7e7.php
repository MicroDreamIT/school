<h4 class="header large lighter blue">
    <span class="align-left col-md-10">
        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Books
    </span>
    <span class="align-right">
        <a class="btn-success btn-sm" href="<?php echo e(route('library.book.import'), false); ?>"><i class="fa fa-upload" aria-hidden="true"></i> Bulk Import From CSV</a>
    </span>
</h4>
<br/>
<div class="row">
    <?php echo Form::label('isbn_number', 'ISBN Number', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-10">
        <?php echo Form::text('isbn_number', null, ["placeholder" => "", "class" => "form-control border-form","autofocus"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'isbn_number'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<?php if(!isset($data['row'])): ?>
<div class="row">
    <?php echo Form::label('code', 'Code', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('code', null, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'code'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('start', 'Start', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::number('start', null, ["placeholder" => "", "class" => "form-control border-form","min" => "1", "onkeyup"=>"changeStartCode()", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'start'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('end', 'End', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::number('end', null, ["placeholder" => "", "class" => "form-control border-form", "min" => "1", "onkeyup"=>"changeEndCode()", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'end'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('start_preview', 'StartCode', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('start_preview', null, ["placeholder" => "", "class" => "form-control border-form", "readonly"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'start_preview'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('end_preview', 'EndCode', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('end_preview', null, ["placeholder" => "", "class" => "form-control border-form", "readonly"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'end_preview'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('total_copy', 'Total Quantity', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('total_copy', null, ["placeholder" => "", "class" => "form-control border-form", "readonly"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'total_copy'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php endif; ?>
<br/>
<div class="row">

    <?php echo Form::label('title', 'Book Name', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('title', null, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('sub_title', 'Sub Title', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-4">
        <?php echo Form::text('sub_title', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'sub_title'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">

    <?php echo Form::label('categories', 'Category', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::select('categories', $data['categories'], null, ['class' => 'form-control chosen-select', "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'faculty'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('edition', 'Edition', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('edition', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'edition'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('edition_year', 'Edition Year', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('edition_year', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'edition_year'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<br/>
<div class="row">
    <?php echo Form::label('language', 'Language', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('language', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'language'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('publisher', 'Publisher', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('publisher', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'publisher'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('publish_year', 'Publish Year', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('publish_year', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'publish_year'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('series', 'Series', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::text('series', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'series'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('author', 'Author', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('author', null, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'author'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('rack_location', 'Rack Location', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('rack_location', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'rack_location'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('price', 'Price', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::number('price', null, ["placeholder" => "", "class" => "form-control border-form", "required"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'price'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('total_pages', 'Page', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::number('total_pages', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'total_pages'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo Form::label('source', 'Source', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-2">
        <?php echo Form::text('source', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'source'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php if(!isset($data['row'])): ?>
        <?php echo Form::label('book_status', 'Books Status', ['class' => 'col-sm-2 control-label']); ?>

        <div class="col-sm-2">
            <?php echo Form::select('book_status', $data['book_status'], null, ['class' => 'form-control', "required"]); ?>

            <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'book_status'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endif; ?>

    <?php echo Form::label('notes', 'Notes', ['class' => 'col-sm-1 control-label']); ?>

    <div class="col-sm-7">
        <?php echo Form::textarea('notes', null, ["placeholder" => "", "class" => "form-control border-form", 'rows'=>"1"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'notes'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<div class="row">
    <?php echo Form::label('main_image', 'Book Image', ['class' => 'col-sm-2 control-label']); ?>

    <div class="col-sm-3">
        <?php echo Form::file('main_image', null, ["placeholder" => "", "class" => "form-control border-form"]); ?>

        <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'main_image'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<br/>
<?php if(isset($data['row']) && $data['row']->image): ?>
    <div class="space-4"></div>
    <div class="row">
        <label class="col-sm-3 control-label no-padding-right">Existing Image</label>
        <div class="col-sm-9">
            <img src="<?php echo e(asset('images/'.$folder_name.'/'.$data['row']->image), false); ?>" width="100">
        </div>
    </div>
<?php endif; ?>
<br/><?php /**PATH /home/viholddep/public_html/edu/resources/views/library/book/includes/form.blade.php ENDPATH**/ ?>