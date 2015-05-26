<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use frontend\models\Item;
use frontend\models\ExternalSite;
use frontend\components\HelperBase;
use yii\console\Exception;

/**
 * Get preview link and download it.
 *
 * Class DbapreviewController
 * @package console\controllers
 */
class DbapreviewController extends Controller
{
    public function actionUp()
    {
        set_time_limit(0);
        $count = 0;
        $table = 'item';
        $originalFolderPath = HelperBase::getParam('images')['pathToOriginal'];
        $rows = Item::find()
            ->where("preview = '' AND s_preview != '' AND site_id = " . ExternalSite::DBA)
	        ->limit(1000)
            ->all();
        /* @var $item \frontend\models\Item */
        foreach ($rows as $item) {
            $previewSourceUrl = $item->s_preview;
            $previewUniqueName = $this->_getUniqueId($item->created_at) . '.' . $this->_getFileExtension($previewSourceUrl);
            $copyPath = Yii::getAlias($originalFolderPath . '/' . $previewUniqueName);
            try {
                if (!copy($previewSourceUrl, $copyPath)) {
                    throw new Exception('Image could not be copied. Url from: ' . $previewSourceUrl . '. Dst: ' . $copyPath);
                }
                $sql = 'UPDATE ' . $table .
                    ' SET
                        preview     = :preview,
                        updated_at  = UNIX_TIMESTAMP()
                    WHERE id = ' . $item->id;
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
        }
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
