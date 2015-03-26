<?php

namespace frontend\controllers;

use frontend\components\HelperBase;

use Yii;
use yii\data\Pagination;

class MarketController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');

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