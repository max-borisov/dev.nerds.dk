<?php
/* @var $this yii\web\View */
/* @var $item frontend\models\Item */
?>

<?php
if (Yii::$app->session->hasFlash('item_user_adv_success')) {
    echo $this->render(
        '../shared/flashSuccess',
        ['message' => Yii::$app->session->getFlash('item_user_adv_success')]
    );
}
?>

<h1><?= $item->title ?></h1>
<?= $this->render('view-header', ['item' => $item]) ?>
<?= $this->render('view-description', ['item' => $item]) ?>
<?= $this->render('view-images', ['item' => $item]) ?>
<hr>
<?= $this->render('view-other-info', ['item' => $item]) ?>
<hr>
<?= $this->render('view-contact-ad', ['model' => $itemUserAdv]) ?>


