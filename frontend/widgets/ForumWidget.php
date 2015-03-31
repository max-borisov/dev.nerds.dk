<?php

namespace frontend\widgets;

use yii\base\Widget;

class ForumWidget extends Widget
{
    public function run()
    {
        return $this->render('forum');
    }
}
