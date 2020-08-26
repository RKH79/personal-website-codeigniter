<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section class="about section-padding pb-0" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto col-md-10 col-12">
                <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/images/office.png" class="img-fluid" alt="office">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="project section-padding" id="project">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-12" data-aos="fade-up">
                <h2 class="mb-5 text-center"  >
                     برخی از <strong>پروژه های </strong>انجام شده
                </h2>
                <?php 
                $this->load->view('templates/slider',array("slider"=> $this->home_model->sliderData() )) ?>
            </div>
        </div>
    </div>
</section>