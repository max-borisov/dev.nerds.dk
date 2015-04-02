<?php
/* @var $item frontend\models\Item */

if ($item->s_warranty) {
    $warranty = $item->s_warranty;
} else {
    $warranty = $item->warranty ? 'Ja' : 'Nej';
}

if ($item->s_package) {
    $package = $item->s_package;
} else {
    $package = $item->packaging ? 'Ja' : 'Nej';
}

if ($item->s_manual) {
    $manual = $item->s_manual;
} else {
    $manual = $item->manual ? 'Ja' : 'Nej';
}

if ($item->s_invoice) {
    $invoice = $item->s_invoice;
} else {
    $invoice = $item->invoice ? 'Ja' : 'Nej';
}
?>
<h2>Øvrige oplysninger</h2>
<ul class="item-def">
    <li>
        <strong>Garanti:</strong>
        <span><?= $warranty ?></span>
    </li>
    <li>
        <strong>Kvittering:</strong>
        <span><?= $invoice ?></span>
    </li>
    <li>
        <strong>Emballage:</strong>
        <span><?= $package ?></span>
    </li>
    <li>
        <strong>Manual:</strong>
        <span><?= $manual ?></span>
    </li>
    <li>
        <strong>Antal visninger:</strong>
        <span>0</span>
    </li>
    <li>
        <strong>Antal mailsr:</strong>
        <span>0</span>
    </li>
    <?php if ($item->s_age) { ?>
        <li>
            <strong>Age:</strong>
            <span><?= $item->s_age ?></span>
        </li>
    <?php } ?>
    <?php if ($item->s_delivery) { ?>
        <li>
            <strong>Delivery:</strong>
            <span><?= $item->s_delivery ?></span>
        </li>
    <?php } ?>
    <?php if ($item->s_brand) { ?>
        <li>
            <strong>Brand:</strong>
            <span><?= $item->s_brand ?></span>
        </li>
    <?php } ?>
    <?php if ($item->s_expires) { ?>
        <li>
            <strong>Expires:</strong>
            <span><?= $item->s_expires ?></span>
        </li>
    <?php } ?>
    <?php if ($item->s_model) { ?>
        <li>
            <strong>Model:</strong>
            <span><?= $item->s_model ?></span>
        </li>
    <?php } ?>
    <?php if ($item->s_producer) { ?>
        <li>
            <strong>Producer:</strong>
            <span><?= $item->s_producer ?></span>
        </li>
    <?php } ?>
    <?php if ($item->s_watt) { ?>
        <li>
            <strong>Watt:</strong>
            <span><?= $item->s_watt ?></span>
        </li>
    <?php } ?>
    <?php if ($item->s_product) { ?>
        <li>
            <strong>Product:</strong>
            <span><?= $item->s_product ?></span>
        </li>
    <?php } ?>
    <?php if ($item->media_title) { ?>
        <li>
            <strong>Title:</strong>
            <span><?= $item->media_title ?></span>
        </li>
    <?php } ?>
    <?php if ($item->media_genre) { ?>
        <li>
            <strong>Genre:</strong>
            <span><?= $item->media_genre ?></span>
        </li>
    <?php } ?>
    <?php if ($item->media_type) { ?>
        <li>
            <strong>Type:</strong>
            <span><?= $item->media_type ?></span>
        </li>
    <?php } ?>
    <?php if ($item->media_producer) { ?>
        <li>
            <strong>Producer:</strong>
            <span><?= $item->media_producer ?></span>
        </li>
    <?php } ?>
    <?php if ($item->music_artist) { ?>
        <li>
            <strong>Artist:</strong>
            <span><?= $item->music_artist ?></span>
        </li>
    <?php } ?>
    <?php if ($item->media_features) { ?>
        <li>
            <strong>Features:</strong>
            <span><?= $item->media_features ?></span>
        </li>
    <?php } ?>
    <?php if ($item->media_inches) { ?>
        <li>
            <strong>Inches:</strong>
            <span><?= $item->media_inches ?></span>
        </li>
    <?php } ?>
    <?php if ($item->media_size) { ?>
        <li>
            <strong>Size:</strong>
            <span><?= $item->media_size ?></span>
        </li>
    <?php } ?>
    <?php if ($item->eq_capacity) { ?>
        <li>
            <strong>Capacity:</strong>
            <span><?= $item->eq_capacity ?></span>
        </li>
    <?php } ?>
    <?php if ($item->hd_capacity) { ?>
        <li>
            <strong>HDD Capacity:</strong>
            <span><?= $item->hd_capacity ?></span>
        </li>
    <?php } ?>
    <?php if ($item->camera_resolution) { ?>
        <li>
            <strong>Resolution:</strong>
            <span><?= $item->camera_resolution ?></span>
        </li>
    <?php } ?>
    <?php if ($item->optical_zoom) { ?>
        <li>
            <strong>Optical zoom:</strong>
            <span><?= $item->optical_zoom ?></span>
        </li>
    <?php } ?>
    <?php if ($item->speaker) { ?>
        <li>
            <strong>Speaker:</strong>
            <span><?= $item->speaker ?></span>
        </li>
    <?php } ?>
    <?php if ($item->speaker_type) { ?>
        <li>
            <strong>Speaker type:</strong>
            <span><?= $item->speaker_type ?></span>
        </li>
    <?php } ?>
    <?php if ($item->channels) { ?>
        <li>
            <strong>Channels:</strong>
            <span><?= $item->channels ?></span>
        </li>
    <?php } ?>
</ul>