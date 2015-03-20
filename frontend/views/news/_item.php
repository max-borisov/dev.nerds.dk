<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\components\HelperBase;

/* @var $item frontend\models\News */
?>
<tr>
    <td><?= Html::a($item->title, Url::to('news/' . $item->id)) ?></td>
    <td><?= empty($item->af) ? 'Unknown' : $item->af ?></td>
    <td><?= HelperBase::formatPostDate($item['post_date']) ?></td>
</tr>