<?php

namespace frontend\controllers;

use Yii;
use frontend\models\News;
use frontend\models\NewsCategory;
use yii\data\Pagination;

class NewsController extends AppController
{
    public function actionIndex()
    {
        $news = new News();
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
        ]);
    }

    public function actionView($id)
    {
        $news = News::find()->where('id = :id', [':id' => $id])->one();
        if (!$news) {
            $this->redirect('/news');
        }
        return $this->render('view', ['news' => $news]);
    }
}