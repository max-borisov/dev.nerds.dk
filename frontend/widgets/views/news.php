<?php
/* @var $this yii\web\View */

use frontend\components\HelperBase;
?>
<h2>Nyheder / artikler <span class="glyphicon glyphicon-pencil"></span></h2>
<!-- news-list begin -->
<div class="news-list">
    <?php
    $counter = 0;
//    HelperBase::dump(count($news));
    foreach ($news as $item) {
        ++$counter;
        switch($counter) {
            case 1: $class = 'yellow-box';
            case 2: $class = 'green-box';
            case 3: $class = 'blue-box';
        }
        echo $this->render('_news', ['item' => $item, 'class' => $class]);
    }
    ?>

    <!--<article class="yellow-box">
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
    </article>-->

</div>
<!-- news-list end -->