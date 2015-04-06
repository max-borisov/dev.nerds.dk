<?php
/* @var $item frontend\models\News */

use yii\helpers\Url;
use frontend\components\HelperBase;

$newsLink = Url::to('/news/' . $item->id);
$post = strip_tags($item->post);
$post = HelperBase::makeShortText($post, 150);

if ($counter == 2 || $counter == 3) {
    echo '<span class="hor-line">&nbsp;</span>';
}
?>
<article class="<?= $class ?>">
    <a href="<?= $newsLink ?>"><img class="full-width" src="<?= $item->preview ?>" style="width: 360px; height: 94px;" alt="" /></a>
    <section class="padding-add">
        <h3><a href="<?= $newsLink ?>"><?= $item->title ?></a></h3>
        <p><?= $post ?></p>
    </section>
</article>

