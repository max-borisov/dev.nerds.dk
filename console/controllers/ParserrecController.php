<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\components\parser\recordere\RecNews;
use console\components\parser\recordere\RecReviews;
use console\components\parser\recordere\RecGames;
use console\components\parser\recordere\RecTv;
use console\components\parser\recordere\RecMusic;
use console\components\parser\recordere\RecMovies;
use console\components\parser\recordere\RecMedia;
use console\components\parser\recordere\RecRadio;

class ParserrecController extends Controller
{
    public function actionNews()
    {
        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecNews.php';
        (new RecNews())->run();
        exit(Controller::EXIT_CODE_NORMAL);
    }

    public function actionReviews()
    {
        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecReviews.php';
        (new RecReviews())->run();
        exit(Controller::EXIT_CODE_NORMAL);
    }

    public function actionMedia()
    {
        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecGames.php';
        (new RecGames())->run();

        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecTv.php';
        (new RecTv())->run();

        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecMusic.php';
        (new RecMusic())->run();

        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecMovies.php';
        (new RecMovies())->run();

        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecMedia.php';
        (new RecMedia())->run();

        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecRadio.php';
        (new RecRadio())->run();

        exit(Controller::EXIT_CODE_NORMAL);
    }
}
