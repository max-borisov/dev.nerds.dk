<?php
/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\ForumWidget;
use frontend\widgets\NewsWidgetBig;
use frontend\widgets\NewsWidgetMiddle;
use frontend\widgets\NewsWidgetSmall;
use frontend\widgets\AdBlockTop;
use frontend\widgets\AdBlockBottom;
use frontend\widgets\ReviewsWidgetBig;
use frontend\widgets\ReviewsWidgetSmall;
use frontend\widgets\ItemsWidget;
?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>
<div class="row form-group">
    <div class="col-sm-3">
        <span class="hor-line">&nbsp;</span>
        <?= $this->render('../shared/login-form') ?>
    </div>
    <div class="col-sm-6">
        <div class="banner">
            <img src="images/banner_580-400.jpg" alt=""/>
        </div>
    </div>
    <div class="col-sm-3 ">
        <span class="hor-line">&nbsp;</span>
        <?= NewsWidgetMiddle::widget() ?>
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-3">
        <?= AdBlockTop::widget() ?>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-xs-8">
                <span class="hor-line">&nbsp;</span>
                <?= NewsWidgetBig::widget() ?>
            </div>
            <div class="col-xs-4">
                <span class="hor-line">&nbsp;</span>
                <?= NewsWidgetSmall::widget() ?>
            </div>
        </div>
    </div>
    <!-- forum-box begin -->
    <div class="col-sm-3">
        <span class="hor-line">&nbsp;</span>
        <?= ForumWidget::widget() ?>
    </div>
    <!-- forum-box end -->
</div>
<?= $this->render('partial/_carousel') ?>
<div class="row form-group">
    <div class="col-sm-3">
        <?= AdBlockBottom::widget() ?>
    </div>
    <div class="col-sm-6 grey-box">
        <div class="row">
            <div class="col-xs-8">
                <span class="hor-line">&nbsp;</span>
                <?= ReviewsWidgetBig::widget() ?>
            </div>
            <div class="col-xs-4">
                <span class="hor-line">&nbsp;</span>
                <?= ReviewsWidgetSmall::widget() ?>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <!-- sale items begin -->
        <?= ItemsWidget::widget() ?>
        <!-- sale items end -->
    </div>
</div>
<?php $this->endContent(); ?>