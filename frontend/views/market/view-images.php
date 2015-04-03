<?php
/* @var $this yii\web\View */
/* @var $item frontend\models\Item */
?>
<?php if (!empty($item->preview)) { ?>
    <div class="row img-row margin-bottom">
        <div class="col-sm-3">
            <a href="<?= $item->preview ?>" data-toggle="lightbox" data-gallery="global-gallery" data-parent=".img-row" data-footer="Item description">
                <img alt="product description" src="<?= $item->preview ?>" data-src="<?= $item->preview ?>" class="img-responsive">
            </a>
        </div>
    </div>
<?php } ?>