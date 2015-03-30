<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<form class="form-inline">
    <label for="filter" class="margin-down">Filtrér:</label>
    <?= Html::dropDownList(
        'category',
        $filterCategory,
        $itemsCategories,
        [
            'id' => 'filter',
            'class' => 'form-control margin-down',
            'prompt' => '---------------------------------'
        ]
    ) ?>
    <input type="text" name="filter" value="<?= $filterKeywords ?>" class="form-control margin-down" placeholder="Søgeord">
    <input type="text" name="price-min" value="<?= $priceMin ?>" class="form-control margin-down small-text-input" placeholder="Min. pris">
    <input type="text" name="price-max" value="<?= $priceMax ?>" class="form-control margin-down small-text-input" placeholder="Max. pris">
    <button type="submit" class="btn btn-primary margin-down">Søg</button>
    <a class="btn btn-default margin-down" href="<?= Url::to('/market') ?>">Slet</a>
</form>