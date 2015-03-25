<?php
/* @var $this yii\web\View */

$this->title = 'Atricles';
?>
<h1>Artikler</h1>
<?= $this->render('filter-form', ['filterKeywords' => $filterKeywords]) ?>
<?= $this->render('../shared/link-pager', ['pages' => $pages]) ?>
<div class="table-responsive">
    <table class="table table-hover articles-table">
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