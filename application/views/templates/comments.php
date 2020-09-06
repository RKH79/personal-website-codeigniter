<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php foreach ($comments as $comment): ?>
        <blockquote>
            <div class="d-flex align-items-center">
                <p><?= $comment->name ?></p>
                <h5 style="margin-right:5px;"><?= $this->jdf->tr_num($this->jdf->dateCompare($comment->commentDate,1),'fa') ?></h5>
            </div>
            <?= $comment->comment ?>
        </blockquote>
<?php endforeach;?>