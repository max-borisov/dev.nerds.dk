<?php
/* @var $this yii\web\View */
?>
<!-- sale items begin -->
<span class="hor-line">&nbsp;</span>
<h2>Brugtmarkedet <span class="sale-ico">&nbsp;</span></h2>
<?php
$counter = 0;
foreach ($items as $item) {
    ++$counter;
    switch($counter) {
        case 1: $class = 'black-box'; break;
        case 2: $class = 'green-box'; break;
        case 3: $class = 'red-box'; break;
        case 4: $class = 'yellow-box'; break;
    }
    echo $this->render('_item', ['item' => $item, 'class' => $class, 'counter' => $counter]);
}
?>
</div>
<!-- sale items end -->