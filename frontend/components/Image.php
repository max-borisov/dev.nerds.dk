<?php
namespace frontend\components;

use Yii;
use yii\base\Component;
use yii\base\Exception;

class Image extends Component
{
    public $originalFolder;
    public $thumbFolder;
    public $baseUrl;
    public $baseUrlOriginal;
    public $baseUrlThumb;
    public $quality;

    private $_imageUrl;
    private $_imagePath;

    public function init()
    {
        $imagesConf = HelperBase::getParam('images');
        $this->originalFolder = $imagesConf['pathToOriginal'];
        $this->thumbFolder = $imagesConf['pathToThumb'];
        $this->baseUrl = $imagesConf['baseUrl'];
        $this->baseUrlOriginal = $imagesConf['baseUrlOriginal'];
        $this->baseUrlThumb = $imagesConf['baseUrlThumb'];
    }

    /**
     * Get url/path for original preview
     * @param string $imageName Preview name
     * @return $this|null
     * @throws Exception
     */
    public function original($imageName = '')
    {
        $this->_checkImageNamePresence($imageName);
        $fullName = $this->_getFullPathToOriginalImage($imageName);
        $this->_ensureThatFileExists($fullName);
        $this->_imagePath = Yii::getAlias($this->originalFolder . $imageName);
        $this->_imageUrl = Yii::getAlias($this->baseUrlOriginal . $imageName);
        return $this;
    }

    /**
     * Resize/crop original image and get url/path to result file
     * @param string $srcImageName Original preview name
     * @param string $dimensions Dimensions for thumb
     * @param string $action Action over image: resize/crop
     * @return $this
     * @throws Exception
     */
    public function thumb($srcImageName = '', $dimensions = '', $action = 'resize')
    {
        $this->_checkImageNamePresence($srcImageName);
        $this->_validateAction($action);
        $dimensionsHash = $this->_getImageDimensions($dimensions);
        $thumbName = str_replace('x', '_', $dimensions) . '_' . $action[0] . '_' . $srcImageName;
        $fullOriginalName = $this->_getFullPathToOriginalImage($srcImageName);
        $fullThumbName = Yii::getAlias($this->thumbFolder . $thumbName);
        $fullThumbName = $this->_removeGetParamsFromName($fullThumbName);
        $this->_ensureThatFileExists($fullOriginalName);
        try {
            $this->_ensureThatFileExists($fullThumbName);
        } catch(Exception $e) {
            $image = Yii::$app->imageProcessor->load($fullOriginalName);
            switch($action) {
                case 'resize': $this->_resize($image, $dimensionsHash, Yii\image\drivers\Image::WIDTH); break;
                case 'crop': $this->_crop($image, $dimensionsHash); break;
            }
            if (!$image->save($fullThumbName, $this->quality)) {
                throw new Exception('Image thumb could not be saved. Thumb name ' . $fullThumbName);
            }
        }
        $this->_imagePath = $fullThumbName;
        $this->_imageUrl = Yii::getAlias($this->baseUrlThumb . $thumbName);
        return $this;
    }

    /**
     * Copy image
     * @param $fromUrl Url to copy from
     * @param $dstName Destination path
     * @return $this
     * @throws Exception
     */
    public function copy($fromUrl, $dstName)
    {
        $previewName = $this->_getUniqueId($dstName) . '.' . $this->_getFileExtension($fromUrl);
        $copyPath = Yii::getAlias($this->originalFolder . $previewName);
        if (!copy($fromUrl, $copyPath)) {
            throw new Exception('Image could not be copied. Url from: ' . $fromUrl . '. Dst: ' . $copyPath);
        }
        $this->_imagePath = $copyPath;
        return $this;
    }

    /**
     * Get url to preview
     * @return mixed
     */
    public function url()
    {
        return $this->_imageUrl;
    }

    /**
     * Get absolute path to preview
     * @return mixed
     */
    public function path()
    {
        return $this->_imagePath;
    }

    private function _getFullPathToOriginalImage($fileName)
    {
        return Yii::getAlias($this->originalFolder . $fileName);
    }

    private function _ensureThatFileExists($fullName)
    {
        if (!file_exists($fullName)) throw new Exception('File does not exists. File name ' . $fullName);
        return true;
    }

    private function _checkImageNamePresence($imageName = '')
    {
        if (!$imageName) throw new Exception('Image name is not specified.');
    }

    private function _getImageDimensions($dimensions = '')
    {
        if (!$dimensions) throw new Exception('Image dimensions are not set.');
        if (false === strpos($dimensions, 'x')) throw new Exception('Incorrect image dimensions.');
        $hash = [];
        list($hash['w'], $hash['h']) = explode('x', $dimensions);
        return $hash;
    }

    private function _validateAction($action)
    {
        $actions = ['crop', 'resize'];
        if (!in_array($action, $actions)) {
            throw new Exception('Incorrect action passed.');
        }
    }

    private function _getUniqueId($prefix)
    {
        return uniqid($prefix);
    }

    private function _getFileExtension($imageName)
    {
        return pathinfo($imageName, PATHINFO_EXTENSION);
    }

    private function _resize($image, $dimensionsHash, $master)
    {
        return $image->resize($dimensionsHash['w'], $dimensionsHash['h'], $master);
    }

    private function _crop($image, $dimensionsHash)
    {
        $offsetX = $offsetY = null;
        if ($image->width >= $dimensionsHash['w'] && $image->height >= $dimensionsHash['h']) {
            $offsetX = round(($image->width - $dimensionsHash['w']) / 2);
            $offsetY = round(($image->height - $dimensionsHash['h']) / 2);
        }
        return $image->crop($dimensionsHash['w'], $dimensionsHash['h'], $offsetX, $offsetY);
    }

    private function _removeGetParamsFromName($name)
    {
        if (($position = strpos($name, '?')) !== false) {
            return substr($name, 0, $position);
        }

        return $name;
    }
}