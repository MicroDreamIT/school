<div id="accordion" class="accordion-style1 panel-group hidden-print">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false">
                    <h3 class="header large lighter blue btn btn-primary">
                        <i class="bigger-110 ace-icon fa fa-angle-double-right" data-icon-hide="ace-icon fa fa-angle-double-down" data-icon-show="ace-icon fa fa-angle-double-right"></i>
                        Filter <?php echo e($panel, false); ?>

                        <i class="fa fa-filter" aria-hidden="true"></i>&nbsp;
                    </h3>
                </a>
            </h4>
        </div>

        <div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">
            <div class="panel-body">
                
                <div class="clearfix">
                    <div class="form-horizontal" id="filterDiv">
                        <div class="row">
                            <?php echo Form::label('isbn_number', 'ISBN Number', ['class' => 'col-sm-2 control-label']); ?>

                            <div class="col-sm-3">
                                <?php echo Form::text('isbn_number', null, ["class" => "form-control border-form","autofocus"]); ?>

                            </div>

                            <?php echo Form::label('code', 'Code', ['class' => 'col-sm-1 control-label']); ?>

                            <div class="col-sm-2">
                                <?php echo Form::text('code', null, ["class" => "form-control border-form"]); ?>

                            </div>

                            <?php echo Form::label('categories', 'Category', ['class' => 'col-sm-1 control-label']); ?>

                            <div class="col-sm-3">
                                
                                <select name="categories" class="form-control chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Category..." >
                                    <option value="">  </option>
                                    <?php $__currentLoopData = $data['categories']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key, false); ?>"><?php echo e($category, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <?php echo Form::label('title', 'Book Name', ['class' => 'col-sm-2 control-label']); ?>

                            <div class="col-sm-3">
                                <?php echo Form::text('title', null, ["class" => "form-control border-form"]); ?>

                            </div>


                            <?php echo Form::label('author', 'Author', ['class' => 'col-sm-1 control-label']); ?>

                            <div class="col-sm-2">
                                <?php echo Form::text('author', null, ["class" => "form-control border-form"]); ?>

                            </div>

                            <?php echo Form::label('rack_location', 'Rack Location', ['class' => 'col-sm-2 control-label']); ?>

                            <div class="col-sm-2">
                                <?php echo Form::text('rack_location', null, ["class" => "form-control border-form"]); ?>

                            </div>

                        </div>
                        <br/>
                        <div class="row">
                            <?php echo Form::label('language', 'Language', ['class' => 'col-sm-2 control-label']); ?>

                            <div class="col-sm-3">
                                <?php echo Form::text('language', null, ["class" => "form-control border-form"]); ?>

                            </div>

                            <?php echo Form::label('publisher', 'Publisher', ['class' => 'col-sm-1 control-label']); ?>

                            <div class="col-sm-2">
                                <?php echo Form::text('publisher', null, ["class" => "form-control border-form"]); ?>

                            </div>

                            <?php echo Form::label('publish_year', 'Publish Year', ['class' => 'col-sm-2 control-label']); ?>

                            <div class="col-sm-2">
                                <?php echo Form::text('publish_year', null, ["class" => "form-control border-form"]); ?>

                            </div>
                        </div>
                        <br/>
                        <div class="row">

                            <?php echo Form::label('edition', 'Edition', ['class' => 'col-sm-2 control-label']); ?>

                            <div class="col-sm-3">
                                <?php echo Form::text('edition', null, ["class" => "form-control border-form"]); ?>

                            </div>

                            <?php echo Form::label('series', 'Series', ['class' => 'col-sm-1 control-label']); ?>

                            <div class="col-sm-2">
                                <?php echo Form::text('series', null, ["class" => "form-control border-form"]); ?>

                            </div>

                            <?php echo Form::label('edition_year', 'Edition Year', ['class' => 'col-sm-2 control-label']); ?>

                            <div class="col-sm-2">
                                <?php echo Form::text('edition_year', null, ["class" => "form-control border-form"]); ?>

                            </div>
                        </div>
                        <br/>
                    </div>
                </div>
                <div class="clearfix form-actions">
                    <div class="align-right">
                        <button class="btn btn-info" type="submit" id="filter-btn">
                            <i class="fa fa-filter bigger-110"></i>
                            Filter
                        </button>
                    </div>
                </div>
                
<br/>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/viholddep/public_html/edu/resources/views/library/book/includes/search_form.blade.php ENDPATH**/ ?>