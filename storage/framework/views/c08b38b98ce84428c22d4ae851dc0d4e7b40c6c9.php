
<?php $__env->startSection('content'); ?>
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Fees Master Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Fees</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Add Fees
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
          <?php echo $__env->make('account.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- PAGE CONTENT BEGINS -->
                      <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                      <?php if(isset($data['row']) && $data['row']->count() > 0): ?>
                            <?php echo $__env->make($base_route.'.includes.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php else: ?>
                       
                        <?php echo $__env->make('includes.validation_error_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                             
                                <div class="card-content" style="margin:20px;">
                                    
            
                <div class="row">
                    <div class="col-md-12 ">
                      
                 <?php echo $__env->make('account.fees.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-horizontal ">
                                  <?php echo $__env->make($view_path.'.includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="hr hr-18 dotted hr-double"></div>
                        <?php echo $__env->make($base_route.'.includes.add', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make($view_path.'.includes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
         
             






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

    <?php $__env->startSection('js'); ?>

<?php echo $__env->make('includes.scripts.jquery_validation_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- inline scripts related to this page -->

    <script type="text/javascript">
        $(document).ready(function () {
            $('#filter-btn').click(function () {
                <?php echo $__env->make('student.includes.common-script.student_filter_common_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                var facility = $('select[name="facility"]').val();

                if (facility >0) {
                    if (flag) {
                        url += '&facility=' + facility;
                    } else {
                        url += '?facility=' + facility;
                        flag = true;
                    }
                }

                location.href = url;
            });

            $('#load-fee-html').click(function () {

                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route('account.fees.master.fee-html'), false); ?>',
                    data: {
                        _token: '<?php echo e(csrf_token(), false); ?>',
                    },
                    success: function (response) {
                        var data = $.parseJSON(response);

                        if (data.error) {
                            //$.notify(data.message, "warning");
                        } else {

                            $('#fee_wrapper').append(data.html);
                            $(document).find('option[value="0"]').attr("value", "");
                        }
                    }
                });

            });

            /*Add Fees */
            $('#fee-add-btn').click(function () {
                var fee_head = $('select[name="fee_head[]"]').val();

                if(fee_head !== undefined) {
                    $chkIds = document.getElementsByName('chkIds[]');
                    var $chkCount = 0;
                    $length = $chkIds.length;

                    for(var $i = 0; $i < $length; $i++){
                        if($chkIds[$i].type == 'checkbox' && $chkIds[$i].checked){
                            $chkCount++;
                        }
                    }

                    if($chkCount <= 0){
                        toastr.warning("Please, Select At Least One Student Record.");
                        return false;
                    }

                    var form = $('#fee_add_form');

                }else{
                    toastr.warning('Please, Add At Least One Fee Head.');
                    return false;
                }


            });
            /*Add Fees End*/

           /* $('select.feeHead').change(function() {
                var feeValue = $('select.feeHead').find(':selected').data('feeHeadAmount');
                $('.feeAmount').val(feeValue);
            });*/

        });

        function loadSemesters($this) {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('student.find-semester'), false); ?>',
                data: {
                    _token: '<?php echo e(csrf_token(), false); ?>',
                    faculty_id: $this.value
                },
                success: function (response) {
                    var data = $.parseJSON(response);
                    if (data.error) {
                        $.notify(data.message, "warning");
                    } else {
                        $('.semester_select').html('').append('<option value="0">Select Sem./Sec.</option>');
                        $.each(data.semester, function(key,valueObj){
                            $('.semester_select').append('<option value="'+valueObj.id+'">'+valueObj.semester+'</option>');
                        });
                    }
                }
            });

        }

        function setAmount($this){
            $randLinkId = $($this.options[$this.selectedIndex]).attr('data-rand-id');
            $feeHeadAmount = $($this.options[$this.selectedIndex]).attr('data-feeHead-amount');
            console.log($feeHeadAmount);
            document.getElementById($randLinkId).value = $feeHeadAmount;
           //$('input.feeAmount').val($($this.options[$this.selectedIndex]).attr('data-feeHead-amount'));
        }

    </script>

    <?php echo $__env->make('account.fees.master.includes.common-script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.inputMask_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.dataTable_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.datepicker_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/account/fees/master/add.blade.php ENDPATH**/ ?>