<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card rtl">
    <div class="card-header" style="text-align:center;">
        افزودن رکورد جدید
    </div>
    <form action="recordOperation" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card-body card-block">
            <div class="row form-group">
                <div class="col col-md-2">
                    <label for="text-input" class=" form-control-label">عنوان</label>
                </div>
                <div class="col-12 col-md-10">
                    <input type="text" id="title" name="title" class="form-control" value="<?= (isset($record[0]->title))? $record[0]->title : "" ?>">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-2">
                    <label for="file-input" class=" form-control-label">فایل</label>
                </div>
                    <div class="col-12 col-md-10 images">
                        <input type="file" id="file" name="file" class=" form-control-file" accept=".zip,.rar,.7zip,.mp4,.mkv,.3gp,.mp3,.wav,.wma,.jpg,.jpeg,.png,.pdf,.docx,.doc'">
                        <div class="d-inline-block">
                            <?php if (isset($record[0]->link)):
                                    switch (strrchr(strtolower($record[0]->link),".")) {
                                        case'.rar': case'.zip': case'.7zip':
                                            $icon = "zmdi-archive";
                                            break;
                                        case'.mp4': case'.mkv': case'.3gp':
                                            $icon = "zmdi-movie";
                                            break;
                                        case'.mp3': case'.wav': case'.wma':
                                            $icon = "zmdi-audio";
                                            break;
                                        case'.jpg': case'.jpeg': case'.png':
                                            $icon = "zmdi-image";
                                            break;
                                        case'.pdf': case'.docx': case'.doc':
                                            $icon = "zmdi-assignment";
                                            break;
                                        default:
                                            $icon = "zmdi-download";
                                            break;
                                    }
                                 ?>
                                <div class="d-inline-block imageBox mt-3">
                                <a class="d-block" href="assets/uploads/<?= $record[0]->link ?>" download><div style="margin-bottom: -10px;" class="downloadLink d-inline-block"><i class="zmdi <?= $icon ?>"></i></div><div class="d-inline-block"><?= $record[0]->link ?></div></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
        <input id="Id" name="Id" value="<?= (isset($record[0]->id))? $record[0]->id : "" ?>" type="hidden" />
        <input id="oldFile" name="oldFile" value="<?= (isset($record[0]->link))? $record[0]->link : "" ?>" type="hidden" />
    </form>
</div>