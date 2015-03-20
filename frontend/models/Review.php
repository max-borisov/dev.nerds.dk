<?php

namespace frontend\models;

use Yii;
use frontend\models\ActiveRecord;
use frontend\models\ReviewType;
use frontend\components\HelperBase;

/**
 * This is the model class for table "review".
 *
 * @property integer $id
 * @property integer $site_id
 * @property integer $review_id
 * @property integer $review_type_id
 * @property string $title
 * @property string $af
 * @property string $notice
 * @property string $post
 * @property string $post_short
 * @property string $post_date
 * @property string $preview
 * @property integer $created_at
 * @property integer $updated_at
 */
class Review extends ActiveRecordParser
{
    public $post_short = '';
    public $preview = '';

    public function init()
    {
        parent::init();
        $this->preview = HelperBase::getParam('articlePreviewPlaceholder');
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review';
    }

    public function queryAll($keywords = '')
    {
        $query = self::find()->select('id, title, notice, post, post_date');
        if ($keywords) {
            $query->where(['like', 'keywords', $keywords]);
        }
        return $query->orderBy('post_date DESC');
    }

    public function afterFind()
    {
        parent::afterFind();
        if (!empty($this->notice)) {
            $post_short = $this->notice;
        } else {
            $post_short = strip_tags($this->post);
            $post_short = str_replace('&nbsp;', '', $post_short);
            $post_short = HelperBase::makeShortText($post_short, HelperBase::getParam('shortArticleLength'));
        }
        $this->post_short = trim($post_short);
    }

    /**
     * @inheritdoc
     */
    /*public function rules()
    {
        return [
            [['site_id', 'review_id', 'title', 'af', 'notice', 'post', 'post_date'], 'required'],
            [['site_id', 'review_id'], 'integer'],
            [['notice', 'post'], 'text'],
            [['post_date'], 'safe'],
            [['title', 'af'], 'string', 'max' => 255]
        ];
    }*/

    public function getType()
    {
        return $this->hasOne(ReviewType::className(), ['id' => 'review_type_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_id' => 'Site ID',
            'review_id' => 'Review ID',
            'title' => 'Title',
            'af' => 'Af',
            'notice' => 'Notice',
            'post' => 'Post',
            'post_date' => 'Post Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
