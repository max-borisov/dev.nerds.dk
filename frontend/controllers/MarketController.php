<?php

namespace frontend\controllers;

use frontend\components\HelperBase;

use frontend\models\Item;
use Yii;
use yii\data\Pagination;

class MarketController extends AppController
{
    public function actionIndex()
    {
        $data = Item::find()->select('id, title, price, s_date, created_at')->with('category', 'type')->orderBy('created_at ASC')->limit(10)->all();
//        HelperBase::dump($data);

        return $this->render('index', ['data' => $data]);

        /*$news = new News();
        $newsCategories = NewsCategory::getDropDownList();
        $filterKeywords = Yii::$app->request->get('filter');
        $filterCategory = Yii::$app->request->get('category');
        $query = $news->queryAll($filterKeywords, $filterCategory);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'data'              => $data,
            'pages'             => $pages,
            'newsCategories'    => $newsCategories,
            'filterKeywords'    => $filterKeywords,
            'filterCategory'    => $filterCategory,
        ]);*/
    }

    /*public function actionView($id)
    {
        $news = News::find()->where('id = :id', [':id' => $id])->one();
        if (!$news) {
            $this->redirect('/news');
        }
        return $this->render('view', ['news' => $news]);
    }*/
}