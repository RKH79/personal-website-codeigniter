<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap" style="float:right;">
                <div class="header-button">
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="assets/images/userImage/540avatar-06.jpg" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?= $userData['0']->firstName . " " . $userData['0']->lastName ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/images/userImage/540avatar-06.jpg" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name"><?= $userData['0']->firstName . " " . $userData['0']->lastName ?></h5>
                                        <span class="email"><?= $userData['0']->email ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="operationOperator/<?= $_SESSION['userId'] ?>">
                                            <i class="zmdi zmdi-account"></i>ویرایش حساب
                                        </a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="logout">
                                            <i class="zmdi zmdi-power"></i>خروج
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>