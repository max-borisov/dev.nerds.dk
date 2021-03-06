<?php
/* @var $item frontend\models\Item */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\components\HelperBase;

$previewDimensions = '100x75';
$itemUrl = Url::to('/market/' . $item->id);
$preview = $item->getPreview($item->preview, $previewDimensions);
?>
<tr>
    <td align="center"><?= substr($item->ad_type_title, 0, 1) ?></td>
    <td><?= Html::a($item->title, $itemUrl) ?></td>
    <td><?= $item->top_category_title, '<br><br>', $item->category_title ?></td>
    <td align="right"><?= $item->price ?></td>
    <td align="right"><?= HelperBase::formatPostDate($item->s_date) ?></td>
    <td>
        <?= Html::a(
            Html::img($preview, ['class' => 'img-responsive']),
            $itemUrl
        ) ?>
    </td>
</tr>