<?php

namespace frontend\controllers;

use frontend\components\HelperBase;

use Yii;
use yii\helpers;
use frontend\models\Item;
use frontend\models\News;
use frontend\models\Review;
use frontend\models\Game;
use frontend\models\Tv;
use frontend\models\Music;
use frontend\models\Movie;
use frontend\models\Media;
use frontend\models\Radio;
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

        $gamesRec   = Game::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $tvRec      = Tv::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $musicRec   = Music::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $moviesRec  = Movie::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $mediaRec   = Media::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();
        $radioRec   = Radio::find()->where('site_id = ' . ExternalSite::RECORDERE)->count();

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
