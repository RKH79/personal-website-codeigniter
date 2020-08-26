<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="owl-carousel owl-theme" id="project-slide" data-aos="fade-up">
<?php foreach($slider as $slide): ?>
        <div class="item project-wrapper" data-aos="fade-up">
            <img src="assets/images/sliderImage/project-image01.jpg" class="img-fluid" alt="">
            <div class="project-info rtl">
                <h3>
                    <a href="~/ProjectDetails">
                        <span><?= $slide->title ?></span>
                        <i class="zmdi zmdi-chevron-left project-icon"></i>
                    </a>
                </h3>
            </div>
        </div>
<?php endforeach; ?>
</div>