<?php
namespace frontend\models;

use yii\behaviors\TimestampBehavior;

/**
 * Custom ActiveRecord
 *
 * Class ActiveRecord
 * @package app\components
 */
class ActiveRecord extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public function encodeDataAndFillKeywords()
    {
        $this->_encodeData();
        $this->_fillKeywords();
    }

    private function _encodeData()
    {
        $this->title    = iconv('latin1', 'UTF-8//TRANSLIT', $this->title);
        $this->post     = iconv('latin1', 'UTF-8//TRANSLIT', $this->post);
        if (!empty($this->af)) {
            $this->af = iconv('latin1', 'UTF-8//TRANSLIT', $this->af);
        }
        if (!empty($this->notice)) {
            $this->notice = iconv('latin1', 'UTF-8//TRANSLIT', $this->notice);
        }
    }

    private function _fillKeywords()
    {
        $stack = [];
        array_push($stack, $this->title);
        $post = strip_tags($this->post);
        $post = str_replace('&nbsp;', '', $post);
        $post = preg_replace('/\s+/', ' ', $post);
        array_push($stack, strip_tags($post));
        if (!empty($this->af)) {
            array_push($stack, $this->af);
        }
        if (!empty($this->notice)) {
            array_push($stack, $this->notice);
        }
        $keywords = implode(' ', $stack);
        $this->keywords = trim($keywords);
    }
}