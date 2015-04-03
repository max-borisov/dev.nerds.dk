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

$mainParams = [
    'Garanti:'         => $warranty,
    'Kvittering:'      => $invoice,
    'Emballage:'       => $package,
    'Manual:'          => $manual,
    'Antal visninger:' => 0,
    'Antal mailsr:'    => 0,
];

$extraParams = [
    'Age:'            => 's_age',
    'Delivery:'       => 's_delivery',
    'Brand:'          => 's_brand',
    'Expires:'        => 's_expires',
    'Model:'          => 's_model',
    'Producer:'       => 's_producer',
    'Watt:'           => 's_watt',
    'Product:'        => 's_product',
    'Title:'          => 'media_title',
    'Genre:'          => 'media_genre',
    'Type:'           => 'media_type',
    'Media producer:' => 'media_producer',
    'Artist:'         => 'music_artist',
    'Features:'       => 'media_features',
    'Inches:'         => 'media_inches',
    'Size:'           => 'media_size',
    'Capacity:'       => 'eq_capacity',
    'HDD Capacity:'   => 'hd_capacity',
    'Resolution:'     => 'camera_resolution',
    'Optical zoom:'   => 'optical_zoom',
    'Speaker:'        => 'speaker',
    'Speaker type:'   => 'speaker_type',
    'Channels:'       => 'channels',
];
?>
<h2>Øvrige oplysninger</h2>
<ul class="list-unstyled item-def row">
    <?php
    foreach ($mainParams as $label => $value) {
        echo <<<EEE
        <li class="col-md-3">
            <div class="pull-left"><strong>$label</strong></div>
            <div class="pull-right"><span>$value</span></div>
        </li>
EEE;
    }

    foreach ($extraParams as $label => $attribute) {
        if ($item->$attribute) {
            echo <<<EEE
            <li class="col-md-3">
                <div class="pull-left"><strong>$label</strong></div>
                <div class="pull-right"><span>{$item->$attribute}</span></div>
            </li>
EEE;
        }
    }
    ?>
</ul>