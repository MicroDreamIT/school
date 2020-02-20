<!DOCTYPE html>
<html class="loading" lang="en" >
<!-- BEGIN: Head-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>
        <?php if(isset($data['general_setting']->institute)): ?>
            <?php echo e($data['general_setting']->institute, false); ?>

        <?php else: ?>
            Edu
        <?php endif; ?>
    </title>
     <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <?php if(isset($data['general_setting']->favicon)): ?>
        <link rel="icon" href="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['general_setting']->favicon ), false); ?>" type="image/x-icon" />
    <?php endif; ?>

   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/'), false); ?>/includes_new/assets/css/style.css">
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
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                     <h1>

                            <?php if(isset($data['general_setting']->logo)): ?>
                                <img id="avatar"  src="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$data['general_setting']->logo), false); ?>" width="200" >
                            <?php else: ?>
                                <i class="ace-icon fa fa-3x fa-graduation-cap blue" ></i>
                                <br>
                                <?php if(isset($data['general_setting']->institute)): ?>
                                    <span class="" id="id-text2"><?php echo e($data['general_setting']->institute, false); ?></span>
                                <?php else: ?>
                                    <span class="red">Edu | </span>
                                    <span class="white" id="id-text2">MIS</span>
                                <?php endif; ?>
                            <?php endif; ?>
                            <br>
                            <span class="green" style="font-size: 17pt;">
                                 Management System
                            </span>
                        </h1>

                                    <!--<img src="<?php echo e(url('/'), false); ?>/includes_new/app-assets/images/pages/login.png" alt="branding logo"> -->
                                </div>
                                <div class="col-lg-6 col-12 p-0">

                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                          <?php echo $__env->make('includes.flash_messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                          <br/>
                                        <p class="px-2"> Please Enter Your Information.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                               <form method="POST" action="<?php echo e(route('login'), false); ?>">
                                        <?php echo e(csrf_field(), false); ?>

                                        <?php if(session()->has('login_error')): ?>
                                            <div class="alert alert-success">
                                                <?php echo e(session()->get('login_error'), false); ?>

                                            </div>
                                        <?php endif; ?>


                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo e(old('email'), false); ?>" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">Email</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="text-right"><a href="auth-forgot-password.html" class="card-link">Forgot Password?</a></div>
                                                    </div>
                                                    <a href="<?php echo e(route('public-registration.registration'), false); ?>" class="btn btn-outline-primary float-left btn-inline">Register</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                                <!--<div class="divider-text">OR</div>-->
                                            </div>
                                            <!--<div class="footer-btn d-inline">
                                                <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                                <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                                                <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                                                <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
                                            </div>-->
                                        </div>
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
    <script src="<?php echo e(url('/'), false); ?>/includes_new/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo e(url('/'), false); ?>/includes_new/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo e(url('/'), false); ?>/includes_new/app-assets/js/core/app.js"></script>
    <script src="<?php echo e(url('/'), false); ?>/includes_new/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html><?php /**PATH /Users/sharif/Php/viholding/resources/views/login/login.blade.php ENDPATH**/ ?>