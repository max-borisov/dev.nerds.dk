<?php
/* @var $item frontend\models\Item */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\components\HelperBase;

$itemUrl = Url::to('/market/' . $item->id);
?>
<tr>
    <td align="center">S</td>
    <td><?= Html::a($item->title, $itemUrl) ?></td>
    <td><?= Html::encode($item->category['title']) ?></td>
    <td align="right"><?= $item->price ?></td>
    <td align="right"><?= HelperBase::formatPostDate($item->s_date) ?></td>
    <td>
        <?= Html::a(Html::img($item->preview, ['class' => 'img-responsive']), $itemUrl, ['data-footer' => 'Image description', 'data-title' => $item->title, 'data-toggle' => 'lightbox']) ?>
    </td>
</tr>