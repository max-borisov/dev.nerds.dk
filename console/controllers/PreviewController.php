<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use frontend\models\News;
use frontend\components\HelperBase;
use yii\console\Exception;

class PreviewController extends Controller
{
    public function actionNewsup()
    {
        set_time_limit(0);
        $count = 0;
        $originalFolderPath = HelperBase::getParam('images')['basePathForOriginal'];
        $news = News::find()->where("preview = ''")->all();
        /* @var $item \frontend\models\News */
        foreach ($news as $item) {
            $post = strip_tags($item->post, '<img>');
            $pattern = '/src="([^"]+)"/i';
            preg_match($pattern, $post, $matches);
            if (empty($matches[1])) continue;
            $previewSourceUrl = $matches[1];
            $previewUniqueName = $this->_getUniqueId($item->created_at) . '.' . $this->_getFileExtension($previewSourceUrl);
            $copyPath = Yii::getAlias($originalFolderPath . '/' . $previewUniqueName);
            try {
                if (!copy($previewSourceUrl, $copyPath)) {
                    throw new Exception('Image could not be copied. Url from: ' . $previewSourceUrl . '. Dst: ' . $copyPath);
                }
                $sql = 'UPDATE news
                    SET
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

    public function actionNewsdown()
    {
        $sql = 'UPDATE news
                SET
                    preview     = "",
                    updated_at  = UNIX_TIMESTAMP()
                WHERE
                    preview     != ""';
        $rows = Yii::$app->db
            ->createCommand($sql)
            ->execute();
        echo $rows, " have been updated\r\n";
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
