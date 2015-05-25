<?php
/* @var $item frontend\models\Item */

use yii\helpers\Url;

$itemLink = Url::to('/market/' . $item->id);
$preview = $item->getPreview($item->preview, '263x197', 'resize');
$type = $item->s_type ? $item->s_type : $item->media_type;
?>
<article class="<?= $class ?> margin-down">
    <a href="<?= $itemLink ?>">
        <img class="full-width" src="<?= $preview ?>" title="<?= $item->title ?>" alt="<?= $item->title ?>" />
    </a>
    <section class="padding-add">
        <h3><a href="<?= $itemLink ?>"><?= $item->title ?></a></h3>
        <p>
            <a href="#">
                <?php
                if ($type) {
                    echo '<strong>Type:</strong> ' . $type . '<br>';
                }
                ?>
                <?php
                if ($item->s_user) {
                    echo '<strong>Af:</strong> ' . $item->s_user . '<br>';
                }
                ?>
            </a>
        </p>
        <p><strong><?= $item->price ?> kr.</strong></p>
    </section>
</article>