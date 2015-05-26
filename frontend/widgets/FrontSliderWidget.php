<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\News;
use frontend\models\Review;

class FrontSliderWidget extends Widget
{
    private $_limit = 4;

    public function run()
    {
        $news = News::find()
                ->select('id, title, preview')
                ->orderBy('id DESC')
                ->limit($this->_limit)
                ->all();
        $reviews = Review::find()
                    ->select('id, title, preview')
                    ->orderBy('id DESC')
                    ->limit($this->_limit)
                    ->all();
        return $this->render('slider', ['news' => $news, 'reviews' => $reviews]);
    }
}
