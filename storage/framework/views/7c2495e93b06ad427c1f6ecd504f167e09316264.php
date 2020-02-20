<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <title>
        <?php if(isset($generalSetting->institute)): ?>
            <?php echo e($panel, false); ?> | <?php echo e($generalSetting->institute, false); ?>

        <?php else: ?>
            <?php echo e(isset($panel)?$panel:'', false); ?> | Edu MIS
        <?php endif; ?>
    </title>

    <meta name="description" content="top menu &amp; navigation" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <?php if(isset($generalSetting->favicon)): ?>
        <link rel="icon" href="<?php echo e(asset('images'.DIRECTORY_SEPARATOR.'setting'.DIRECTORY_SEPARATOR.'general'.DIRECTORY_SEPARATOR.$generalSetting->favicon ), false); ?>" type="image/x-icon" />
    <?php endif; ?>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css'), false); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/font-awesome/4.5.0/css/font-awesome.min.css'), false); ?>" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.min.css'), false); ?>" />

    <!-- text fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fonts.googleapis.com.css'), false); ?>" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ace.min.css'), false); ?>" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ace-part2.min.css'), false); ?>" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ace-skins.min.css'), false); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ace-rtl.min.css'), false); ?>" />

    <!-- inline styles related to this page -->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ace-ie.min.css'), false); ?>" />
    <![endif]-->

    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css'), false); ?>" />

    <!-- ace settings handler -->
    <script src="<?php echo e(asset('assets/js/ace-extra.min.js'), false); ?>"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?php echo e(asset('assets/js/html5shiv.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/js/respond.min.js'), false); ?>"></script>
    <![endif]-->

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.custom.min.css'), false); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-datepicker3.min.css'), false); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/nepali.datepicker.v2.2.min.css'), false); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/select2.min.css'), false); ?>" />
    <link href="<?php echo e(asset('assets/css/toastr.min.css'), false); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/chosen.min.css'), false); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Fugaz+One|Lobster|Merienda|Righteous|Black+Ops+One|Gilda+Display" rel="stylesheet">
    <style>
        .chosen-container, [class*=chosen-container]{
            /*width: 400px !important;*/
            width: 100% !important;
        }
    </style>
    <?php echo $__env->yieldContent('css'); ?>

    <?php echo $__env->yieldContent('top-script'); ?>

    
    <style>
        #overlay {
            background: #E4E6E9;
            color: #666666;
            position: fixed;
            height: 100%;
            width: 100%;
            z-index: 1000;
            top: 0;
            left: 0;
            float: left;
            text-align: center;
            padding-top: 25%;
            font-size: 4em;
        }
    </style>

</head>


<?php /**PATH /home/viholddep/public_html/edu/resources/views/layouts/includes/header.blade.php ENDPATH**/ ?>