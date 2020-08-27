<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="owl-carousel owl-theme" id="project-slide" data-aos="fade-up">
<?php 
foreach($slider as $slide): ?>
        <div class="item project-wrapper" data-aos="fade-up">
            <img src="assets/images/sliderImage/<?=$slide->url ?>" class="img-fluid" alt="<?= $slide->title ?>">
            <div class="project-info rtl">
            <small><?= $this->jdf->tr_num($this->jdf->dateCompare($slide->datetime,1),'fa') ?></small>
                <h3>
                    <a href="projectDetail<?=$slide->projectId?>">
                        <span><?= $slide->title ?></span>
                        <i class="zmdi zmdi-chevron-left project-icon"></i>
                    </a>
                </h3>
            </div>
        </div>
<?php endforeach; ?>
</div>