<?php

namespace frontend\controllers;

use frontend\components\HelperBase;

use Yii;
use yii\data\Pagination;
use frontend\models\Item;
use frontend\models\TopCategory;

class MarketController extends AppController
{
    public function actionIndex()
    {
        $itemsCategories = TopCategory::getDropDownList();
        $filterKeywords = Yii::$app->request->get('filter');
        $priceMin = Yii::$app->request->get('price-min');
        $priceMax = Yii::$app->request->get('price-max');
        $filterCategory = Yii::$app->request->get('category');
        $query = (new Item)->queryAll($filterKeywords, $filterCategory, $priceMin, $priceMax);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $data = $query
            ->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'data'              => $data,
            'pages'             => $pages,
            'itemsCategories'   => $itemsCategories,
            'filterKeywords'    => $filterKeywords,
            'filterCategory'    => $filterCategory,
            'priceMin'          => $priceMin,
            'priceMax'          => $priceMax,
        ]);
    }

    public function actionView($id)
    {
        $item = Item::find()->where('id = :id', [':id' => $id])->one();
        if (!$item) {
            $this->redirect('/market');
        }
        return $this->render('view', ['item' => $item]);
    }
}