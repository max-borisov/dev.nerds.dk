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

if ($item->s_akn) {
    $invoice = $item->s_akn;
} else {
    $invoice = $item->invoice ? 'Ja' : 'Nej';
}
?>
<h2>Øvrige oplysninger</h2>
<div class="table-responsive margin-down">
    <table class="table table-hover table-striped marketplace-table">
        <tbody>
        <tr>
            <td><strong>Garanti:</strong></td>
            <td><?= $warranty ?></td>
            <td><strong>Kvittering:</strong></td>
            <td><?= $invoice ?></td>
            <td><strong>Emballage:</strong></td>
            <td><?= $package ?></td>
            <td><strong>Manual:</strong></td>
            <td>Ja</td>
        </tr>
        <tr>
            <td><strong>Antal visninger:</strong></td>
            <td>0</td>
            <td><strong>Antal mails:</strong></td>
            <td>0</td>
            <td><strong>Age:</strong></td>
            <td><?= $item->s_age ?></td>
            <td><strong>Delivery:</strong></td>
            <td><?= $item->s_delivery ?></td>
        </tr>
        <tr>
            <td><strong>Brand:</strong></td>
            <td><?= $item->s_brand ?></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>