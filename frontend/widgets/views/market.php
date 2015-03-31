<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="marketplace-box green-box">
    <h2>Markedspladsen <span class="glyphicon glyphicon-shopping-cart"></span></h2>
    <ul>
    <?php
    foreach($items as $item) {
        echo '<li>', Html::a($item['title'], Url::to('/market/' . $item['id'])), '</li>';
    }
    ?>
    </ul>
</div>