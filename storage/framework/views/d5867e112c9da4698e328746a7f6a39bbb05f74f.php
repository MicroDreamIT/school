<div class="widget-box transparent" id="recent-box">
    <div class="widget-header">
        <h4 class="widget-title lighter smaller p-1">
            <i class="ace-icon fa fa-book blue p-1"></i>Library
        </h4>

        <div class="widget-toolbar no-border">
            <ul class="nav nav-tabs" id="recent-tab">
                <li class="active p-1">
                    <a data-toggle="tab" href="#issue-tab">Book Issue</a>
                </li>

                <li class="p-1">
                    <a data-toggle="tab" href="#returnOver-tab">
                        Return Period Over <span class="badge badge-warning"> <?php echo e($data['book_return_over']->count(), false); ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="widget-body">
        <div class="widget-main padding-4">
            <div class="tab-content padding-8">
                <div id="issue-tab" class="tab-pane active">
                    <?php echo $__env->make('dashboard.includes.library.bookissue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div id="returnOver-tab" class="tab-pane">
                    <?php echo $__env->make('dashboard.includes.library.returnover', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div><!-- /.widget-main -->
    </div><!-- /.widget-body -->
</div><!-- /.widget-box --><?php /**PATH /home/viholddep/public_html/edu/resources/views/dashboard/includes/library.blade.php ENDPATH**/ ?>