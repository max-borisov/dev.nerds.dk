<?php
use yii\helpers\Url;
?>
<form class="form-inline" action="" method="get">
    <label for="filter" class="margin-down">Filtrér:</label>
    <input type="text" name="filter" value="<?= Yii::$app->request->get('filter') ?>" class="form-control margin-down" placeholder="Søgeord">
    <button type="submit" class="btn btn-primary margin-down">Søg</button>
    <a class="btn btn-default margin-down" href="<?= Url::to('/articles') ?>">Slet</a>
</form>