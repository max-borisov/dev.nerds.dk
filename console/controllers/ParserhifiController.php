<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\components\parser\hifi\HiFiItems;
use console\components\parser\hifi\HiFiNews;
use console\components\parser\hifi\HiFiReviews;

class ParserhifiController extends Controller
{
    public function actionItems()
    {
        require_once Yii::getAlias('@console') . '/components/Parser/HiFi4All/HiFiItems.php';
        (new HiFiItems())->run();
        exit(Controller::EXIT_CODE_NORMAL);
    }

    public function actionNews()
    {
        require_once Yii::getAlias('@console') . '/components/Parser/HiFi4All//HiFiNews.php';
        (new HiFiNews())->run();
        exit(Controller::EXIT_CODE_NORMAL);
    }

    public function actionReviews()
    {
        require_once Yii::getAlias('@console') . '/components/Parser/HiFi4All//HiFiReviews.php';
        (new HiFiReviews())->run();
        exit(Controller::EXIT_CODE_NORMAL);
    }
}
