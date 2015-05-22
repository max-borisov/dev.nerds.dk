<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\News;

class NewsWidgetBig extends Widget
{
    private $_limit = 3;

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
        return $this->render('newsBig', ['news' => $news]);
    }
}
