<?php

namespace frontend\controllers;

use Yii;

class FrontController extends AppController
{
    public $layout = 'front';

    public function actionIndex()
    {
        return $this->render('index');
    }
}