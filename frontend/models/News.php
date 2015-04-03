<?php

namespace frontend\models;

use Yii;
use frontend\components\NewsReviewsBehavior;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property integer $site_id
 * @property integer $news_id
 * @property integer category_id
 * @property string $title
 * @property string $af
 * @property string $notice
 * @property string $post
 * @property string $post_date
 * @property integer $created_at
 * @property integer $updated_at
 */
class News extends ActiveRecord
{
    public $preview;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    public function behaviors()
    {
        return [
            NewsReviewsBehavior::className(),
        ];
    }

    public function queryAll($filter = '', $category = 0)
    {
        $category = (int)$category;
        $columns = 'id, title, notice, post, post_date';
        $query = self::find()->select($columns);
        if ($category) {
            $query->filterWhere(['category_id' => $category]);
            $query->andFilterWhere(['like', 'keywords', $filter]);
        } else {
            $query->filterWhere(['like', 'keywords', $filter]);
        }
        return $query->orderBy('post_date DESC');
    }

    public function afterFind()
    {
        parent::afterFind();

        $this->preview = '';
        $post = strip_tags($this->post, '<img>');
        $pattern = '|src="([^"]+)"|';
        preg_match($pattern, $post, $matches);
        if ($matches[1]) {
            $this->preview = $matches[1];
        }
    }

    /**
     * @inheritdoc
     */
    /*public function rules()
    {
        return [
//            [['title', 'af', 'notice', 'post'], 'required'],
            [['title', 'af', 'post', 'site_id', 'news_id'], 'required'],
            [['title', 'af', 'notice', 'post_date'], 'string', 'max' => 255],
            [['post'], 'string'],
        ];
    }*/

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'af' => 'Af',
            'notice' => 'Notice',
            'post' => 'Post',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
