<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?= print_r($data) ?>
<section class="project-detail section-padding-half">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">
                <h1><?= $data['detail']['0']->title ?></h1>
            </div>
        </div>
    </div>
</section>
<div class="full-image text-center" data-aos="zoom-in">
    <img src="assets/images/sliderImage/<?=$data['images']['0']->url ?>" class="img-fluid" alt="@Model.keyWords @Model.title">
</div>
<section class="project-detail">
    <div class="container rtl">
        <div class="row">

            <div class="col-lg-9 mx-auto col-md-11 col-12 my-5 pt-3" data-aos="fade-up">
            <?= $data['detail']['0']->description ?>
            <?php $this->load->view('templates/comments',array("comments"=> $this->home_model->comments($data['detail']['0']->id))) ?>
            </div>
        </div>
        <div class="col-lg-8 mx-auto mb-5 pb-5 col-12" data-aos="fade-up">
            <form action="~/sendComment/@Model.Id" method="post" class="contact-form" data-aos="fade-up" data-aos-delay="300" role="form">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <textarea class="form-control" rows="6" name="text" placeholder="نظر شما"></textarea>
                    </div>
                    <div class="col-lg-5 mx-auto col-7">
                        <button type="submit" class="form-control" id="submit-button" name="submit">ارسال نظر</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>