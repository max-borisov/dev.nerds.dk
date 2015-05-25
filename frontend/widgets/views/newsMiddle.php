<?php
/* @var $this yii\web\View */

$counter = 0;
foreach ($news as $item) {
    $class = $counter++ % 2 == 0 ? 'red-box' : 'green-box';
    echo $this->render('_newsMiddle', ['item' => $item, 'class' => $class, 'counter' => $counter]);
}
