<?php
/* @var $item frontend\models\Item */

use frontend\components\HelperBase;

$notGiven = '<em>Ikke oplyst</em>';
$pubDate = HelperBase::formatPostDate($item->s_date ? $item->s_date : $item->created_at);
if ($item->s_expires) {
    if (preg_match('/[a-z]+/', $item->s_expires)) {
        $expires = $item->s_expires;
    } else {
        $expires = HelperBase::formatPostDate($item->s_expires);
    }
} else {
    $expires = $notGiven;
}
?>
<div class="table-responsive margin-down">
    <table class="table table-hover table-striped marketplace-table">
        <tbody>
        <tr>
            <td><strong>Annoncør:</strong></td>
            <td><?= $item->s_user ? $item->s_user : $notGiven ?></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Tlf.:</strong></td>
            <td><?= $item->s_phone ? $item->s_phone : $notGiven ?></td>
            <td><strong>Annoncetype:</strong></td>
            <td><?= $item->adType['title'] ?></td>
        </tr>
        <tr>
            <td><strong>Lokalitet:</strong></td>
            <td><?= $item->s_location ? $item->s_location : $notGiven ?></td>
            <td><strong>Kategori:</strong></td>
            <td><?= $item->category['title'] ?></td>
        </tr>
        <tr>
            <td><strong>Indrykket:</strong></td>
            <td><?= $pubDate ?></td>
            <td><strong>Nypris:</strong></td>
            <td><?= $notGiven ?></td>
        </tr>
        <tr>
            <td><strong>Udløber:</strong></td>
            <td><?= $item->s_expires ? $expires : $notGiven ?></td>
            <td><strong>Salgspris:</strong></td>
            <td><strong><em><?= $item->price ?> DKK</em></strong></td>
        </tr>
        </tbody>
    </table>
</div>