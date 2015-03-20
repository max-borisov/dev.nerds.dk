<?php
namespace frontend\models;

use frontend\models\ActiveRecord;

/**
 * Custom ActiveRecord for parser models
 *
 * Class ActiveRecordParser
 * @package frontend\models
 */
class ActiveRecordParser extends ActiveRecord
{
    public function beforeSave($insert)
    {
        $this->title    = iconv('latin1', 'utf8', $this->title);
        $this->post     = iconv('latin1', 'utf8', $this->post);
        if (!empty($this->af)) {
            $this->af = iconv('latin1', 'utf8', $this->af);
        }
        if (!empty($this->notice)) {
            $this->notice = iconv('latin1', 'utf8', $this->notice);
        }
        return parent::beforeSave($insert);
    }

    public function queryAll($filter = '')
    {
        $query = self::find()->select('id, title, notice, post, post_date');
        if ($filter) {
            $query->where(['like', 'keywords', $filter]);
        }
        return $query->orderBy('post_date DESC');
    }
}