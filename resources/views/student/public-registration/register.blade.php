<!DOCTYPE html>
<html class="loading" lang="en" >
<!-- BEGIN: Head-->

<head>
    
    <title>
        @if(isset($data['general_setting']->institute))
            {{$data['general_setting']->institute}}
        @else
            IMS | Edu MIS
        @endif
    </title>
     <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    @if(isset($data['general_setting']->favicon))
        <link rel="icon" href="{{ asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['general_setting']->favicon ) }}" type="image/x-icon" />
    @endif

   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->
 <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/includes_new/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                               
                                <div class="col-lg-12 col-12 p-0">

                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                 @if(isset($data['general_setting']->logo))
                              <center>  <img id="avatar"  src="{{ asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['general_setting']->logo) }}" width="200" >
                            @else
                                <i class="ace-icon fa fa-3x fa-graduation-cap blue" ></i>
                                <br>
                                @if(isset($data['general_setting']->institute))
                                    <span class="" id="id-text2">{{$data['general_setting']->institute}}</span>
                                @else
                                    <span class="red">Edu | </span>
                                    <span class="" id="id-text2">MIS</span>
                                @endif
                            @endif </center>
                                                <h4 class="mt-2" style="width:100%">Registration - ONLINE APPLICATION FOR ADMISSION  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn-primary btn-sm" href="{{ route('login') }}" style="float:right"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a></h4>

                                            </div>
                                        </div>
                                          @include('includes.flash_messages')
                                      
                                        
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                               @include('includes.validation_error_messages')
                            @include('includes.flash_messages')
                            {!! Form::open(['route' => 'student.public-registration.register', 'method' => 'POST', 'class' => 'form-horizontal',
                            'id' => 'validation-form', "enctype" => "multipart/form-data"]) !!}

                            @include($view_path.'.includes.form')

                            <div class="clearfix form-actions">
                                <div class="col-md-12 align-right">
                                    <button class="btn" type="reset">
                                        <i class="fa fa-undo bigger-110"></i>
                                        Reset
                                    </button>

                                    <button class="btn btn-primary" type="submit" value="Save" name="add_student" id="add-student">
                                        <i class="fa fa-save bigger-110"></i>
                                        Register
                                    </button>
                                </div>
                            </div>

                            <div class="hr hr-24"></div>

                            {!! Form::close() !!}
                                            </div>
                                        </div>
                                        <div class="login-footer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{url('/')}}/includes_new/app-assets/js/core/app-menu.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/js/core/app.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="{{url('/')}}/includes_new/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>