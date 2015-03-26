<?php

namespace frontend\controllers;

use frontend\models\Item;
use Yii;
use yii\base\ErrorException;
use yii\db\Exception;
use yii\web\Controller;
use frontend\models\Review;
use frontend\components\HelperBase;

class SandboxController extends Controller
{
    public function actionIndex()
    {
        $item = Item::find(1)->one();
        HelperBase::dump($item->category['title']);
    }
}
