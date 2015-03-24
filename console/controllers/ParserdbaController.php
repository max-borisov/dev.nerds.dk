<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\components\parser\dba\DbaItems;

class ParserdbaController extends Controller
{
    public function actionItems()
    {
        $this->_checkEnv();
        require_once Yii::getAlias('@console') . '/components/Parser/Dba/DbaItems.php';
        (new DbaItems())->run();
    }

    private function _checkEnv()
    {
        return true;

        if (YII_ENV_DEV) {
            echo "Command does not work under DEV environment.\r\n";
            exit(0);
        }
    }
}
