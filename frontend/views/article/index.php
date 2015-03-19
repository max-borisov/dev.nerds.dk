<?php
/* @var $this yii\web\View */
$this->title = 'Atricles';
?>

<article class="col-sm-9">
    <h1>Artikler</h1>
    <form>
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="filter">Filtrér:</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Email" id="filter" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Søg</button>
                <a class="btn btn-default" href="#">Slet</a>
            </div>
        </div>
    </form>
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
</article>