<?php
/* @var $this yii\web\View */
?>
<h2>Nyheder / artikler <span class="glyphicon glyphicon-pencil"></span></h2>
<!-- news-list begin -->
<div class="news-list">
    <?php
    $counter = 0;
    foreach ($news as $item) {
        ++$counter;
        switch($counter) {
            case 1: $class = 'yellow-box'; break;
            case 2: $class = 'green-box'; break;
            case 3: $class = 'blue-box'; break;
        }
        echo $this->render('_newsBig', ['item' => $item, 'class' => $class, 'counter' => $counter]);
    }
    ?>
</div>
<!-- news-list end -->