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
</head>
<body>
    <div class="alertbox w-25">
        <div id="Galert" class="alert alert-success animated ">@ViewBag.msgG</div>
        <div id="Ralert" class="alert alert-danger animated ">@ViewBag.msgR</div>
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
                    @{
                        if (Session["userId"] == null)
                        {
                            <li class="nav-item">
                                <a href="~/Login" class="nav-link">ورود</a>
                            </li>
                        }
                        else
                        {
                            <li class="nav-item">
                                <a href="~/Logout" class="nav-link">خروج</a>
                            </li>
                        }
                    }
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
    @RenderBody()
    <footer class="site-footer rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">مافقط <strong>برندهای</strong> خلاق می سازیم</h1>
                    <div class="col-lg-10 col-md-4 col-8" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="my-4">نشانی دفتر مرکزی</h4>
                        <p class="mb-1">
                            <i class="zmdi zmdi-home mr-2 footer-icon"></i>
                            مشهد _ ابتدای بلوار پیروزی _میدان شهید کاوه _دانشگاه شهید منتظری
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-8" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">تماس باما</h4>
                    <p class="mb-1">
                        <i class="zmdi zmdi-phone mr-2 footer-icon"></i>
                        +99 080 070 4224
                    </p>
                    <p>
                        <a href="Contact">
                            <i class="zmdi zmdi-email mr-2 footer-icon"></i>
                            hello@company.com
                        </a>
                    </p>
                </div>
                @Html.Partial("_links", new links().select())
                @Html.Partial("_categorys", new categorys().select())
                <div class="col-lg-12 col-md-12 col-12 m-r-70" data-aos="fade-up" data-aos-delay="200">
                    &copy; Created By Rohollah Khoshhal &hearts;
                </div>
            </div>
        </div>
    </footer>
    @Scripts.Render("~/MainScripts")
    @RenderSection("script", false)
</body>
</html>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.