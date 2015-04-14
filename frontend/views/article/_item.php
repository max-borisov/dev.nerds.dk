<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\components\HelperBase;
use yii\base\Exception;

$articleLink = Url::to('/articles/' . $item['id']);
try {
    if (!$item['preview']) throw new Exception('Preview name is empty');
    $preview = Yii::$app->image->thumb($item['preview'], '200x52', 'crop')->url();
} catch(Exception $e) {
    $preview = Yii::$app->imagePlaceholder->get('200x52');
}
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