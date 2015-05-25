<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\News;

class NewsWidgetMiddle extends Widget
{
    // @todo Get random news
    private $_limit = 2;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $news = News::find()
                    ->orderBy('id DESC')
                    ->limit($this->_limit)
                    ->all();
        return $this->render('newsMiddle', ['news' => $news]);
    }
}
