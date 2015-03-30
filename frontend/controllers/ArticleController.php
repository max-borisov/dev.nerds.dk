<?php

namespace frontend\controllers;

use Yii;
use frontend\controllers;
use frontend\models\Review;
use yii\data\Pagination;

class ArticleController extends AppController
{
    public function actionIndex()
    {
        $filterKeywords = Yii::$app->request->get('filter');
        $query = (new Review)->queryAll($filterKeywords);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'data'              => $data,
            'pages'             => $pages,
            'filterKeywords'    => $filterKeywords,
        ]);
    }

    public function actionView($id)
    {
        $article = Review::find()->where('id = :id', [':id' => $id])->asArray()->one();
        if (!$article) {
            $this->redirect('/articles');
        }
        return $this->render('view', ['article' => $article]);
    }
}
