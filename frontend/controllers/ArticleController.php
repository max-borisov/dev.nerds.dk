<?php

namespace frontend\controllers;

use Yii;
use frontend\controllers;
use frontend\components\HelperBase;

class ArticleController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
