<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@ViewBag.Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="@ViewBag.keywords">
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
        <div id="Galert" class="alert alert-success animated ">@ViewBag.msgG</div>
        <div id="Ralert" class="alert alert-danger animated "></div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="~/">
                <i class="zmdi zmdi-chart"></i>
                Digital Trend
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="~/plugins" class="nav-link">افزونه ها</a>
                    </li>
                            <li class="nav-item">
                                <a href="~/Login" class="nav-link">ورود</a>
                            </li>

                            <li class="nav-item">
                                <a href="~/Logout" class="nav-link">خروج</a>
                            </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link smoothScroll">استودیو</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a href="~/Blog" class="nav-link">بلاگ</a>
                    </li>
                    <li class="nav-item">
                        <a href="~/Contact" class="nav-link contact">ارتباط باما</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>