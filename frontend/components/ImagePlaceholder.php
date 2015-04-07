<?php
namespace frontend\components;

use Yii;
use yii\base\Component;

class ImagePlaceholder extends Component
{
    private $_placeholder = 'http://placehold.it/';

    public function get($dimensions = '200x150')
    {
        return $this->_placeholder . $dimensions;
    }
}