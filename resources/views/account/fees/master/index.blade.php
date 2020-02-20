@extends('layouts.master_new')



@section('content')
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Details</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Student</a>
                                    </li>
                                    <li class="breadcrumb-item active">Detail
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
            @include('account.includes.buttons')
                    <!-- PAGE CONTENT BEGINS -->
                      @include('includes.flash_messages')
                       
                        @include('includes.validation_error_messages')
                </div>
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                             
                                <div class="card-content" style="margin:20px;">
                                    
            
                <div class="row">
                    <div class="col-md-12 ">
                      
               @include('account.fees.includes.buttons')
                        <div class="form-horizontal ">
                                   @include($view_path.'.includes.search_form')
                            <div class="hr hr-18 dotted hr-double"></div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
         
            @include($view_path.'.includes.feemaster_table')






                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    
    </div>

    @endsection


@section('js')
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.datepicker_script')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        $('#filter-btn').click(function () {
            @include('student.includes.common-script.student_filter_common_script')

            var fee_due_date_start = $('input[name="fee_due_date_start"]').val();
            var fee_due_date_end = $('input[name="fee_due_date_end"]').val();
            var fee_heads = $('select[name="fee_heads"]').val();
            var amount_start = $('input[name="amount_start"]').val();
            var amount_end = $('input[name="amount_end"]').val();

            if (fee_due_date_start !== '') {
                if (flag) {
                    url += '&fee_due_date_start=' + fee_due_date_start;
                } else {
                    url += '?fee_due_date_start=' + fee_due_date_start;
                    flag = true;
                }
            }

            if (fee_due_date_end !== '') {
                if (flag) {
                    url += '&fee_due_date_end=' + fee_due_date_end;
                } else {
                    url += '?fee_due_date_end=' + fee_due_date_end;
                    flag = true;
                }
            }

            if (fee_heads > 0) {
                if (flag) {
                    url += '&fee_heads=' + fee_heads;
                } else {
                    url += '?fee_heads=' + fee_heads;
                    flag = true;
                }
            }

            if (amount_start !== '') {
                if (flag) {
                    url += '&amount_start=' + amount_start;
                } else {
                    url += '?amount_start=' + amount_start;
                    flag = true;
                }
            }

            if (amount_end !== '') {
                if (flag) {
                    url += '&amount_end=' + amount_end;
                } else {
                    url += '?amount_end=' + amount_end;
                    flag = true;
                }
            }

            location.href = url;
        });

        function loadSemesters($this) {
            $.ajax({
                type: 'POST',
                url: '{{ route('student.find-semester') }}',
                data: {
                    _token: '{{ csrf_token() }}',
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
@endsection