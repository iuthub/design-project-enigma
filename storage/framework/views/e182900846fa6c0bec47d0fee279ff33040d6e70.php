<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Enigma Sports</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/styles1.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-Home sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                Enigma
                <img src="images/logo4.png" alt="logo" />
                Sports
                <!--<iframe class="apivideo" src="//www.youtube.com/embed/?listType=user_uploads&list=adidas" width="660px" height="400px" frameborder="0"></iframe>-->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                </ul>

                <!-- Links -->
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('index')); ?>">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('shop')); ?>">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contact')); ?>">CONTACT US</a>
                    </li>
                </ul>
                <div class="spinner small absolute auto"></div>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <?php if(auth()->guard()->guest()): ?>
                        <li><a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                        <li><a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Sign Up')); ?></a></li>
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
    <nav>
        <hr>
        <div class="row link-footer">
            <div class="col-md-6 brand-apparel" >
                <h4>Enigma Sports</h4>
                <ul>
                    <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('shop')); ?>">Shop</a></li>
                    <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                    <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-6 follow-us">
                <h4>Follow us</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Telegram</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row copyright">
            <div class="col-md-12">
                <p>2018. Created by Enigma Team Inc.</p>
            </div>
        </div>
    </nav>
</body>
</html>
