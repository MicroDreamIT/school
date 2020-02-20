
<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Issue Certificate Manager</h2>
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
                 <?php echo $__env->make('certificate.includes.buttons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              
                          <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <?php echo $__env->make('includes.validation_error_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- PAGE CONTENT BEGINS -->
                           
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header large lighter blue"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search & Verify Student Before Issue Certificate</h4>
                                </div>
                                <div class="card-content" style="margin:20px;">
                                    
                    <div class="row">
                          
                        <div class="col-md-12 col-xs-12">
                            <br/>
                               <?php echo Form::select('students_id', [], null, ["placeholder" => "Type Student Name | Reg.No. | Mobile | Email...", "class" => "col-xs-12 col-sm-12", "style" => "width: 100%;"]); ?>

                                <?php echo $__env->make('includes.form_fields_validation_message', ['name' => 'students_id'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        

                    </div><!-- /.col -->

                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" float-right m-3 ">
                                    <button type="button" class="btn btn btn-primary" id="load-html-btn">
                                        <i class="fa fa-user bigger-120"></i> Verify Student
                                    </button>
                                </div>
                                <div class="col-md-12 m-5">
                        <?php echo $__env->make('certificate.issue.includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </div>
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('assets/js/select2.min.js'), false); ?>"></script>
    <!-- inline scripts related to this page -->
   
    <script type="text/javascript">
        $(document).ready(function () {

            /*date*/
           /* var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!

            var yyyy = today.getFullYear();
            if(dd<10){
                dd='0'+dd;
            }
            if(mm<10){
                mm='0'+mm;
            }
            var today = yyyy +'-'+mm+'-'+ dd;
            $("#date").val( today );*/

            /*Find Student*/
            $('select[name="students_id"]').select2({
                placeholder: 'Search Student...',
                ajax: {
                    url: '<?php echo e(route('student.student-name-autocomplete'), false); ?>',
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

            /*Student Verify*/
            $('#load-html-btn').click(function () {
                $('#student_wrapper').empty();
                var students_id = $('select[name="students_id"]').val();
                if (!students_id)
                    toastr.warning("Please, Choose Student.", "Warning");
                else {

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo e(route('certificate.student-detail-html'), false); ?>',
                        data: {
                            _token: '<?php echo e(csrf_token(), false); ?>',
                            id: students_id
                        },
                        success: function (response) {
                            var data = $.parseJSON(response);

                            if (data.error) {
                            } else {

                                $('#student_wrapper').append(data.html);
                            }
                        }
                    });

                }
            });


        });

    </script>

    <?php echo $__env->make('includes.scripts.inputMask_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.scripts.datepicker_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/viholddep/public_html/edu/resources/views/certificate/issue/add.blade.php ENDPATH**/ ?>