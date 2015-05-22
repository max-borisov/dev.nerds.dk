<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\News;

class NewsWidgetSmall extends Widget
{
    private $_limit = 2;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $news = News::find()
                    ->orderBy('id ASC')
                    ->limit($this->_limit)
                    ->all();
        return $this->render('newsSmall', ['news' => $news]);
    }
}
