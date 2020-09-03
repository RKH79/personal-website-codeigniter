<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <title><?= $title ?></title>
    <link href="assets/styles/material-design-iconic-font.min.css" rel="stylesheet"/>
    <link href="assets/styles/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/styles/animate.min.css" rel="stylesheet"/>
    <link href="assets/styles/hamburgers.min.css" rel="stylesheet"/>
    <link href="assets/styles/select2.min.css" rel="stylesheet"/>
    <link href="assets/styles/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="assets/styles/adminTheme.css" rel="stylesheet"/>
</head>
<body>
    <div class="alertbox w-25">
        <div id="Galert" class="alert alert-success animated "><?= (isset($_SESSION['msgG']))? $_SESSION['msgG'] : "" ?></div>
        <div id="Ralert" class="alert alert-danger animated "><?= (isset($_SESSION['msgR']))? $_SESSION['msgR'] : "" ?></div>
        <?php $_SESSION['msgR'] = $_SESSION['msgG'] = ""; ?>
    </div>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="assets/images/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="admin">
                                <i class="zmdi zmdi-desktop-windows"></i>کنترل پنل
                            </a>
                        </li>
                        <li>
                            <a href="~/admin/showBlogs">
                                <i class="zmdi zmdi-file-text"></i>مطالب
                            </a>
                        </li>
                        <li>
                            <a href="projects">
                                <i class="zmdi zmdi-collection-image"></i>پروژه ها
                            </a>
                        </li>
                        <li>
                            <a href="~/admin/showCategorys">
                                <i class="zmdi zmdi-tag-more"></i>دسته بندی ها
                            </a>
                        </li>
                        <li>
                            <a href="~/admin/showLinks">
                                <i class="zmdi zmdi-link"></i>پیوندها
                            </a>
                        </li>
                        <li>
                            <a href="~/admin/showUsers">
                                <i class="zmdi zmdi-accounts"></i>کاربران
                            </a>
                        </li>
                        <li>
                            <a href="comments">
                                <i class="zmdi zmdi-comment-more"></i>نظرات
                            </a>
                        </li>
                        <li>
                            <a href="messages">
                                <i class="zmdi zmdi-email"></i>پیام ها
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo text-center">
                <a href="admin">
                    <img class="w-75" src="assets/images/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li id="home">
                            <a href="admin">
                                <i class="zmdi zmdi-desktop-windows"></i>کنترل پنل
                            </a>
                        </li>
                        <li id="blogs">
                            <a href="~/admin/showBlogs">
                                <i class="zmdi zmdi-file-text"></i>مطالب
                            </a>
                        </li>
                        <li id="slider">
                            <a href="projects">
                                <i class="zmdi zmdi-collection-image"></i>پروژه ها
                            </a>
                        </li>
                        <li id="categorys">
                            <a href="~/admin/showCategorys">
                                <i class="zmdi zmdi-tag-more"></i>دسته بندی ها
                            </a>
                        </li>
                        <li id="links">
                            <a href="~/admin/showLinks">
                                <i class="zmdi zmdi-link"></i>پیوندها
                            </a>
                        </li>
                        <li id="users">
                            <a href="~/admin/showUsers">
                                <i class="zmdi zmdi-accounts"></i>کاربران
                            </a>
                        </li>
                        <li id="comments">
                            <a href="comments">
                                <i class="zmdi zmdi-comment-more"></i>نظرات
                            </a>
                        </li>
                        <li id="messages">
                            <a href="messages">
                                <i class="zmdi zmdi-email"></i>پیام ها
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-container">
            <?php $this->load->view('adminPanel/template/navbar',array('userData'=>$this->admin_model->userData())) ?>
            <div class="main-content">
                <div class="section__content section__content--p30">