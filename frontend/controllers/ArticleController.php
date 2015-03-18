<?php

namespace frontend\controllers;

use Yii;
use frontend\controllers;

class ArticleController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
