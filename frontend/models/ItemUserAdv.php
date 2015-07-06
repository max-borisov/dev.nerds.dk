<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property integer $item_id
 * @property string $email
 * @property string $message
 * @property integer $created_at
 * @property integer $updated_at
 */
class ItemUserAdv extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_user_adv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'message'], 'required'],
            ['email', 'email'],
            [['email', 'message'], 'trim'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Title:',
            'email' => 'Din e-mail:',
            'message' => 'Din besked:',
        ];
    }
}
