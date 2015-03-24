<?php

namespace frontend\controllers;

use Yii;
use yii\helpers;
use frontend\models\Item;
use frontend\models\News;
use frontend\models\NewsCategory;
use frontend\models\Review;
use frontend\models\ExternalSite;

class StatController extends AppController
{
    public function actionIndex()
    {
        $itemsHiFi      = Item::find()->where('site_id = ' . ExternalSite::HIFI4ALL)->count();
        $itemsDba       = Item::find()->where('site_id = ' . ExternalSite::DBA)->count();
        $newsHiFi       = News::find()->where('site_id = ' . ExternalSite::HIFI4ALL)->count();
        $newsRec        = News::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $reviewsHiFi    = Review::find()->where('site_id = ' . ExternalSite::HIFI4ALL)->count();
        $reviewsRec     = Review::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();

        $gamesRec = News::find()->where(
                        'site_id = :site_id AND category_id = :cat_id',
                        [':site_id' => ExternalSite::RECORDERE, ':cat_id' => NewsCategory::GAMES])->count();
        $tvRec = News::find()->where(
                    'site_id = :site_id AND category_id = :cat_id',
                    [':site_id' => ExternalSite::RECORDERE, ':cat_id' => NewsCategory::TV])->count();

        $musicRec = News::find()->where(
                        'site_id = :site_id AND category_id = :cat_id',
                        [':site_id' => ExternalSite::RECORDERE, ':cat_id' => NewsCategory::MUSIC])->count();
        $moviesRec = News::find()->where(
                        'site_id = :site_id AND category_id = :cat_id',
                        [':site_id' => ExternalSite::RECORDERE, ':cat_id' => NewsCategory::MOVIES])->count();
        $mediaRec = News::find()->where(
                        'site_id = :site_id AND category_id = :cat_id',
                        [':site_id' => ExternalSite::RECORDERE, ':cat_id' => NewsCategory::MEDIA])->count();
        $radioRec = News::find()->where(
                        'site_id = :site_id AND category_id = :cat_id',
                        [':site_id' => ExternalSite::RECORDERE, ':cat_id' => NewsCategory::RADIO])->count();

        $itemsTotal     = $itemsHiFi + $itemsDba;
        $newsTotal      = $newsHiFi + $newsRec;
        $reviewsTotal   = $reviewsHiFi + $reviewsRec;
        $data = [
            'itemsHiFi'     => $itemsHiFi,
            'itemsDba'      => $itemsDba,
            'newsHiFi'      => $newsHiFi,
            'newsRec'       => $newsRec,
            'reviewsHiFi'   => $reviewsHiFi,
            'reviewsRec'    => $reviewsRec,

            'gamesRec'     => $gamesRec,
            'tvRec'        => $tvRec,
            'musicRec'     => $musicRec,
            'moviesRec'    => $moviesRec,
            'mediaRec'     => $mediaRec,
            'radioRec'     => $radioRec,

            'itemsTotal'    => $itemsTotal,
            'newsTotal'     => $newsTotal,
            'reviewsTotal'  => $reviewsTotal,
        ];

        return $this->render('index', ['data' => $data]);
    }
}
