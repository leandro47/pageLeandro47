<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome in my world</title>
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon">


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <!--  font awesome icons  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/all.min.css') ?>">
    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/Magnific-Popup/dist/magnific-popup.css') ?>">
    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl-carousel/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl-carousel/css/owl.theme.default.min.css') ?>">

    <!--  custom css file  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css') ?>">

</head>

<body>
    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets') ?>/img/logo.png" height="60px" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active font-mobile" href="#home">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-mobile" href="#aboutme">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-mobile" href="#education">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-mobile" href="#experience">Experience</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>