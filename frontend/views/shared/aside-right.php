<?php
use frontend\widgets\MarketWidget;
use frontend\widgets\ForumWidget;
?>
<!-- aside begin -->
<aside class="col-sm-3 ">
    <span class="hor-line">&nbsp;</span>
    <?= $this->render('../shared/login-form') ?>
    <span class="hor-line">&nbsp;</span>
    <?= ForumWidget::widget() ?>
    <span class="hor-line">&nbsp;</span>
    <?= MarketWidget::widget() ?>
</aside>
<!-- aside end -->