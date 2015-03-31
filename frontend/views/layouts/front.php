<?php
/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\ForumWidget;
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
                <h2>artikler <span class="glyphicon glyphicon-pencil"></span></h2>
                <!-- news-list begin -->
                <div class="news-list">
                    <article class="yellow-box">
                        <a href="#"><img class="full-width" src="images/news-img01.jpg" alt=""/></a>
                        <section class="padding-add">
                            <h3><a href="#">Hifi &amp; Surround 2014</a></h3>
                            <p>
                                <a href="#">Redaktionen var traditionen tro med på årets største hifimesse, og vi bringer her en grundig gennemgang.</a>
                            </p>
                        </section>
                    </article>
                    <span class="hor-line">&nbsp;</span>
                    <article class="green-box">
                        <a href="#"><img class="full-width" src="images/news-img02.jpg" alt=""/></a>
                        <section class="padding-add">
                            <h3><a href="#">JJ Teknik / AV Centrum</a></h3>
                            <p>
                                <a href="#">Vi tog til Farum og besøgte ikke bare landets Zingali og Xindak importør, men også en af de mest kendte hifi-værksteder.</a>
                            </p>
                        </section>
                    </article>
                    <span class="hor-line">&nbsp;</span>
                    <article class="blue-box">
                        <a href="#"><img class="full-width" src="images/news-img03.jpg" alt=""/></a>
                        <section class="padding-add">
                            <h3><a href="#">Lancering af Audiovectors SR serie</a></h3>
                            <p>
                                <a href="#">Vi var med da Audiovector Lancerede deres nye SR serie</a>
                            </p>
                        </section>
                    </article>
                </div>
                <!-- news-list end -->
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
<div class="row">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-6 form-group">
                <!-- carousel-box begin -->
                <div id="carousel-01" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-01" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-01" data-slide-to="1"></li>
                        <li data-target="#carousel-01" data-slide-to="2"></li>
                        <li data-target="#carousel-01" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a class="test-link" data-footer="Item01 description" data-parent="#carousel-01" data-gallery="global-gallery" data-toggle="lightbox"  href="images/slide-img01.jpg">
                                <img class="img-responsive" data-src="images/slide-img01.jpg" src="images/slide-img01.jpg" alt="product description">
                            </a>
                        </div>
                        <div class="item">
                            <a data-footer="Item02 description" data-parent="#carousel-01" data-gallery="global-gallery" data-toggle="lightbox"  href="images/slide-img02.jpg">
                                <img class="img-responsive" data-src="images/slide-img02.jpg" src="images/slide-img02.jpg" alt="product description">
                            </a>
                        </div>
                        <div class="item">
                            <a data-footer="Item03 description" data-parent="#carousel-01" data-gallery="global-gallery" data-toggle="lightbox"  href="images/slide-img03.jpg">
                                <img class="img-responsive" data-src="images/slide-img03.jpg" src="images/slide-img03.jpg" alt="product description">
                            </a>
                        </div>
                        <div class="item">
                            <a data-footer="Item04 description" data-parent="#carousel-01" data-gallery="global-gallery" data-toggle="lightbox"  href="images/slide-img04.jpg">
                                <img class="img-responsive" data-src="images/slide-img04.jpg" src="images/slide-img03.jpg" alt="product description">
                            </a>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-01" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-01" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- carousel-box end -->
            </div>
            <div class="col-sm-6 form-group">
                <!-- carousel-box begin -->
                <div id="carousel-02" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-02" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-02" data-slide-to="1"></li>
                        <li data-target="#carousel-02" data-slide-to="2"></li>
                        <li data-target="#carousel-02" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a data-footer="Item05 description" data-parent="#carousel-02" data-gallery="global-gallery" data-toggle="lightbox"  href="images/slide-img05.jpg">
                                <img class="img-responsive" data-src="images/slide-img05.jpg" src="images/slide-img05.jpg" alt="product description">
                            </a>
                        </div>
                        <div class="item">
                            <a data-footer="Item06 description" data-parent="#carousel-02" data-gallery="global-gallery" data-toggle="lightbox"  href="images/slide-img06.jpg">
                                <img class="img-responsive" data-src="images/slide-img06.jpg" src="images/slide-img06.jpg" alt="product description">
                            </a>
                        </div>
                        <div class="item">
                            <a data-footer="Item07 description" data-parent="#carousel-02" data-gallery="global-gallery" data-toggle="lightbox"  href="images/slide-img07.jpg">
                                <img class="img-responsive" data-src="images/slide-img07.jpg" src="images/slide-img07.jpg" alt="product description">
                            </a>
                        </div>
                        <div class="item">
                            <a data-footer="Item08 description" data-parent="#carousel-02" data-gallery="global-gallery" data-toggle="lightbox"  href="images/slide-img08.jpg">
                                <img class="img-responsive" data-src="images/slide-img08.jpg" src="images/slide-img08.jpg" alt="product description">
                            </a>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-02" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-02" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- carousel-box end -->
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>
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
                <h2>Anmeldelser <span class="glyphicon glyphicon-edit"></span></h2>
                <!-- news-list begin -->
                <div class="news-list">
                    <article class="black-box">
                        <a href="#"><img class="full-width" src="images/news-img06.jpg" alt=""/></a>
                        <section class="padding-add">
                            <h3><a href="#">Musical Fidelity V90-DAC </a></h3>
                            <p>
                                <a href="#">Årets køb..</a>
                            </p>
                        </section>
                    </article>
                    <span class="hor-line">&nbsp;</span>
                    <article class="yellow-box">
                        <a href="#"><img class="full-width" src="images/news-img07.jpg" alt=""/></a>
                        <section class="padding-add">
                            <h3><a href="#">GDA 125</a></h3>
                            <p>
                                <a href="#">Vi fortsætter sereien "Stor lyd i små rum" med GDA 125 som producenten selv kalder "verdens bedste to-vejs".</a>
                            </p>
                        </section>
                    </article>
                    <span class="hor-line">&nbsp;</span>
                    <article class="red-box">
                        <a href="#"><img class="full-width" src="images/news-img08.jpg" alt=""/></a>
                        <section class="padding-add">
                            <h3><a href="#">Zingali Home Monitor 2.8 </a></h3>
                            <p>
                                <a href="#">Stor lyd i små rum - Italienske hornhøjttalere der er til at betale, og som kan være i de fleste stuer</a>
                            </p>
                        </section>
                    </article>
                </div>
                <!-- news-list end -->
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