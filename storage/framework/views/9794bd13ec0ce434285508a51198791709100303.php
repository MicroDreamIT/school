
<?php $__env->startSection('content'); ?>
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Transfer Certificate Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Certificate</a>
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
            <?php echo $__env->make('certificate.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- PAGE CONTENT BEGINS -->
                     <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                       
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
                      
                   <?php echo $__env->make($view_path.'.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-horizontal ">
                                 <?php echo $__env->make($view_path.'.includes.search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="hr hr-18 dotted hr-double"></div>
                        
                            <?php echo $__env->make($view_path.'.includes.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    

<?php $__env->stopSection(); ?>
    </div>

  <!-- inline scripts related to this page -->
  <?php $__env->startSection('js'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#filter-btn').click(function () {
                <?php echo $__env->make('student.includes.common-script.student_filter_common_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                var tc_num = $('input[name="tc_num"]').val();
                var issue_start_date = $('input[name="issue_start_date"]').val();

                var issue_end_date = $('input[name="issue_end_date"]').val();
                var leave_start_date = $('input[name="leave_start_date"]').val();

                var leave_end_date = $('input[name="leave_end_date"]').val();

                var character = $('input[name="character"]').val();
                var paid_fee_status = $('input[name="paid_fee_status"]').val();
                var qualified_to_promote = $('input[name="qualified_to_promote"]').val();
                var leaving_time_class = $('input[name="leaving_time_class"]').val();

                if (issue_start_date !== '') {
                    if (flag) {
                        url += '&issue-start-date=' + issue_start_date;
                    } else {
                        url += '?issue-start-date=' + issue_start_date;
                        flag = true;
                    }
                }

                if (issue_end_date !== '') {
                    if (flag) {
                        url += '&issue-end-date=' + issue_end_date;
                    } else {
                        url += '?issue-end-date=' + issue_end_date;
                        flag = true;
                    }
                }

                if (leave_start_date !== '') {
                    if (flag) {
                        url += '&leave-start-date=' + leave_start_date;
                    } else {
                        url += '?leave-start-date=' + leave_start_date;
                        flag = true;
                    }
                }

                if (leave_end_date !== '') {
                    if (flag) {
                        url += '&leave-end-date=' + leave_end_date;
                    } else {
                        url += '?leave-end-date=' + leave_end_date;
                        flag = true;
                    }
                }

                if (tc_num !== '') {
                    if (flag) {
                        url += '&tc_num=' + tc_num;
                    } else {
                        url += '?tc_num=' + tc_num;
                        flag = true;
                    }
                }

                if (character !== '') {
                    if (flag) {
                        url += '&character=' + character;
                    } else {
                        url += '?character=' + character;
                        flag = true;
                    }
                }

                if (paid_fee_status !== '') {
                    if (flag) {
                        url += '&paid_fee_status=' + paid_fee_status;
                    } else {
                        url += '?paid_fee_status=' + paid_fee_status;
                        flag = true;
                    }
                }

                if (qualified_to_promote !== '') {
                    if (flag) {
                        url += '&qualified_to_promote=' + qualified_to_promote;
                    } else {
                        url += '?qualified_to_promote=' + qualified_to_promote;
                        flag = true;
                    }
                }

                if (leaving_time_class !== '') {
                    if (flag) {
                        url += '&leaving_time_class=' + leaving_time_class;
                    } else {
                        url += '?leaving_time_class=' + leaving_time_class;
                        flag = true;
                    }
                }
                location.href = url;
            });

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
    </script>

    <?php echo $__env->make('includes.scripts.inputMask_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.delete_confirm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.bulkaction_confirm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.dataTable_scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('includes.scripts.datepicker_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/certificate/transfer/index.blade.php ENDPATH**/ ?>