<?php

namespace frontend\controllers;

use frontend\models\Item;
use Yii;
use yii\base\ErrorException;
use yii\db\Exception;
use yii\helpers\Html;
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

    public function actionImages()
    {
        $res = Yii::$app->image->original('055239df7c3924.jpg')->path();
//        HelperBase::dump($res, true);

//        $res = Yii::$app->image->thumb('055239df7c3924.jpg', '200x52', 'resize');
        $res = Yii::$app->image->thumb('055239df7c3924.jpg', '200x52', 'crop')->path();
//        echo Html::img($res);
        HelperBase::dump($res);
    }
}
