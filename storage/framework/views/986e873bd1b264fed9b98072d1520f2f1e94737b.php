
<?php $__env->startSection('content'); ?>

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Vehicle Manager </h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Details</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Detail
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                   <?php echo $__env->make('transport.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
                                           <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('includes.validation_error_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Student Documents Manager</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="row">
                        
                        <div class="col-md-4 col-xs-12">
                            <br/>
                              <?php if(isset($data['row']) && $data['row']->count() > 0): ?>
                        <?php echo $__env->make($view_path.'.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                        <?php echo $__env->make($view_path.'.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                        </div>

                        <div class="col-md-8 col-xs-12">
                        <?php echo $__env->make($view_path.'.includes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div><!-- /.col -->
                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>
<?php $__env->stopSection(); ?>

  <?php $__env->startSection('js'); ?>   <!-- page specific plugin scripts -->
    <script src="<?php echo e(asset('assets/js/select2.min.js'), false); ?>"></script>

    <script>
        $(document).ready(function () {
            /*Change Field Value on Capital Letter When Keyup*/
            $(function() {
                $('.upper').keyup(function() {
                    this.value = this.value.toUpperCase();
                });
            });


            $('select[name="find_staffs"]').select2({
                placeholder: 'Select Staffs...',
                ajax: {
                    url: '<?php echo e(route('transport.staff-autocomplete'), false); ?>',
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }

            });

            $('#load-html-btn').click(function () {
                //$chkIds = document.getElementsByName('food_items_id[]');
                var staff_id = $('select[name="find_staffs"]').val();

                if (!staff_id)
                    toastr.warning("Please, Choose Staff.", "Warning");
                else {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo e(route('transport.vehicle.staff-html'), false); ?>',
                        data: {
                            _token: '<?php echo e(csrf_token(), false); ?>',
                            id: staff_id
                        },
                        success: function (response) {
                            var data = $.parseJSON(response);
                            if (data.error) {
                                toastr.warning(data.message, "warning");
                            } else {
                                $('#staff_wrapper').append(data.html);
                                //toastr.success(data.message, "success");
                            }
                        }
                    });
                }
            });

        });
    </script>

    <?php echo $__env->make('includes.scripts.delete_confirm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.bulkaction_confirm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.dataTable_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/vehicle/index.blade.php ENDPATH**/ ?>