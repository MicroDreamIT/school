<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">
    <!-- <link rel="icon" href="<%= BASE_URL %>favicon.ico"> -->

    <title> Dashboard | Edu MIS</title>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset(mix('css/main.css')), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset(mix('css/iconfont.css')), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset(mix('css/material-icons/material-icons.css')), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset(mix('css/vuesax.css')), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset(mix('css/prism-tomorrow.css')), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset(mix('css/app.css')), false); ?>" media="screen">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo/favicon.png'), false); ?>">
  </head>
  <body>
    <noscript>
      <strong>We're sorry but Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app">
    </div>

    <!-- <script src="js/app.js"></script> -->
    <script src="<?php echo e(asset(mix('js/app.js')), false); ?>"></script>

  </body>
</html>
<?php /**PATH /Users/sharif/Php/viholding/resources/views/application.blade.php ENDPATH**/ ?>