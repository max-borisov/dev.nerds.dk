<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

class RenamerController extends Controller
{
    public function actionImages()
    {
        set_time_limit(0);
        $path = Yii::getAlias('@frontend') . '/web/images/original';
        foreach (new \DirectoryIterator($path) as $fileInfo) {
            $pathName = $fileInfo->getPathname();
            if (($pos = strrpos($pathName, '?')) !== false) {
                $newPathName = substr($pathName, 0, $pos);
                if(!rename($pathName, $newPathName)) {
                    echo "\r\n ERROR! \r\n";
                    echo "\r\n $pathName \r\n $newPathName\r\n";
                    exit(Controller::EXIT_CODE_ERROR);
                }
            }
        }
        echo "\r\n DONE \r\n";
        exit(Controller::EXIT_CODE_NORMAL);
    }
}
