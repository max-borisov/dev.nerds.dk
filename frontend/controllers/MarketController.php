<?php

namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use frontend\models\Item;
use frontend\models\TopCategory;
use frontend\models\ItemUserAdv;

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
        $request = Yii::$app->request;
        $itemUserAdv = new ItemUserAdv();
        $itemUserAdv->item_id = $request->get('id');
        if ($request->isPost && $itemUserAdv->load($request->post()) && $itemUserAdv->validate()) {
            $itemUserAdv->save(false);
            Yii::$app->session->setFlash('item_user_adv_success', 'Your message has been saved', true);
            return $this->refresh();
        }

        return $this->render('view', [
            'item' => $item,
            'itemUserAdv' => $itemUserAdv,
        ]);
    }
}