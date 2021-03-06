<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\components\HelperBase;

$articleLink = Url::to('/articles/' . $item['id']);
$preview = $item->getPreview($item['preview'], '200x52', 'crop');
?>
<tr>
    <td><?= Html::a(
            Html::img(
                $preview,
                ['class' => 'w-200', 'alt' => $item['title'], 'title' => $item['title']]
            ),
            $articleLink) ?>
    </td>
    <td>
        <strong><?= Html::a(Html::encode($item['title']), $articleLink) ?></strong>
        <p><?= Html::encode($item['post_short']) ?></p>
    </td>
    <td><?= HelperBase::formatPostDate($item['post_date']) ?></td>
</tr>