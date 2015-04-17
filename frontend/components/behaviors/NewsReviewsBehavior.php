<?php
namespace frontend\components\behaviors;

use Yii;
use yii\db\ActiveRecord;
use yii\base\Behavior;

class NewsReviewsBehavior extends Behavior
{
    public function events()
    {
        return [
            ActiveRecord::EVENT_BEFORE_INSERT => 'encodeDataAndFillKeywords',
        ];
    }

    public function encodeDataAndFillKeywords($event)
    {
        $this->_encodeData();
        $this->_fillKeywords();
    }

    private function _encodeData()
    {
        $this->owner->title = iconv('latin1', 'UTF-8//TRANSLIT', $this->owner->title);
        $this->owner->post  = iconv('latin1', 'UTF-8//TRANSLIT', $this->owner->post);
        if (!empty($this->owner->af)) {
            $this->owner->af = iconv('latin1', 'UTF-8//TRANSLIT', $this->owner->af);
        }
        if (!empty($this->owner->notice)) {
            $this->owner->notice = iconv('latin1', 'UTF-8//TRANSLIT', $this->owner->notice);
        }
    }

    private function _fillKeywords()
    {
        $stack = [];
        array_push($stack, $this->owner->title);
        $post = strip_tags($this->owner->post);
        $post = str_replace('&nbsp;', '', $post);
        $post = preg_replace('/\s+/', ' ', $post);
        array_push($stack, strip_tags($post));
        if (!empty($this->owner->af)) {
            array_push($stack, $this->owner->af);
        }
        if (!empty($this->owner->notice)) {
            array_push($stack, $this->owner->notice);
        }
        $keywords               = implode(' ', $stack);
        $this->owner->keywords  = trim($keywords);
    }
}