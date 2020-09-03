<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="table rtl">
    <div class="t-head table-row posts tr-shadow">
        <div class="tableHead-cell">عنوان پروژه</div>
        <div class="tableHead-cell">متن پروژه</div>
        <div class="tableHead-cell">متن نظر</div>
        <div class="tableHead-cell">تاریخ ثبت نظر</div>
        <div class="tableHead-cell">تصویر پروژه</div>
        <div class="tableHead-cell"></div>
    </div>
    <?php foreach ($comments as $comment): ?>
        <div class="t-body table-row posts tr-shadow">
            <div class="table-cell"><?= $comment->title ?></div>
            <div class="table-cell"><?= $comment->description ?></div>
            <div class="table-cell"><span class="block-text"><?= $comment->comment ?></span></div>
            <div class="table-cell"><?= $this->jdf->tr_num($this->jdf->dateCompare($comment->commentDate,1),'fa')  ?></div>
            <div class="table-cell"><img width="150px" src="assets/images/sliderImage/<?= $comment->url ?>" class="img-radius" alt="<?= $comment->title ?>"></div>
            <div class="table-cell">
                <div class="table-data-feature">
                    <?php if (!$comment->see): ?>
                        <a href="~/admin/acceptComment/@item.comment.Id" class="item" data-toggle="tooltip" data-placement="top" title="قبول کردن">
                            <i class="zmdi zmdi-check"></i>
                        </a>
                    <?php else: ?>
                        <a href="~/admin/acceptComment/@item.comment.Id" class="item" data-toggle="tooltip" data-placement="top" title="قبول کردن">
                            <i class="zmdi zmdi-close"></i>
                        </a>
                    <?php endif; ?>
                    <a href="~/admin/deleteComment/@item.comment.Id" class="item" data-toggle="tooltip" data-placement="top" title="حذف">
                        <i class="zmdi zmdi-delete"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
    <?php endforeach; ?>
</div>