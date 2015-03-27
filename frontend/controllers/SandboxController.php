<?php

namespace frontend\controllers;

use frontend\models\Item;
use Yii;
use yii\base\ErrorException;
use yii\db\Exception;
use yii\web\Controller;
use frontend\models\Review;
use frontend\components\HelperBase;
use console\components\parser\hifi\HiFiItems;
use console\components\parser\dba\DbaItems;

class SandboxController extends Controller
{
    public function actionIndex()
    {
        $item = Item::find(1)->one();
        HelperBase::dump($item->category['title']);
    }

    public function actionParser()
    {
//        require_once Yii::getAlias('@console') . '/components/Parser/HiFi4All/HiFiItems.php';
//        (new HiFiItems())->run();

        require_once Yii::getAlias('@console') . '/components/Parser/Dba/DbaItems.php';
        (new DbaItems())->run();
    }
}
