<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="project-detail section-padding-half">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto col-md-10 col-12 text-center" data-aos="fade-up">
                <h1><?= $data['detail']['0']->title ?></h1>
            </div>
        </div>
    </div>
</section>
<div class="full-image text-center" data-aos="zoom-in">
    <img src="assets/images/sliderImage/<?=$data['images']['0']->url ?>" class="img-fluid" alt="<?= $data['detail']['0']->title ?>">
</div>
<section class="project-detail">
    <div class="container rtl">
        <div class="row">
            <div class="col-lg-9 mx-auto col-md-11 col-12 my-3 pt-3" data-aos="fade-up">
            <?= $data['detail']['0']->description ?>
            <?php for ($i=count($data['images'])-1; $i > 0; $i--): ?> 
                <div class="full-image text-center my-5" data-aos="zoom-in">
                    <img src="assets/images/sliderImage/<?=$data['images'][$i]->url ?>" class="img-fluid" alt="<?= $data['detail']['0']->title ?>">
                </div>
            <?php endfor; ?>
            <?php $this->load->view('templates/comments',array("comments"=> $this->home_model->comments($data['detail']['0']->id))) ?>
            </div>
        </div>
        <div class="col-lg-8 mx-auto mb-5 pb-5 col-12" data-aos="fade-up">
            <form action="comment<?=$data['detail']['0']->id?>" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <input type="text" class="form-control" name="name" placeholder="نام">
                    </div>
                    <div class="col-lg-6 col-12">
                        <input type="email" class="form-control text-right" name="email" placeholder="آدرس ایمیل" dir="ltr">
                    </div>
                    <div class="col-lg-12 col-12">
                        <textarea class="form-control" rows="6" name="comment" placeholder="نظر شما"></textarea>
                    </div>
                    <div class="col-lg-6 col-12">
                        <input type="text" class="form-control text-right" name="captchaCode" placeholder="کد تصویر" dir="ltr">
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <img src="assets/captcha.php" class="mt-3 refresh-captcha"  alt="captcha"/>
                    </div>
                    <div class="col-lg-5 mx-auto col-7">
                        <button type="submit" class="form-control" id="submit-button" name="submit">ارسال نظر</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>