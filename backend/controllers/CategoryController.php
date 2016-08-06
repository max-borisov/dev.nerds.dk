<?php
namespace backend\controllers;

use Yii;
//use yii\filters\AccessControl;
use yii\web\Controller;
//use common\models\LoginForm;
//use yii\filters\VerbFilter;
use yii\helpers\VarDumper;

/**
 * Category controller
 */
class CategoryController extends Controller
{
    public function actionIndex()
    {
        $rows = (new \yii\db\Query())
            ->select(['item_category.title as category', 'item_category.parent_id', 'top_category.title as top_category'])
            ->from('item_category')
            ->innerJoin('top_category', 'top_category.id = item_category.parent_id')
            ->orderBy('item_category.id ASC')
//            ->limit(10)
            ->all();
				
//        echo '<pre>';
//        VarDumper::dump($_GET);
//        echo '</pre>';

        return $this->render('index', ['data' => $rows]);
    }
}
