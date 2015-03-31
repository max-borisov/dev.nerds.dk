<?php
/* @var $this yii\web\View */

$this->title = 'News';
$newsCount = $pages->totalCount;
?>
<h1>Nyheder</h1>
<?= $this->render(
    'filter-form',
    ['newsCategories' => $newsCategories, 'filterKeywords' => $filterKeywords, 'filterCategory' => $filterCategory]
) ?>
<?= $this->render('../shared/records-count', ['count' => $newsCount]) ?>
<?= $this->render('../shared/link-pager', ['pages' => $pages]) ?>
<?php if ($newsCount) { ?>
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
<?php } ?>
<?= $this->render('../shared/link-pager', ['pages' => $pages]) ?>