<?php

namespace frontend\controllers;

use Yii;
use frontend\controllers;
use frontend\models\Review;
use frontend\components\HelperBase;
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
//        HelperBase::dump($pages, true);
        return $this->render('index', [
            'data'      => $data,
            'pages'     => $pages,
        ]);
    }
}
