<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news_category".
 *
 * @property integer $id
 * @property string $title
 * @property integer $created_at
 * @property integer $updated_at
 */
class NewsCategory extends \yii\db\ActiveRecord
{
    const GAMES     = 1;
    const MEDIA     = 2;
    const MOVIES    = 3;
    const MUSIC     = 4;
    const RADIO     = 5;
    const TV        = 6;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
