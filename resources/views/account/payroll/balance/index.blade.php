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
                            <h2 class="content-header-title float-left mb-0">Payroll Manager</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Balance Payroll Detail</a>
                                    </li>
                                    <li class="breadcrumb-item active">  
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
                      
                @include('account.payroll.includes.buttons')
                        <div class="form-horizontal ">
                                    @include($view_path.'.balance.includes.form')
                            <div class="hr hr-18 dotted hr-double"></div>
                           @include($view_path.'.balance.includes.table')
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
  <!-- inline scripts related to this page -->

  @section('js')

    <script type="text/javascript">
        $(document).ready(function () {
            $('#filter-btn').click(function () {
                @include('staff.includes.common.staff_filter_common_script')
                /*var due_status = $('select[name="due_status"]').val();
                if (due_status !== '' ) {
                    if (due_status !== 'all') {

                        if (flag) {

                            url += '&due_status=' + due_status;

                        } else {

                            url += '?due_status=' + due_status;

                        }

                    }
                }*/
                    location.href = url;
            });
        });
    </script>
    
   
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.jquery_validation_scripts')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.datepicker_script')
 @endsection