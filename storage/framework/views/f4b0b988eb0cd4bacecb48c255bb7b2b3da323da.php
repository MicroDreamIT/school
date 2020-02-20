
<?php $__env->startSection('content'); ?>


    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Transport User Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Transport</a>
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
                                    <h4 class="card-title">Transport User List </h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="row">
                        
                        <div class="col-md-12 col-xs-12">
                            <br/>
                                <?php echo $__env->make($view_path.'.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                         <div class="col-md-12 col-xs-12">
                            <br/>
                        
                        </div>
                          

                        <div class="col-md-12  m-2">
                        <?php echo Form::open(['route' => $base_route, 'method' => 'GET', 'class' => 'form-horizontal',
                                        'id' => 'validation-form', "enctype" => "multipart/form-data"]); ?>

                        <?php echo $__env->make($view_path.'.includes.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo Form::close(); ?>

                        <br/>
                        <div class="m-2">
                        <!-- PAGE CONTENT BEGINS -->
                            <?php echo $__env->make($view_path.'.includes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make($view_path.'.includes.renew_model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make($view_path.'.includes.shift_model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
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
   <!-- inline scripts related to this page -->
    <?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready(function () {

            /*Change Field Value on Capital Letter When Keyup*/
            $(function() {
                $('.upper').keyup(function() {
                    this.value = this.value.toUpperCase();
                });
            });
            /*end capital function*/

            $('#filter-btn').click(function () {
                var flag = false;
                var user_type = $('select[name="user_type"]').val();
                var reg_no = $('input[name="reg_no"]').val();
                var status = $('select[name="status"]').val();
                var route = $('select[name="route"]').val();
                var vehicle = $('select[name="vehicle_select"]').val();

                if (user_type !== '' & user_type >0) {
                    flag = true;
                }else{
                    toastr.warning('Please Select Type', 'Warning:')
                    return false;
                }

                if (reg_no !== '') {
                    flag = true;
                }


                if (status !== ''  && status > 0) {
                    flag = true;
                }

                if (route !== '' && route > 0 ) {
                    flag = true;
                }

                if (vehicle !== '' && vehicle > 0 ) {
                    flag = true;
                }

                if(flag){
                    return true;
                }else{
                    toastr.warning('No any Target to Search', 'Warning:')
                    return false;
                }
            });

            $('#renew-btn').click(function () {
                var flag = false;
                var route = $('select[name="route_assign"]').val();
                var vehicle = $('select[name="vehicle_assign"]').val();
                if (route > 0 && vehicle >0 ) {
                    return true;
                }else{
                    toastr.info('Please Select Route & Vehicle Correctly', 'Info:');
                    return false;
                }
            });

            $('#shift-btn').click(function () {
                var flag = false;
                var route = $('select[name="route_shift"]').val();
                var vehicle = $('select[name="vehicle_shift"]').val();
                if (route > 0 && vehicle >0 ) {
                    return true;
                }else{
                    toastr.info('Please Select Route & Vehicle Correctly', 'Info:');
                    return false;
                }
            });

            $('#bulk-shift-btn').click(function () {
                var flag = false;
                var route = $('select[name="route_bulk"]').val();
                var vehicle = $('select[name="vehicle_bulk"]').val();
                if (route > 0 && vehicle > 0 ) {
                    $chkIds = document.getElementsByName('chkIds[]');
                    var $chkCount = 0;
                    $length = $chkIds.length;
                    for (var $i = 0; $i < $length; $i++) {
                        if ($chkIds[$i].type == 'checkbox' && $chkIds[$i].checked) {
                            $chkCount++;
                        }
                    }

                    if ($chkCount <= 0) {
                        toastr.info("Please, Select At Least One Record.", "Info:");
                        return false;
                    }

                    var $this = $(this);
                    var bulk_action = $this.attr('attr-action-type');
                    var form = $('#bulk_action_form');

                    bootbox.confirm("Are you sure, You Want To "+bulk_action+" Using Bulk Action?<br>Please, Be Sure When You Use Bulk Action. It Effects All The Selected Data.", function(result) {
                        if(result) {
                            $(form).prepend('<input type="hidden" name="bulk_action" value="'+bulk_action+'">')
                            $('#bulk_action_form').submit();
                        }
                    });
                }else{
                    toastr.info('Please Select Route & Vehicle Correctly', 'Info:');
                    return false;
                }
            });

            $('#bulk-active-btn').click(function () {
                var flag = false;
                var route = $('select[name="route_bulk"]').val();
                var vehicle = $('select[name="vehicle_bulk"]').val();
                if (route > 0 && vehicle > 0 ) {
                    $chkIds = document.getElementsByName('chkIds[]');
                    var $chkCount = 0;
                    $length = $chkIds.length;
                    for (var $i = 0; $i < $length; $i++) {
                        if ($chkIds[$i].type == 'checkbox' && $chkIds[$i].checked) {
                            $chkCount++;
                        }
                    }

                    if ($chkCount <= 0) {
                        toastr.info("Please, Select At Least One Record.", "Info:");
                        return false;
                    }

                    var $this = $(this);
                    var bulk_action = $this.attr('attr-action-type');
                    var form = $('#bulk_action_form');

                    bootbox.confirm("Are you sure, You Want To "+bulk_action+" Using Bulk Action?<br>Please, Be Sure When You Use Bulk Action. It Effects All The Selected Data.", function(result) {
                        if(result) {
                            $(form).prepend('<input type="hidden" name="bulk_action" value="'+bulk_action+'">')
                            $('#bulk_action_form').submit();
                        }
                    });
                }else{
                    toastr.info('Please Select Route & Vehicle Correctly', 'Info:');
                    return false;
                }
            });


        });


        function loadAllVehicles($this) {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('transport.find-vehicles'), false); ?>',
                data: {
                    _token: '<?php echo e(csrf_token(), false); ?>',
                    route_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.vehicle_select').html('').append('<option value="0">Select Vehicle...</option>');
                        $.each(data.vehicles, function(key,valueObj){
                            $('.vehicle_select').append('<option value="'+valueObj.id+'">'+valueObj.number+' | '+valueObj.type+'</option>');
                        });
                    }
                }
            });

        }


        function loadVehicle($this) {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('transport.find-vehicles'), false); ?>',
                data: {
                    _token: '<?php echo e(csrf_token(), false); ?>',
                    route_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.vehicle_select').html('').append('<option value="0">Select Vehicle...</option>');
                        $.each(data.vehicles, function(key,valueObj){
                            $('.vehicle_select').append('<option value="'+valueObj.id+'">'+valueObj.number+' | '+valueObj.type+'</option>');
                        });
                    }
                }
            });

        }

    </script>
    <script type="text/javascript">
        jQuery(function($) {
            $(".user-confirm").on('click', function() {
                var $this = $(this);
                bootbox.confirm({
                        title: "<div class='widget-header'><h4 class='smaller'><i class='ace-icon fa fa-exclamation-triangle red'></i> Leave Confirmation</h4></div>",
                        message: "<div class='ui-dialog-content ui-widget-content' style='width: auto; min-height: 30px; max-height: none; height: auto;'><div class='alert alert-info bigger-110'>" +
                        "This Transport User Leave When You Click on Yes Leave Now.<br>Don't Be Afraid, You Will Able To ReActive in Future</div>" +
                        "<p class='bigger-110 bolder center grey'><i class='ace-icon fa fa-hand-o-right blue bigger-120'></i>Are you sure?</p>",
                        size: 'small',
                        buttons: {
                            confirm: {
                                label : "<i class='ace-icon fa fa-history'></i> Yes, Leave Now!",
                                className: "btn-danger btn-sm",
                            },
                            cancel: {
                                label: "<i class='ace-icon fa fa-remove'></i> Cancel",
                                className: "btn-primary btn-sm",
                            }
                        },
                        callback: function(result) {
                            if(result) {
                                location.href = $this.attr('href');
                            }
                        }
                    }
                );
                return false;
            });
        })
    </script>

    <?php echo $__env->make($view_path.'.includes.modal_values_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.delete_confirm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.bulkaction_confirm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.dataTable_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/transport/user/index.blade.php ENDPATH**/ ?>