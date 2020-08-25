<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="owl-carousel owl-theme" id="project-slide">
        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
            <img src="~/images/sliderImage/@item.imageUrl" class="img-fluid" alt="@item.title @item.banner">
            <div class="project-info rtl">
                <small>@item.title</small>
                <h3>
                    <a href="~/ProjectDetails/@item.Id/@item.title">
                        <span>@item.banner</span>
                        <i class="zmdi zmdi-chevron-left project-icon"></i>
                    </a>
                </h3>
            </div>
        </div>
</div>