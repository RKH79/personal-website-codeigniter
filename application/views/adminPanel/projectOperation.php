<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="card rtl">
    <div class="card-header" style="text-align:center;">
        افزودن مطلب جدید
    </div>
    <form action="projectOperation" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card-body card-block">
            <div class="row form-group">
                <div class="col col-md-2">
                    <label for="text-input" class=" form-control-label">عنوان</label>
                </div>
                <div class="col-12 col-md-10">
                    <input type="text" id="title" name="title" class="form-control" value="<?= (isset($project[0]->title))? $project[0]->title : "" ?>">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-2">
                    <label for="textarea-input" class=" form-control-label">متن</label>
                </div>
                <div class="col-12 col-md-10">
                    <textarea name="description" id="description" class="form-control"><?= (isset($project[0]->description))? $project[0]->description : "" ?></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-2">
                    <label for="file-input" class=" form-control-label">تصویر</label>
                </div>
                    <div class="col-12 col-md-10 images">
                        <div class="d-inline-block" id="imagesBox">
                            <?php if (isset($projectImages[0]->url)): 
                                foreach ($projectImages as $projectImage): ?> 
                                <div class="d-inline-block imageBox">
                                    <div class="point" data-url="<?=$projectImage->url?>">
                                        <div class="triangle-top"><i class="zmdi zmdi-close removeImage"></i></div>
                                        <div class="triangle-down"><i class="masterImage zmdi zmdi-star<?=($projectImage->master)? "":"-outline" ?> "></i></div>
                                    </div>
                                    <img class="projectImage" src="assets/images/sliderImage/<?=$projectImage->url?>" width="250px" height="150px" />
                                </div>
                                <?php endforeach;
                            endif; ?>
                        </div>
                        <label class="d-inline-block" for="imageurl">
                            <img id="addNewImage" src="assets/images/newImage.jpg?>" width="250px" height="150px" />
                        </label>
                        <div id="inputImageUrl">
                            <input type="file" id="imageurl" name="imageurl" class="d-none form-control-file" accept=".png,.jpeg,.jpg">
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
        <input id="Id" name="Id" value="<?= (isset($project[0]->id))? $project[0]->id : "" ?>" type="hidden" />
        <input id="images" name="images" value="" type="hidden" />
    </form>
</div>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace('description');
        CKEDITOR.instances['description'].setData(new DOMParser().parseFromString(document.getElementById("description").innerHTML, 'text/html'));
</script>