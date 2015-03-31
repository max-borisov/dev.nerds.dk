<?php
$class = $count ? 'alert-info' : 'alert-warning';
?>
<div class="alert <?= $class ?>" role="alert">
    <?= $count ?> items were found
</div>