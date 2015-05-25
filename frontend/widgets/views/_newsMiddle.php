<?php
/* @var $item frontend\models\News */

use yii\helpers\Url;
use frontend\components\HelperBase;

$newsLink = Url::to('/news/' . $item->id);
$post = strip_tags($item->post);
$post = HelperBase::makeShortText($post, 150);
$preview = $item->getPreview($item->preview, '263x69', 'crop');

if ($counter == 2) {
    echo '<span class="hor-line add">&nbsp;</span>';
}
?>
<article class="<?= $class ?>">
    <a href="<?= $newsLink ?>">
        <img class="full-width" src="<?= $preview ?>" title="<?= $item->title ?>" alt="<?= $item->title ?>"/>
    </a>
    <section class="padding-add">
        <h3><a href="<?= $newsLink ?>"><?= $item->title ?></a></h3>
        <p><?= $post ?></p>
    </section>
</article>

