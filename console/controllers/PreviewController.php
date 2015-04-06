<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

class PreviewController extends Controller
{
    public function actionUp()
    {
        set_time_limit(0);


    }

    public function actionDown()
    {
//        exit(Controller::EXIT_CODE_NORMAL);
    }
}
