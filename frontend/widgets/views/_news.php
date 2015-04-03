<?php
/* @var $item frontend\models\News */

use yii\helpers\Url;
use frontend\components\HelperBase;

$newsLink = Url::to('/news/' . $item->id);
$post = strip_tags($item->post, '<p><a><strong><br>');
$post = HelperBase::makeShortText($post, 150);
?>
<article class="<?= $class ?>">
    <a href="#"><img class="full-width" src="<?= $item->preview ?>" alt=""/></a>
    <section class="padding-add">
        <h3><a href="<?= $newsLink ?>"><?= $item->title ?></a></h3>
        <p>
            <a href="<?= $newsLink ?>"><?= $post ?></a>
        </p>
    </section>
</article>

