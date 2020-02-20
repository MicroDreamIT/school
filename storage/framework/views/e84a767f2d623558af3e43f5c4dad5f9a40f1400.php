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
                    <th>Category</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Total</th>
                    <th>Issued</th>
                    <th>Available</th>
                    <th>Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($data['books']) && $data['books']->count() > 0): ?>
                    <?php ($i=1); ?>
                    <?php $__currentLoopData = $data['books']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center first-child">
                                <label>
                                    <input type="checkbox" name="chkIds[]" value="<?php echo e($books->id, false); ?>" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>
                            <td><?php echo e($i, false); ?></td>
                            <td>
                                <a href="<?php echo e(route('library.book'), false); ?>?categories=<?php echo e($books->categories, false); ?>">
                                    <?php echo e(ViewHelper::getBookCategoryById( $books->categories), false); ?>

                                </a>
                            </td>
                            <td>
                                <?php if($books->image): ?>
                                    <a href="<?php echo e(route($base_route.'.view', ['id' => $books->id]), false); ?>">
                                        <img src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'book'.DIRECTORY_SEPARATOR.$books->image), false); ?>"
                                             class="img-responsive" width="40px">
                                    </a>
                                <?php endif; ?>
                            </td>
                            <td><a href="<?php echo e(route($base_route.'.view', ['id' => $books->id]), false); ?>"><?php echo e($books->title, false); ?> </a></td>
                            <td>
                                <a href="<?php echo e(route('library.book'), false); ?>?author=<?php echo e($books->author, false); ?>">
                                    <?php echo e($books->author, false); ?>

                                </a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('library.book'), false); ?>?publisher=<?php echo e($books->publisher, false); ?>">
                                    <?php echo e($books->publisher, false); ?>

                                </a>
                            </td>
                            <td><?php echo e($books->bookCollection()->count(), false); ?> </td>
                            <td><?php echo e($books->bookCollection()->where('book_status','=',2)->count(), false); ?> </td>
                            <td><?php echo e($books->bookCollection()->where('book_status','=',1)->count(), false); ?> </td>
                            <td class="hidden-480 ">
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-sm dropdown-toggle <?php echo e($books->status == 'active'?"btn-info":"btn-warning", false); ?>" >
                                        <?php echo e($books->status == 'active'?"Active":"In Active", false); ?>

                                        <span class="ace-icon fa fa-caret-down icon-on-right"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo e(route($base_route.'.active', ['id' => $books->id]), false); ?>" title="Active"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        </li>

                                        <li>
                                            <a href="<?php echo e(route($base_route.'.in-active', ['id' => $books->id]), false); ?>" title="In-Active"><i class="fa fa-remove" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a href="<?php echo e(route($base_route.'.view', ['id' => $books->id]), false); ?>" class="btn btn-primary btn-sm">
                                        <i class="ace-icon fa fa-eye bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.edit', ['id' => $books->id]), false); ?>" class="btn btn-success btn-sm">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a href="<?php echo e(route($base_route.'.delete', ['id' => $books->id]), false); ?>" class="btn btn-danger btn-sm bootbox-confirm" >
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
                                                <a href="<?php echo e(route($base_route.'.view', ['id' => $books->id]), false); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="blue">
                                                        <i class="ace-icon fa fa-eye bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo e(route($base_route.'.edit', ['id' => $books->id]), false); ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="green">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="<?php echo e(route($base_route.'.delete', ['id' => $books->id]), false); ?>" class="tooltip-error bootbox-confirm" data-rel="tooltip" title="Delete">
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
                <?php else: ?>
                    <tr>
                        <td colspan="12">No <?php echo e($panel, false); ?> data found. Please Filter <?php echo e($panel, false); ?> to show. </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/library/book/includes/table.blade.php ENDPATH**/ ?>