<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ورود به سایت</title>
    <link href="assets/styles/animate.min.css" rel="stylesheet"/>
    <link href="assets/styles/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/styles/theme.css" rel="stylesheet"/>
</head>
<body class="animsition">
    <div class="alertbox w-25">
        <div id="Galert" class="alert alert-success animated "><?= $_SESSION['msgG'] ?></div>
        <div id="Ralert" class="alert alert-danger animated "><?= $_SESSION['msgR'] ?></div>
        <?php $_SESSION['msgR'] = $_SESSION['msgG'] = ""; ?>
    </div>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form rtl">
                            <form action="login" method="post">
                                <div class="form-group">
                                    <label>آدرس ایمیل</label>
                                    <input class="au-input au-input--full" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label>رمز ورود</label>
                                    <input class="au-input au-input--full" type="password" name="password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">ورود</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/Scripts/Script.js"></script>
    <script src="assets/Scripts/wow.min.js"></script>
    <script src="assets/Scripts/jquery.min.js"></script>
    <script src="assets/Scripts/bootstrap.min.js"></script>
</body>
</html>