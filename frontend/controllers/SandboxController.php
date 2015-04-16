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
//        $item = Item::find(1)->one();
//        HelperBase::dump($item->category['title']);
//        Yii::error(['error' => 'test', 'id' => '111'], __METHOD__);
    }

    public function actionParser()
    {
        require_once Yii::getAlias('@console') . '/components/Parser/HiFi4All/HiFiItems.php';
        (new HiFiItems())->run();
//        $testId = '289792';
//        $data = (new HiFiItems())->parsePage($testId);
//        HelperBase::dump($data);
//        (new HiFiItems())->saveItem($data);

        /*require_once Yii::getAlias('@console') . '/components/Parser/Dba/DbaItems.php';
        (new DbaItems())->run();*/
    }

    public function actionImages()
    {
//        $res = Yii::$app->image->original('055239df7c3924.jpg')->path();
//        HelperBase::dump($res, true);

//        $res = Yii::$app->image->thumb('055239df7c3924.jpg', '200x52', 'resize');
//        $res = Yii::$app->image->thumb('055239df7c3924.jpg', '200x52', 'crop')->path();
//        echo Html::img($res);
//        HelperBase::dump($res);

//        $res = Yii::$app->image->copy('http://www.hifi4all.dk/ksb/pics/Wisdom%20M50%2011_1_resized2005.jpg', '11223344')->path();
//        HelperBase::dump($res);

//        $url = 'http://www.hifi4all.dk/ksb/pics/dali%20107%201_1_resized2005.jpg';
//        $url = 'http://www.hifi4all.dk/ksb/pics/b&amp;amp;w_2_resized2005.jpg';
        $url = 'http://www.hifi4all.dk/content/articlefiles/3112-IMG_0550_1.jpg';
//        HelperBase::dump(getimagesize($url));
        /*$ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);*/
        $statusCode = HelperBase::checkRemoteFileExistence($url);
        HelperBase::dump($statusCode);
    }
}
