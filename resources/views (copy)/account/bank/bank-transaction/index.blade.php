
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Bank Transaction Manager </h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Detail</a>
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
                      
                @include($view_path.'.includes.buttons')
                        <div class="form-horizontal ">
                                    @include($view_path.'.includes.search_form')
                            <div class="hr hr-18 dotted hr-double"></div>
                          @include($view_path.'.includes.table')
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


   <!-- inline scripts related to this page -->
    <script type="text/javascript">
        $(document).ready(function () {

            $('#filter-btn').click(function (event) {

                var url = '{{ $data['url'] }}';
                var flag = false;
                var banks_id = $('select[name="banks_id"]').val();
                var tr_start_date = $('input[name="tr_start_date"]').val();
                var tr_end_date = $('input[name="tr_end_date"]').val();

                if (banks_id !== '') {
                    url += '?banks_id=' + banks_id;
                    flag = true;
                }

                if (tr_start_date !== '') {

                    if (flag) {

                        url += '&tr-start-date=' + tr_start_date;

                    } else {

                        url += '?tr-start-date=' + tr_start_date;
                        flag = true;

                    }
                }

                if (tr_end_date !== '') {

                    if (flag) {

                        url += '&tr-end-date=' + tr_end_date;

                    } else {

                        url += '?tr-end-date=' + tr_end_date;
                        flag = true;

                    }
                }
           event.preventDefault();
           $('.new-content-div').load(url, function() { reload_datatable(); });
                //location.href = url;

            });


        });

    </script>
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.datepicker_script')
    @include('includes.scripts.dataTable_scripts')