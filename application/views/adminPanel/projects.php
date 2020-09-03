<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="table-data__tool">
    <div class="table-data__tool-left"></div>
    <div class="table-data__tool-right">
        <a href="~/admin/operationSlide" class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>افزودن اسلاید جدید
        </a>
    </div>
</div>
<div class="table rtl">
    <div class="t-head table-row posts tr-shadow">
        <div class="tableHead-cell">عنوان پروژه</div>
        <div class="tableHead-cell">متن پروژه</div>
        <div class="tableHead-cell">تاریخ ثبت پروژه</div>
        <div class="tableHead-cell">تصویر پروژه</div>
        <div class="tableHead-cell"></div>
    </div>
    <?php foreach ($projects as $project): ?>
        <div class="t-body table-row posts tr-shadow">
            <div class="table-cell"><?= $project->title ?></div>
            <div class="table-cell"><span class="block-text"><?= $project->description ?></span></div>
            <div class="table-cell"><?= $this->jdf->tr_num($this->jdf->dateCompare($project->projectDate,1),'fa')  ?></div>
            <div class="table-cell"><img width="150px" src="assets/images/sliderImage/<?= $project->url ?>" class="img-radius" alt="<?= $project->title ?>"></div>
            <div class="table-cell">
                <div class="table-data-feature">
                    <a href="~/admin/operationSlide/@item.Id" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    <a href="~/admin/deleteSlide/@item.Id" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="zmdi zmdi-delete"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
    <?php endforeach; ?>
</div