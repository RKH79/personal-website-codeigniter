<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="table rtl">
    <div class="t-head table-row posts tr-shadow">
        <div class="tableHead-cell">نام کاربر</div>
        <div class="tableHead-cell">آدرس ایمیل</div>
        <div class="tableHead-cell">تاریخ</div>
        <div class="tableHead-cell">پیام</div>
        <div class="tableHead-cell"></div>
    </div>
    <?php foreach ($messages as $message): ?>
        <div class="t-body table-row posts tr-shadow">
            <div class="table-cell"><?= $message->name ?></div>
            <div class="table-cell"><?= $message->email ?></div>
            <div class="table-cell"><?= $this->jdf->tr_num($this->jdf->dateCompare($message->messageDate,1),'fa')?></div>
            <div class="table-cell"><span class="block-text"><?= $message->message ?></span></div>
            <div class="table-cell">
                <div class="table-data-feature">
                    <a href="deleteMessage<?= $message->id ?>" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="zmdi zmdi-delete"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
    <?php endforeach; ?>
</div>