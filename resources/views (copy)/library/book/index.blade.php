
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Books Manager </h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Fees</a>
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
              @include('library.includes.buttons')
                    <!-- PAGE CONTENT BEGINS -->
                       @include('includes.flash_messages')
                       
                        @include('includes.validation_error_messages')
                </div>
                <br/>
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
                            </br>
                            <br/>
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
    
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')
    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        $(document).ready(function () {

            /*Show Filter Form*/
           /* $("#filterDiv").css({'display':'none'});
            $("#filterBox").hover(function(){
                $("#filterDiv").css({'display':'block'});

            });*/
            /*filter form end*/


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
                var isbn_number = $('input[name="isbn_number"]').val();
                var code = $('input[name="code"]').val();
                var categories = $('select[name="categories"]').val();
                var title = $('input[name="title"]').val();
                var author = $('input[name="author"]').val();
                var language = $('input[name="language"]').val();
                var publisher = $('input[name="publisher"]').val();
                var publish_year = $('input[name="publish_year"]').val();
                var edition = $('input[name="edition"]').val();
                var edition_year = $('input[name="edition_year"]').val();
                var series = $('input[name="series"]').val();
                var rack_location = $('input[name="rack_location"]').val();
                var source = $('input[name="source"]').val();

                if (isbn_number !== '') {
                    url += '?isbn_number=' + isbn_number;
                    flag = true;
                }

                if (code !== '') {

                    if (flag) {

                        url += '&code=' + code;

                    } else {

                        url += '?code=' + code;
                        flag = true;

                    }
                }

                if (categories !== '' & categories >0) {

                    if (flag) {

                        url += '&categories=' + categories;

                    } else {

                        url += '?categories=' + categories;
                        flag = true;

                    }
                }

                if (title !== '') {

                    if (flag) {

                        url += '&title=' + title;

                    } else {

                        url += '?title=' + title;
                        flag = true;

                    }
                }

                if (author !== '') {

                    if (flag) {

                        url += '&author=' + author;

                    } else {

                        url += '?author=' + author;
                        flag = true;

                    }
                }

                if (language !== '') {

                    if (flag) {

                        url += '&language=' + language;

                    } else {

                        url += '?language=' + language;
                        flag = true;

                    }
                }

                if (publisher !== '') {

                    if (flag) {

                        url += '&publisher=' + publisher;

                    } else {

                        url += '?publisher=' + publisher;
                        flag = true;

                    }
                }

                if (publish_year !== '') {

                    if (flag) {

                        url += '&publish_year=' + publish_year;

                    } else {

                        url += '?publish_year=' + publish_year;
                        flag = true;

                    }
                }

                if (edition !== '') {

                    if (flag) {

                        url += '&edition=' + edition;

                    } else {

                        url += '?edition=' + edition;
                        flag = true;

                    }
                }

                if (edition_year !== '') {

                    if (flag) {

                        url += '&edition_year=' + edition_year;

                    } else {

                        url += '?edition_year=' + edition_year;
                        flag = true;

                    }
                }

                if (series !== '') {

                    if (flag) {

                        url += '&series=' + series;

                    } else {

                        url += '?series=' + series;
                        flag = true;

                    }
                }

                if (rack_location !== '') {

                    if (flag) {

                        url += '&rack_location=' + rack_location;

                    } else {

                        url += '?rack_location=' + rack_location;
                        flag = true;

                    }
                }

                location.href = url;

            });


        });



    </script>