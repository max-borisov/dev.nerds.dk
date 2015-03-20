<?php

use yii\widgets\LinkPager;
use frontend\components\HelperBase;

// display pagination
echo '<nav class="pagination-holder">';
echo LinkPager::widget([
    'pagination'        => $pages,
    'maxButtonCount'    => HelperBase::getParam('linkPagerButtonsCount')
]);
echo '</nav>';