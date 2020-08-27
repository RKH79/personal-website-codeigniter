<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="@ViewBag.keywords">
    <link rel="icon" type="image/png" href="assets/images/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="assets/styles/animate.min.css" rel="stylesheet"/>
    <link href="assets/styles/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/styles/material-design-iconic-font.min.css" rel="stylesheet"/>
    <link href="assets/styles/aos.css" rel="stylesheet"/>
    <link href="assets/styles/owl.carousel.min.css" rel="stylesheet"/>
    <link href="assets/styles/owl.theme.default.min.css" rel="stylesheet"/>
    <link href="assets/styles/theme.css" rel="stylesheet"/>
    <link href="assets/styles/templatemo-digital-trend.css" rel="stylesheet"/>
</head>
<body>
    <div class="alertbox w-25">

        <div id="Galert" class="alert alert-success animated "><?= (isset($_SESSION['msgG']))? $_SESSION['msgG'] : "" ?></div>
        <div id="Ralert" class="alert alert-danger animated "><?= (isset($_SESSION['msgR']))? $_SESSION['msgR'] : "" ?></div>
        <?php $_SESSION['msgR'] = $_SESSION['msgG'] = ""; ?>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="zmdi zmdi-chart"></i>
                R.KH
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="contact" class="nav-link contact">ارتباط باما</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>