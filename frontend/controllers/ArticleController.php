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
        $query = Review::query();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $data = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'data'      => $data,
            'pages'     => $pages,
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
