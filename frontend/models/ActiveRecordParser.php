<?php
namespace frontend\models;

/**
 * Custom ActiveRecord for parser models
 *
 * Class ActiveRecordParser
 */
class ActiveRecordParser extends ActiveRecord
{
    public function beforeSave($insert)
    {
        $this->title    = iconv('latin1', 'UTF-8//TRANSLIT', $this->title);
        $this->post     = iconv('latin1', 'UTF-8//TRANSLIT', $this->post);
        if (!empty($this->af)) {
            $this->af = iconv('latin1', 'UTF-8//TRANSLIT', $this->af);
        }
        if (!empty($this->notice)) {
            $this->notice = iconv('latin1', 'UTF-8//TRANSLIT', $this->notice);
        }
        return parent::beforeSave($insert);
    }

    public function queryAll($filter = '', $additionalColumns = '')
    {
        $columns = 'id, title, notice, post, post_date';
        if (!empty($additionalColumns)) {
            $columns .= ', ' . $additionalColumns;
        }
        $query = self::find()->select($columns);
        if ($filter) {
            $query->where(['like', 'keywords', $filter]);
        }
        return $query->orderBy('post_date DESC');
    }
}