<?php
/* @var $item frontend\models\News */

use yii\helpers\Url;
use frontend\components\HelperBase;

$reviewLink = Url::to('/articles/' . $item->id);
$post = strip_tags($item->post);
$post = HelperBase::makeShortText($post, 75);
$preview = $item->getPreview($item->preview, '165x43', 'resize');

if ($counter == 2) {
    echo '<span class="hor-line add">&nbsp;</span>';
}
?>
<article class="<?= $class ?>">
    <a href="<?= $reviewLink ?>">
        <img class="full-width" src="<?= $preview ?>" title="<?= $item->title ?>" alt="<?= $item->title ?>"/>
    </a>
    <section class="padding-add">
        <h3><a href="<?= $reviewLink ?>"><?= $item->title ?></a></h3>
        <p><?= $post ?></p>
    </section>
</article>