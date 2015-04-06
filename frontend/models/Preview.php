<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "preview".
 *
 * @property integer $id
 * @property integer $type
 * @property integer $name
 * @property integer $created_at
 * @property integer $updated_at
 */
class Preview extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'preview';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'name', 'created_at', 'updated_at'], 'required'],
            [['type', 'name', 'created_at', 'updated_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
