<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport " content="width=device-width,  initial-scale=1 ">


    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/reg-style.css">

</head>

<body>
<?php $__env->startSection('header'); ?>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle=" collapse" data-target=" #navbarResponsive"> <span class ="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">PROFILE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('index')); ?>">HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('shop')); ?>">SHOP</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('contact')); ?>">CONTACT</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">ABOUT</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">LOGIN/SIGN UP</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <img src="/images/cart.png" alt="Tinyone" class="Tinyone"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php echo $__env->yieldSection(); ?>
    <div class="login">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
