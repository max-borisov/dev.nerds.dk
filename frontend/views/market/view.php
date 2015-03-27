<?php
/* @var $this yii\web\View */
/* @var $item frontend\models\Item */
?>
<h1><?= $item->title ?></h1>
<?= $this->render('view-header', ['item' => $item]) ?>
<?= $this->render('view-description', ['item' => $item]) ?>
<?= $this->render('view-images') ?>
<?= $this->render('view-other-info', ['item' => $item]) ?>
<?= $this->render('view-contact-ad') ?>


