@extends('layouts.master_new')
@section('css')
    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
@endsection

@section('content')
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Payroll Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
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
                @include('account.payroll.includes.buttons')
                    @include('includes.flash_messages')
                    <!-- PAGE CONTENT BEGINS -->
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
                            @include('account.includes.buttons')
                        <div class="form-horizontal ">
                         @include($view_path.'.includes.search_form')
                            <div class="hr hr-18 dotted hr-double"></div>
                                    @include($view_path.'.includes.payroll_table')
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

@endsection
@section('js')
   
     <!-- inline scripts related to this page -->
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.datepicker_script')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#filter-btn').click(function () {
                @include('staff.includes.common.staff_filter_common_script')

                var payroll_due_date_start = $('input[name="payroll_due_date_start"]').val();
                var payroll_due_date_end = $('input[name="payroll_due_date_end"]').val();
                var payroll_heads = $('select[name="payroll_heads"]').val();
                var amount_start = $('input[name="amount_start"]').val();
                var amount_end = $('input[name="amount_end"]').val();

                if (payroll_due_date_start !== '') {
                    if (flag) {
                        url += '&payroll_due_date_start=' + payroll_due_date_start;
                    } else {
                        url += '?payroll_due_date_start=' + payroll_due_date_start;
                        flag = true;
                    }
                }

                if (payroll_due_date_end !== '') {
                    if (flag) {
                        url += '&payroll_due_date_end=' + payroll_due_date_end;
                    } else {
                        url += '?payroll_due_date_end=' + payroll_due_date_end;
                        flag = true;
                    }
                }

                if (payroll_heads > 0) {
                    if (flag) {
                        url += '&payroll_heads=' + payroll_heads;
                    } else {
                        url += '?payroll_heads=' + payroll_heads;
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

            $('#load-fee-html').click(function () {

                $.ajax({
                    type: 'POST',
                    url: '{{ route('account.fees.master.fee-html') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function (response) {
                        var data = $.parseJSON(response);

                        if (data.error) {
                            //$.notify(data.message, "warning");
                        } else {

                            $('#fee_wrapper').append(data.html);
                            $(document).find('option[value="0"]').attr("value", "");
                            //$(document).find('option[value="0"]').attr("disabled", "disabled");
                            //$.notify(data.message, "success");
                        }
                    }
                });

            });

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