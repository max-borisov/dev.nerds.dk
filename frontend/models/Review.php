<?php

namespace frontend\models;

use Yii;
use frontend\models\ReviewType;
use frontend\components\HelperBase;
use frontend\components\NewsReviewsBehavior;
use frontend\components\ImagePreviewBehavior;

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
class Review extends ActiveRecord
{
    public $post_short = '';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'review';
    }

    public function behaviors()
    {
        return [
            NewsReviewsBehavior::className(),
            ImagePreviewBehavior::className(),
        ];
    }

    public function beforeSave($insert)
    {
        $this->_extractPreviewFromPost();
        return parent::beforeSave($insert);
    }

    private function _extractPreviewFromPost()
    {
        $post = strip_tags($this->post, '<img>');
        $pattern = '/src="([^"]+)"/i';
        preg_match($pattern, $post, $matches);
        if (empty($matches[1])) return false;
        $this->preview = $matches[1];
    }

    public function queryAll($filter = '')
    {
        $columns = 'id, title, notice, post, post_date, preview';
        $query = self::find()->select($columns);
        if ($filter) {
            $query->where(['like', 'keywords', $filter]);
        }
        return $query->orderBy('post_date DESC');
    }

    public function afterFind()
    {
        parent::afterFind();
        $this->post_short = trim($this->_getShortPost());
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
            'preview' => 'Preview',
            'post_date' => 'Post Date',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    private function _getShortPost()
    {
        if (!empty($this->notice)) {
            $post_short = $this->notice;
        } else {
            $post_short = strip_tags($this->post);
            $post_short = str_replace('&nbsp;', '', $post_short);
            $post_short = HelperBase::makeShortText($post_short, HelperBase::getParam('shortArticleLength'));
        }
        return trim($post_short);
    }
}
