<?php
/* @var $this yii\web\View */
/* @var $item frontend\models\Item */

$preview = $item->originalPreview($item->preview, '250x150');
?>
<div class="row img-row margin-bottom">
    <div class="col-sm-5">
        <a href="<?= $item->preview ?>" data-toggle="lightbox" data-gallery="global-gallery" data-parent=".img-row" data-footer="<?= $item->description ?>">
            <img alt="product description" src="<?= $preview ?>" data-src="<?= $item->preview ?>" class="img-responsive">
        </a>
    </div>
</div>