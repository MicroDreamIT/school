
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Members Manager</h2>
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
          @include('library.includes.buttons')
                    <!-- PAGE CONTENT BEGINS -->
                      @include('includes.flash_messages')
                       
                     
                       
                       @include('includes.validation_error_messages')
                         <br/>
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

@include('includes.scripts.inputMask_script')
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')
    <!-- inline scripts related to this page -->
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

                var url = '{{ $data['url'] }}';
                var flag = false;
                var user_type = $('select[name="user_type"]').val();
                var reg_no = $('input[name="reg_no"]').val();
                var status = $('select[name="status"]').val();

                if (user_type !== '' & user_type >0) {
                    url += '?user_type=' + user_type;
                    flag = true;
                }else{
                    toastr.warning('Please Select Type', 'Warning:');
                    return false;
                }

                if (reg_no !== '') {

                    if (flag) {

                        url += '&reg_no=' + reg_no;

                    } else {

                        url += '?reg_no=' + reg_no;
                        flag = true;

                    }
                }

                if (status !== '' ) {

                    if (status !== 'all') {

                        if (flag) {

                            url += '&status=' + status;

                        } else {

                            url += '?status=' + status;

                        }

                    }
                }

                location.href = url;

            });


        });

    </script>