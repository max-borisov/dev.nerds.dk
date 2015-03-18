
<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Nerds.dk - Hifi, Stereo &amp; Lyd</title>
    <link href="/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body role="document">
<?php $this->beginBody() ?>
<div class="container theme-showcase" role="main">
<!-- header begin -->
<header id="header">
    <div class="header-top">
        <h1 class="logo"><a href="http://nerds.dk/"><img alt="Nerds.dk" src="/images/logo.jpg"></a></h1>
        <div class="header-top-banner">
            <img alt="header banner 728*90" src="/images/banner_728-90.jpg">
        </div>
    </div>
    <!-- nav begin -->
    <nav id="nav">
        <strong class="logo"><a href="http://nerds.dk/"><img alt="Nerds.dk" src="/images/logo-small.png"></a></strong>
        <ul>
            <li class="black">
                <div class="item-holder">
                    <a href="#">Forside</a>
                    <ul>
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                        <li><a href="#">link 4</a></li>
                    </ul>
                </div>
            </li>
            <li class="green">
                <div class="item-holder">
                    <a href="#">Nyheder</a>
                    <ul>
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                        <li><a href="#">link 4</a></li>
                    </ul>
                </div>
            </li>
            <li class="purple">
                <div class="item-holder">
                    <a href="#">Artikler</a>
                    <ul>
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                        <li><a href="#">link 4</a></li>
                    </ul>
                </div>
            </li>
            <li class="yellow">
                <div class="item-holder">
                    <a href="#">Anmeldelser</a>
                    <ul>
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                        <li><a href="#">link 4</a></li>
                    </ul>
                </div>
            </li>
            <li class="red">
                <div class="item-holder">
                    <a href="#">Markedspladsen</a>
                    <ul>
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                        <li><a href="#">link 4</a></li>
                    </ul>
                </div>
            </li>
            <li class="green">
                <div class="item-holder">
                    <a href="#">Forum</a>
                    <ul>
                        <li><a href="#">link 1</a></li>
                        <li><a href="#">link 2</a></li>
                        <li><a href="#">link 3</a></li>
                        <li><a href="#">link 4</a></li>
                    </ul>
                </div>
            </li>
            <li class="purple"><a href="#">Chatten</a></li>
        </ul>
    </nav>
    <!-- nav end -->
</header>
<!-- header end -->
<div class="row form-group">
<?= $content ?>
<!-- aside begin -->
<aside class="col-sm-3 ">
    <span class="hor-line">&nbsp;</span>
    <!-- login-box begin -->
    <div class="form-box">
        <h2>brugermenu <span class="glyphicon glyphicon-user"></span></h2>
        <form action="#">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" type="text" id="brugernavn" placeholder="Brugernavn"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" id="adgangskode" placeholder="Adgangskode"/>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>
                                <input type="checkbox"> Husk mlg
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input class="btn btn-primary" type="submit" value="Login"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="small-text">Har du glemt dit password?</span>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default">Ny bruger</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- login-box end -->
    <span class="hor-line">&nbsp;</span>
    <!-- forum-box begin -->
    <div class="forum-box blue-box margin-down">
        <h2>forummet <span class="glyphicon glyphicon-comment"></span></h2>
        <ul class="forum-list">
            <li><a href="#">Vinterdepression... elle... <span>(37)</span> </a></li>
            <li><a href="#">Pink Floyd - The Endless... <span>(0)</span> </a></li>
            <li><a href="#">SME FD fluid damper 3009... <span>(3)</span> </a></li>
            <li><a href="#">"Ren" strøm p... <span>(21)</span> </a></li>
            <li><a href="#">Mortens anlæg anno nove... <span>(18)</span> </a></li>
            <li><a href="#">Professionel rensning af... <span>(0)</span> </a></li>
            <li><a href="#">Philips Bloom lamper <span>(4)</span> </a></li>
            <li><a href="#">Hvad hører du nu ? <span>(9155)</span> </a></li>
            <li><a href="#">Din næste pickup? <span>(21)</span> </a></li>
            <li><a href="#">Musik i mellageret... <span>(561)</span> </a></li>
            <li><a href="#">Ny Facebook Gruppe <span>(6)</span> </a></li>
            <li><a href="#">JBL LSR 308 <span>(4)</span> </a></li>
            <li><a href="#">Vinterdepression... elle... <span>(37)</span> </a></li>
            <li><a href="#">Pink Floyd - The Endless... <span>(0)</span> </a></li>
            <li><a href="#">SME FD fluid damper 3009... <span>(3)</span> </a></li>
            <li><a href="#">"Ren" strøm p... <span>(21)</span> </a></li>
            <li><a href="#">Mortens anlæg anno nove... <span>(18)</span> </a></li>
            <li><a href="#">Professionel rensning af... <span>(0)</span> </a></li>
            <li><a href="#">Philips Bloom lamper <span>(4)</span> </a></li>
        </ul>
    </div>
    <!-- forum-box end -->
    <span class="hor-line">&nbsp;</span>
    <div class="marketplace-box green-box">
        <h2>Markedspladsen <span class="glyphicon glyphicon-shopping-cart"></span></h2>
        <ul>
            <li><a href="#">Primare PRE31 + A34.2</a></li>
            <li><a href="#">Audia Flight Three </a></li>
            <li><a href="#">Snell Type E/IV</a></li>
            <li><a href="#">LINN DSi</a></li>
            <li><a href="#">Alluxity - PRE ONE</a></li>
            <li><a href="#">Nordost Super Flatline M...</a></li>
            <li><a href="#">DYRHOLM AUDIO ZODIAC KABLER</a></li>
            <li><a href="#">Harman Kardon Hd7725</a></li>
            <li><a href="#">Januar Udsalg</a></li>
            <li><a href="#">FocusAudio FS6se</a></li>
            <li><a href="#">Stillpoints afkobling</a></li>
            <li><a href="#">Csn Teknik spar 66 % Cus...</a></li>
        </ul>
    </div>
</aside>
<!-- aside end -->
</div>
<span class="hor-line">&nbsp;</span>
<!-- footer begin -->
<footer id="footer" class="row">
    <div class="col-sm-3">
        <h4>ALLE RETTIGHEDER FORBEHOLDES</h4>
    </div>
    <div class="col-sm-3">
        <h4>ANNONCERING PÅ NERDS.DK</h4>
        <p>Ønsker du at annoncere på Nerds.DK er der flere muligheder.</p>
        <p>Kontakt: <a href="mailto:&#097;&#100;&#109;&#105;&#110;&#064;&#110;&#101;&#114;&#100;&#115;&#046;&#100;&#107;">&#097;&#100;&#109;&#105;&#110;&#064;&#110;&#101;&#114;&#100;&#115;&#046;&#100;&#107;</a>.</p>
    </div>
    <div class="col-sm-3">
        <h4>OM NERDS.DK</h4>
        <p>Nerds.DK laver anmeldelser, besøgs-artikler og bringer pressemeddelser og meget andet.</p>
    </div>
    <div class="col-sm-3">
        <h4>KONTAKT OS</h4>
        <p>E-Mail: <a href="mailto:&#109;&#097;&#105;&#108;&#064;&#110;&#101;&#114;&#100;&#115;&#046;&#100;&#107;">&#109;&#097;&#105;&#108;&#064;&#110;&#101;&#114;&#100;&#115;&#046;&#100;&#107;</a></p>
    </div>
</footer>
<!-- footer end -->
</div> <!-- /container -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/ekko-lightbox-min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>
<script type="text/javascript" src="js/jquery.main.js"></script>-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>