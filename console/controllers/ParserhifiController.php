<?php

namespace console\controllers;

use frontend\components\HelperBase;

use Yii;
use yii\console\Controller;
use console\components\parser\hifi\HiFiItems;
use console\components\parser\hifi\HiFiNews;
use console\components\parser\hifi\HiFiReviews;

class ParserhifiController extends Controller
{
    public function actionItems()
    {
        $this->_checkEnv();
        require_once Yii::getAlias('@console') . '/components/Parser/HiFi4All/HiFiItems.php';
        (new HiFiItems())->run();
    }

    public function actionNews()
    {
//        $this->_checkEnv();
        require_once Yii::getAlias('@console') . '/components/Parser/HiFi4All//HiFiNews.php';
        (new HiFiNews())->run();
    }

    public function actionReviews()
    {
//        $this->_checkEnv();
        require_once Yii::getAlias('@console') . '/components/Parser/HiFi4All//HiFiReviews.php';
        (new HiFiReviews())->run();
    }

    private function _checkEnv()
    {
        if (YII_ENV_DEV) {
            echo "Command does not work under DEV environment.\r\n";
            exit(0);
        }
    }
}
