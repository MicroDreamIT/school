
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Library Circulation Manager</h2>
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
            <div class="row">
                 @include('library.includes.buttons')
                    @include('includes.flash_messages')
                   
                        @if (isset($data['row']) && $data['row']->count() > 0)
                            @include($view_path.'.edit')
                        @else
                        <br/>
                        <br/>
                        {{--<div id="fromOpen">
                            <div class="btn btn-sm btn-info2" id="hideForm"><i class="fa fa-minus" aria-hidden="true"></i>&nbsp;Hide Form</div>
                            @include($view_path.'.add')
                        </div>

                        <div class="btn btn-sm btn-primary"  id="fromShow"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Circulation Setting</div>
                        <hr class="hr-double hr-10">--}}
                    @endif
                    <div class="col-md-12 col-xs-12">
                        @include($view_path.'.includes.table')
                    </div>
                </div>
                <!-- Zero configuration table -->

                
              
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    


    </div>
 <!-- page specific plugin scripts -->
    @include('includes.scripts.delete_confirm')
    @include('includes.scripts.bulkaction_confirm')
    @include('includes.scripts.dataTable_scripts')
    @include('includes.scripts.jquery_validation_scripts')
    <script>
        $(document).ready(function () {
            /*Change Field Value on Capital Letter When Keyup*/
            $(function() {
                $('.upper').keyup(function() {
                    this.value = this.value.toUpperCase();
                });
            });
            /*end capital function*/

            /*show hide form*/
            $('#fromOpen').hide();
            $('#fromShow').click(function(){
                $('#fromOpen').show();
                $('#fromShow').hide();
            });

            $('#hideForm').click(function(){
                $('#fromOpen').hide();
                $('#fromShow').show();
            });
            /*end form*/



            jqueryValidation(
                {
                    "title": {
                        required: true,
                    }
                },
                {
                    "title": {
                        required: "Please Add Title.",
                    },
                }
            );
        });
    </script>