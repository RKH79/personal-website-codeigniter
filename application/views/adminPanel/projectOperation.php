<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card rtl">
    <div class="card-header" style="text-align:center;">
        افزودن مطلب جدید
    </div>
    <form action="~/admin/operationSlide" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card-body card-block">
            <div class="row form-group">
                <div class="col col-md-2">
                    <label for="text-input" class=" form-control-label">عنوان</label>
                </div>
                <div class="col-12 col-md-10">
                    <input type="text" id="title" name="title" class="form-control" value="<?= $project[0]->title ?>">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-2">
                    <label for="textarea-input" class=" form-control-label">متن</label>
                </div>
                <div class="col-12 col-md-10">
                    <textarea name="text" id="text" class="form-control"><?= $project[0]->description ?></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-2">
                    <label for="file-input" class=" form-control-label">تصویر</label>
                </div>
                <div class="col-12 col-md-10">
                    <input type="file" id="imageurl" name="imageurl" class="form-control-file">
                    <?php if ( $projectImages[0]->url != null): 
                        foreach ($projectImages as $projectImage): ?> 
                        <img src="assets/images/sliderImage/<?=$projectImage->url?>" width="250px" height="150px" />
                        <?php endforeach;
                    endif; ?>
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
        <input id="Id" name="Id" value="@Model.Id" type="hidden" />
        <input id="oldUrl" name="oldUrl" value="@Model.imageUrl" type="hidden" />
    </form>
</div>