<?php

namespace frontend\controllers;

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
        $post = Review::find(1)->one()->post;
        $post = strip_tags($post, '<img>');
        $pattern = '/src="([^"]+)"/i';
        preg_match($pattern, $post, $matches);
        HelperBase::dump($matches);

//        echo
        HelperBase::dump($post);
    }
}
