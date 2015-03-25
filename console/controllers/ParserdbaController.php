<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\components\parser\dba\DbaItems;

class ParserdbaController extends Controller
{
    public function actionItems()
    {
        require_once Yii::getAlias('@console') . '/components/Parser/Dba/DbaItems.php';
        (new DbaItems())->run();
        exit(Controller::EXIT_CODE_NORMAL);
    }
}
