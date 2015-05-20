<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

class StatController extends Controller
{
    public function actionGet()
    {
        $query = "
        SELECT 'reviews' as t, COUNT(*) as c FROM review
        UNION ALL
        SELECT 'news' as t, COUNT(*) as c FROM news
        UNION ALL
        SELECT 'items' as t, COUNT(*) as c FROM item";
        $data = Yii::$app->db
                ->createCommand($query)
                ->queryAll();
        foreach ($data as $row) {
            echo "\t", strtoupper($row['t']), ' : ', $row['c'], "\r\n";
        }
        exit(Controller::EXIT_CODE_NORMAL);
    }
}
