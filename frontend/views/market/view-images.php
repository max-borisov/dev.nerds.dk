<?php
/* @var $this yii\web\View */
/* @var $item frontend\models\Item */

$preview = $item->originalPreview($item->preview, '250x150');
?>
<div class="row img-row margin-bottom">
    <div class="col-sm-5">
        <a href="<?= $preview ?>" data-toggle="lightbox" data-gallery="global-gallery" data-parent=".img-row" data-footer="">
            <img alt="product description" src="<?= $preview ?>" data-src="<?= $preview ?>" class="img-responsive">
        </a>
    </div>
</div>