<?php
$counter = 0;
foreach ($reviews as $review) {
    $class = ++$counter % 2 == 0 ? 'blue-box' : 'green-box';
    echo $this->render('_reviewSmall', ['item' => $review, 'class' => $class, 'counter' => $counter]);
}