<?php
namespace backend\controllers;

use Yii;
//use yii\filters\AccessControl;
use yii\web\Controller;
//use common\models\LoginForm;
//use yii\filters\VerbFilter;

/**
 * Index controller
 */
class IndexController extends Controller
{
    public function actionIndex()
    {
//        echo '1212';
        return $this->render('index');
    }
}
