<?php
namespace frontend\components;

use Yii;
use yii\base\Component;
use yii\base\Exception;
use yii\base\InvalidParamException;
use frontend\components\HelperBase;

class Image extends Component
{
    public $originalFolder;
    public $thumbFolder;
    public $basePath;
    public $baseUrl;
    public $quality;

    public function init()
    {
        $imagesConf = HelperBase::getParam('images');
        $this->originalFolder = $imagesConf['originalFolder'];
        $this->thumbFolder = $imagesConf['thumbFolder'];
        $this->baseUrl = $imagesConf['baseUrl'];
        $this->basePath = $imagesConf['basePath'];
    }

    public function original($imageName = '')
    {
        $this->_checkImageNamePresence($imageName);
        $fullName = $this->_getFullPathToOriginalImage($imageName);
        if (!$this->_checkFileExistence($fullName)) return null;
        return Yii::getAlias($this->baseUrl . $this->originalFolder . $imageName);
    }

    public function thumb($imageName = '', $dimensions = '')
    {
        $this->_checkImageNamePresence($imageName);
        $dimensionsHash = $this->_getImageDimensions($dimensions);
        $imageNameWithSuffix = str_replace('x', '_', $dimensions) . '_' . $imageName;
        $fullThumbName = Yii::getAlias($this->basePath . $this->thumbFolder . $imageNameWithSuffix);
        $fullOriginalName = $this->_getFullPathToOriginalImage($imageName);
        if (!$this->_checkFileExistence($fullThumbName)) {
            $image = Yii::$app->imageProcessor->load($fullOriginalName);
            $image->resize($dimensionsHash['w'], $dimensionsHash['h'], $master = Yii\image\drivers\Image::WIDTH);
            if (!$image->save($fullThumbName, $this->quality)) {
                throw new Exception('Image thumb could not be saved.');
            }
        }
        return Yii::getAlias($this->baseUrl . $this->thumbFolder . $imageNameWithSuffix);
    }

    private function _getFullPathToOriginalImage($fileName)
    {
        return Yii::getAlias($this->basePath . $this->originalFolder . $fileName);
    }

    private function _checkFileExistence($fullName)
    {
        if (!file_exists($fullName)) {
            return false;
        }
        return true;
    }

    private function _checkImageNamePresence($imageName = '')
    {
        if (!$imageName) throw new InvalidParamException('Image name is not specified.');
    }

    private function _getImageDimensions($dimensions = '')
    {
        if (!$dimensions) throw new InvalidParamException('Image dimensions are not set.');
        if (false === strpos($dimensions, 'x')) throw new InvalidParamException('Incorrect image dimensions.');
        $hash = [];
        list($hash['w'], $hash['h']) = explode('x', $dimensions);
        return $hash;
    }
}