<?php

namespace frontend\controllers;

use Yii;
use yii\helpers;
use frontend\models\Item;
use frontend\models\News;
use frontend\models\Review;
use frontend\models\ParserGame;
use frontend\models\ParserTv;
use frontend\models\ParserMusic;
use frontend\models\ParserMovie;
use frontend\models\ParserMedia;
use frontend\models\ParserRadio;
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

        $gamesRec   = ParserGame::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $tvRec      = ParserTv::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $musicRec   = ParserMusic::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $moviesRec  = ParserMovie::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $mediaRec   = ParserMedia::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $radioRec   = ParserRadio::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();

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
