<?php
namespace frontend\components;

use Yii;
use yii\base\Behavior;
use yii\base\Exception;

class ImagePreviewBehavior extends Behavior
{
    /**
     * Generate or get existing thumb for given preview
     * @param $name Original preview name
     * @param string $dimensions Thumb image dimensions
     * @param string $action Resize or crop
     * @return mixed
     */
    public function getPreview($name, $dimensions = '200x150', $action = 'resize')
    {
        try {
            if (empty($name)) throw new Exception('Preview name is empty.');
            return Yii::$app->image->thumb($name, $dimensions, $action)->url();
        } catch(Exception $e) {
            Yii::error([
                'message' => $e->getMessage(),
                'file'    => $e->getFile(),
            ]);
            return Yii::$app->imagePlaceholder->get($dimensions);
        }
    }
}