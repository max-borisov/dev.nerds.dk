<h2>Anmeldelser <span class="glyphicon glyphicon-edit"></span></h2>
<!-- articles-list begin -->
<div class="news-list">
    <?php
    $counter = 0;
    foreach ($reviews as $review) {
        ++$counter;
        switch($counter) {
            case 1: $class = 'black-box'; break;
            case 2: $class = 'yellow-box'; break;
            case 3: $class = 'red-box'; break;
        }
        echo $this->render('_reviewBig', ['item' => $review, 'class' => $class, 'counter' => $counter]);
    }
    ?>
</div>
<!-- articles-list end -->