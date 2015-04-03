<?php
/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\ForumWidget;
use frontend\widgets\ReviewsWidget;
use frontend\widgets\NewsWidget;
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
        <article class="red-box">
            <a href="#"><img class="full-width" src="images/img01.jpg" alt=""/></a>
            <section class="padding-add">
                <h3><a href="#">Nyhed: Sonos 5.2 (0)</a></h3>
                <p>
                    <a href="#">Nyd den forbedrede lyd til din PLAYBAR og understøttelse af flere konti for musiktjenester. Android-brugere kan prøve dette i dag i en betaversion. Øvrige brugere får adgang senere i år.</a>
                </p>
            </section>
        </article>
        <span class="hor-line add">&nbsp;</span>
        <article class="green-box">
            <a href="#"><img class="full-width" src="images/img02.jpg" alt=""/></a>
            <section class="padding-add">
                <h3><a href="#">Nyhed: Room AV byder på Dolby Atmos demo (0)</a></h3>
                <p>
                    <a href="#">6 November kan du opleve det nyeste surroundformat hos Room AV</a>
                </p>
            </section>
        </article>
    </div>
</div>
<div class="row form-group">
    <div class="col-sm-3">
        <div class="banner form-group">
            <img class="full-width" src="images/banner_250-360.jpg" alt=""/>
        </div>
        <div class="banner form-group">
            <img class="full-width" src="images/banner_250-360.jpg" alt=""/>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-xs-8">
                <span class="hor-line">&nbsp;</span>
                <?= NewsWidget::widget() ?>
            </div>
            <div class="col-xs-4">
                <span class="hor-line">&nbsp;</span>
                <article class="black-box">
                    <a href="#"><img class="full-width" src="images/img03.jpg" alt=""/></a>
                    <section class="padding-add">
                        <h3><a href="#">Nyhed: Demoaften hos Lydportalen Frederiksberg (0)</a></h3>
                        <p>
                            <a href="#">Lydportalen Frederiksberg holder demo med Audiovectors nye SR serie, 6. november hvor Mads Klifoth gæster butikken.</a>
                        </p>
                    </section>
                </article>
                <span class="hor-line add">&nbsp;</span>
                <article class="red-box">
                    <a href="#"><img class="full-width" src="images/img04.jpg" alt=""/></a>
                    <section class="padding-add">
                        <h3><a href="#">Nyhed: WiMP åbner op for HiFi-lyd direkte i webplayeren (0)</a></h3>
                        <p>
                            <a href="#">Wimp (hifi) nu også tilgængelig direkte i din browser</a>
                        </p>
                    </section>
                </article>
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
        <div class="banner form-group">
            <img alt="" src="images/banner_250-360.jpg" class="full-width">
        </div>
        <div class="banner form-group">
            <img alt="" src="images/banner_250-360.jpg" class="full-width">
        </div>
    </div>
    <div class="col-sm-6 grey-box">
        <div class="row">
            <div class="col-xs-8">
                <span class="hor-line">&nbsp;</span>
                <?= ReviewsWidget::widget() ?>
            </div>
            <div class="col-xs-4">
                <span class="hor-line">&nbsp;</span>
                <article class="blue-box">
                    <a href="#"><img class="full-width" src="images/img05.jpg" alt=""/></a>
                    <section class="padding-add">
                        <h3><a href="#">Nyhed: Vind JBL i julekonkurrencen Nerds.dk (0)</a></h3>
                        <p>
                            <a href="#">Ny standerhøjttaler fra franske Triangle</a>
                        </p>
                    </section>
                </article>
                <span class="hor-line add">&nbsp;</span>
                <article class="green-box">
                    <a href="#"><img class="full-width" src="images/img06.jpg" alt=""/></a>
                    <section class="padding-add">
                        <h3><a href="#">Nyhed: WiMP åbner op for HiFi-lyd direkte i webplayeren (0)</a></h3>
                        <p>
                            <a href="#">I samarbejde med JBL udlover vi to præmier, et sæt JBL Synchros E10 in-ear hovedtelefoner, og en JBL Clip, trådløs bærvar højttaler.</a>
                        </p>
                    </section>
                </article>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <!-- sale items begin -->
        <span class="hor-line">&nbsp;</span>
        <h2>Brugtmarkedet <span class="sale-ico">&nbsp;</span></h2>
        <article class="black-box margin-down">
            <a href="#"><img class="full-width" src="images/img07.jpg" alt=""/></a>
            <section class="padding-add">
                <h3><a href="#">Primare PRE32 + A34.2</a></h3>
                <p>
                    <a href="#">
                        <strong>Type:</strong> Forstærkere<br>
                        <strong>Af:</strong> Molesen
                    </a>
                </p>
                <p><strong>17.500 kr.</strong></p>
            </section>
        </article>
        <article class="green-box margin-down">
            <a href="#"><img class="full-width" src="images/img08.jpg" alt=""/></a>
            <section class="padding-add">
                <h3><a href="#">ATC SIA-2 150</a></h3>
                <p>
                    <a href="#">
                        <strong>Type:</strong> Forstærkere<br>
                        <strong>Af:</strong> Morten014
                    </a>
                </p>
                <p><strong>14.000 kr.</strong></p>
            </section>
        </article>
        <article class="red-box margin-down">
            <a href="#"><img class="full-width" src="images/img09.jpg" alt=""/></a>
            <section class="padding-add">
                <h3><a href="#">Wadia 302  (CD afspiller</a></h3>
                <p>
                    <a href="#">
                        <strong>Type:</strong> CD Afspiller<br>
                        <strong>Af:</strong> savklinge
                    </a>
                </p>
                <p><strong>12.000 kr.</strong></p>
            </section>
        </article>
        <article class="yellow-box margin-down">
            <a href="#"><img class="full-width" src="images/img10.jpg" alt=""/></a>
            <section class="padding-add">
                <h3><a href="#">Væghylde fra Solidsteel</a></h3>
                <p>
                    <a href="#">
                        <strong>Type:</strong> Andet<br>
                        <strong>Af:</strong> audiophile_dk
                    </a>
                </p>
                <p><strong>4.250 kr.</strong></p>
            </section>
        </article>
        <!-- sale items end -->
    </div>
</div>
<?php $this->endContent(); ?>