<?php
/* @var $this \yii\web\View */
/* @var $content string */
?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>
<div class="row form-group">
    <article class="col-sm-9">
        <?= $content ?>
    </article>
    <!-- aside begin -->
    <?= $this->render('../shared/aside-right') ?>
    <!-- aside end -->
</div>
<?php $this->endContent(); ?>
