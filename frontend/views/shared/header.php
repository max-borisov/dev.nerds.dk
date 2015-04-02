<?php
use yii\helpers\Url;
use frontend\components\HelperBase;

$siteUrl = HelperBase::getParam('siteUrl');
$siteName = str_replace('http://', '', $siteUrl);
?>
<header id="header">
    <div class="header-top">
        <h1 class="logo">
            <a href="<?= Url::to(HelperBase::getParam('siteUrl')) ?>">
                <img alt="<?= $siteName ?>" src="/images/logo.jpg">
            </a></h1>
        <div class="header-top-banner">
            <img alt="header banner 728*90" src="/images/banner_728-90.jpg">
        </div>
    </div>
    <!-- nav begin -->
    <?= $this->render('top-menu') ?>
    <!-- nav end -->
</header>