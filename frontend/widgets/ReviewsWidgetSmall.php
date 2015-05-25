<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\Review;

class ReviewsWidgetSmall extends Widget
{
    private $_limit = 2;

    public function run()
    {
        $reviews = Review::find()
            ->orderBy('id ASC')
            ->limit($this->_limit)
            ->all();
        return $this->render('reviewsSmall', ['reviews' => $reviews]);
    }
}