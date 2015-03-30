<?php
/* @var $this yii\web\View */

$this->title = 'Market';
?>
<h1>Nyheder</h1>
<?= $this->render('filter-form', [
    'itemsCategories'   => $itemsCategories,
    'filterKeywords'    => $filterKeywords,
    'filterCategory'    => $filterCategory,
    'priceMin'          => $priceMin,
    'priceMax'          => $priceMax,
]) ?>
<?= $this->render('../shared/link-pager', ['pages' => $pages]) ?>
<div class="table-responsive">
    <table class="table table-hover table-striped marketplace-table">
        <thead class="blue-box">
        <tr>
            <th>Type</th>
            <th>Overskrift</th>
            <th>Kategori</th>
            <th width="100px" style="text-align: center;">Pris</th>
            <th style="text-align: center;">Dato</th>
            <th>Foto</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data as $item) {
            echo $this->render('_item', ['item' => $item]);
        }
        ?>
        </tbody>
    </table>
</div>
<?= $this->render('../shared/link-pager', ['pages' => $pages]) ?>