<?php
use yii\helpers\Url;
?>
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
                <a href="<?= Url::to('articles') ?>">Artikler</a>
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
