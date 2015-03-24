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
        $this->_checkEnv();
        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecNews.php';
        (new RecNews())->run();
    }

    public function actionReviews()
    {
        $this->_checkEnv();
        require_once Yii::getAlias('@console') . '/components/Parser/Recordere/RecReviews.php';
        (new RecReviews())->run();
    }

    public function actionMedia()
    {
        $this->_checkEnv();
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
    }

    private function _checkEnv()
    {
        return true;

        if (YII_ENV_DEV) {
            echo "Command does not work under DEV environment.\r\n";
            exit(0);
        }
    }
}
