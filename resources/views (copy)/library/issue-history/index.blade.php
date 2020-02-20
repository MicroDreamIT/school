
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Library</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Library</a>
                                    </li>
                                    <li class="breadcrumb-item active"> History
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
                      
                
                        <div class="form-horizontal ">
                                @include($view_path.'.issue-history.includes.search_form')
                            <div class="hr hr-18 dotted hr-double"></div>
                        
                          @include($view_path.'.issue-history.includes.table')
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
@include('includes.scripts.jquery_validation_scripts')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        /*Change Field Value on Capital Letter When Keyup*/
        $(function() {
            $('.upper').keyup(function() {
                this.value = this.value.toUpperCase();
            });
        });

        $(document).ready(function () {

            $('#filter-btn').click(function (event) {

                var url = '{{ $data['url'] }}';
                var flag = false;
                var book = $('select[name="book"]').val();
                var category = $('select[name="category"]').val();
                var status = $('select[name="status"]').val();

                var issued_start = $('input[name="issued_start"]').val();
                var issued_end = $('input[name="issued_end"]').val();

                var return_start = $('input[name="return_start"]').val();
                var return_end = $('input[name="return_end"]').val();

                var due_start = $('input[name="due_start"]').val();
                var due_end = $('input[name="due_end"]').val();

                /*if (reg_no !== '') {
                    url += '?reg_no=' + reg_no;
                    flag = true;
                }*/


                if (book !== '' & book >0) {

                    if (flag) {

                        url += '&book=' + book;

                    } else {

                        url += '?book=' + book;
                        flag = true;

                    }
                }

                if (category !== '' & category >0) {

                    if (flag) {

                        url += '&category=' + category;

                    } else {

                        url += '?category=' + category;
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

                if (issued_start !== '') {

                    if (flag) {

                        url += '&issued_start=' + issued_start;

                    } else {

                        url += '?issued_start=' + issued_start;
                        flag = true;

                    }
                }

                if (issued_end !== '') {

                    if (flag) {

                        url += '&issued_end=' + issued_end;

                    } else {

                        url += '?issued_end=' + issued_end;
                        flag = true;

                    }
                }

                if (return_start !== '') {

                    if (flag) {

                        url += '&return_start=' + return_start;

                    } else {

                        url += '?return_start=' + return_start;
                        flag = true;

                    }
                }

                if (return_end !== '') {

                    if (flag) {

                        url += '&return_end=' + return_end;

                    } else {

                        url += '?return_end=' + return_end;
                        flag = true;

                    }
                }

                if (due_start !== '') {

                    if (flag) {

                        url += '&due_start=' + due_start;

                    } else {

                        url += '?due_start=' + due_start;
                        flag = true;

                    }
                }

                if (due_end !== '') {

                    if (flag) {

                        url += '&due_end=' + due_end;

                    } else {

                        url += '?due_end=' + due_end;
                        flag = true;

                    }
                }

           event.preventDefault();
           $('.new-content-div').load(url, function() { reload_datatable(); });
               // location.href = url;

            });

        });

    </script>
    @include('includes.scripts.inputMask_script')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.datepicker_script')
