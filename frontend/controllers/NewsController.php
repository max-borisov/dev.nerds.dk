<?php

namespace frontend\controllers;

use Yii;
use frontend\models\News;
use yii\data\Pagination;

class NewsController extends AppController
{
    public function actionIndex()
    {
        $news = new News();
        $filter = Yii::$app->request->get('filter');
        $query = $news->queryAll($filter);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'data' => $data,
            'pages' => $pages,
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