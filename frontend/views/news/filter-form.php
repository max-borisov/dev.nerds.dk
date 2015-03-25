<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<form class="form-inline" method="get" action="">
    <label for="filter" class="margin-down">Filtrér:</label>
    <?= Html::dropDownList(
        'category',
        $filterCategory,
        $newsCategories,
        ['id' => 'filter', 'class' => 'form-control margin-down', 'prompt' => '---------------------------------']
    ) ?>
    <input type="text" name="filter" value="<?= $filterKeywords ?>" class="form-control margin-down" placeholder="Søgeord">
    <button type="submit" class="btn btn-primary margin-down">Søg</button>
    <a class="btn btn-default margin-down" href="<?= Url::to('/news') ?>">Slet</a>
</form>