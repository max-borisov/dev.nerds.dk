<?php
/* @var $newsItem frontend\models\News */
/* @var $reviewItem frontend\models\Review */

use yii\helpers\Url;

$previewSize = '262x196';
$previewAction = 'crop';
?>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-6 form-group">
                <!-- carousel-box begin -->
                <div id="carousel-01" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-01" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-01" data-slide-to="1"></li>
                        <li data-target="#carousel-01" data-slide-to="2"></li>
                        <li data-target="#carousel-01" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $counter = 0;
                        foreach ($news as $newsItem) {
                            $preview = $newsItem->getPreview($newsItem->preview, $previewSize, $previewAction);
                            $original = Yii::$app->image->original($newsItem->preview)->path();
                            $class = $counter++ == 0 ? ' active' : '';
                            $newsUrl = Url::to('/news/' . $newsItem->id);
                        ?>
                            <div class="item<?= $class ?>">
                                <a
                                    class="test-link"
                                    data-parent="#carousel-01"
                                    data-gallery="global-gallery"
                                    href="<?= $newsUrl ?>">
                                    <img
                                        class="img-responsive"
                                        src="<?= $preview ?>"
                                        alt="<?= $newsItem->title ?>">
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <a class="left carousel-control" href="#carousel-01" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-01" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- carousel-box end -->
            </div>
            <div class="col-sm-6 form-group">
                <!-- carousel-box begin -->
                <div id="carousel-02" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-02" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-02" data-slide-to="1"></li>
                        <li data-target="#carousel-02" data-slide-to="2"></li>
                        <li data-target="#carousel-02" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $counter = 0;
                        foreach ($reviews as $reviewItem) {
                            $preview = $reviewItem->getPreview($reviewItem->preview, $previewSize, $previewAction);
                            $original = Yii::$app->image->original($reviewItem->preview)->path();
                            $class = $counter++ == 0 ? ' active' : '';
                            $reviewUrl = Url::to('/articles/' . $reviewItem->id);
                        ?>
                            <div class="item<?= $class ?>">
                                <a
                                    data-parent="#carousel-02"
                                    data-gallery="global-gallery"
                                    href="<?= $reviewUrl ?>">
                                    <img
                                        class="img-responsive"
                                        src="<?= $preview ?>"
                                        alt="<?= $reviewItem->title ?>">
                                </a>
                            </div>
                    <?php } ?>
                    </div>
                    <a class="left carousel-control" href="#carousel-02" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-02" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- carousel-box end -->
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>