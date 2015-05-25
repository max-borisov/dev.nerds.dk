<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\Review;

class ReviewsWidgetBig extends Widget
{
    private $_limit = 3;

    public function run()
    {
        $reviews = Review::find()
            ->orderBy('id DESC')
            ->limit($this->_limit)
            ->all();
        return $this->render('reviewsBig', ['reviews' => $reviews]);
    }
}