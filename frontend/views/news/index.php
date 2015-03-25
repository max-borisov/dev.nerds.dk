<?php
/* @var $this yii\web\View */
$this->title = 'News';
?>
<h1>Nyheder</h1>
<?= $this->render(
    'filter-form',
    ['newsCategories' => $newsCategories, 'filterKeywords' => $filterKeywords, 'filterCategory' => $filterCategory]
) ?>
<?= $this->render('../shared/link-pager', ['pages' => $pages]) ?>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead class="blue-box">
        <tr>
            <th>Overskrift</th>
            <th>Af</th>
            <th>Dato</th>
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