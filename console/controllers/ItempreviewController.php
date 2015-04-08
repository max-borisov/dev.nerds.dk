<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use frontend\models\Item;
use frontend\models\ExternalSite;
use frontend\components\HelperBase;
use yii\console\Exception;

class ItempreviewController extends Controller
{
    public function actionUp()
    {
        set_time_limit(0);
        $count = 0;
        $originalFolderPath = HelperBase::getParam('images')['pathToOriginal'];
        $rows = Item::find()->select('id, site_id, preview, s_preview, created_at')->where("preview = '' AND s_preview != ''")->asArray()->all();
        foreach ($rows as $item) {
            $imageUrl = '';
            if ($item['site_id'] == ExternalSite::HIFI4ALL) {
                $imageUrl = HelperBase::getParam('HiFi4AllPic') . '/' . $item['s_preview'];
            } elseif ($item['site_id'] == ExternalSite::DBA) {
                $imageUrl = $item['s_preview'];
            }
            if (!$imageUrl) continue;

            $previewUniqueName = $this->_getUniqueId($item['created_at']) . '.' . $this->_getFileExtension($imageUrl);
            $copyPath = Yii::getAlias($originalFolderPath . '/' . $previewUniqueName);
            try {
                if (!copy($imageUrl, $copyPath)) {
                    throw new Exception('Image could not be copied. Url from: ' . $imageUrl . '. Dst: ' . $copyPath);
                }
                $sql = 'UPDATE item
                        SET
                            preview     = :preview,
                            updated_at  = UNIX_TIMESTAMP()
                        WHERE
                            id = ' . $item['id'];
                $num = Yii::$app->db
                    ->createCommand($sql)
                    ->bindParam(':preview', $previewUniqueName)
                    ->execute();
                if ($num) {
                    $count++;
                } else {
                    touch($copyPath);
                }
                usleep(500);
            }
            catch(\yii\base\ErrorException $e) {

            }


//            echo $imageUrl, "\r\n";
        }

//        HelperBase::dump($rows);

//        echo HelperBase::getParam('HiFi4AllPic');
//        echo 1234;
        echo "Updated rows - ", $count, "\r\n";
        exit(Controller::EXIT_CODE_NORMAL);
    }

    private function _getUniqueId($prefix)
    {
        return uniqid($prefix);
    }

    private function _getFileExtension($imageName)
    {
        return pathinfo($imageName, PATHINFO_EXTENSION);
    }
}
