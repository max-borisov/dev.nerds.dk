<?php
/* @var $item frontend\models\Item */

use yii\helpers\Html;
?>
<p>
    <strong>Annoncetekst:</strong>
    <br>
    <?= Html::encode($item->description) ?>
</p>