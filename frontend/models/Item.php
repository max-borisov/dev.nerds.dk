<?php

namespace frontend\models;

use Yii;
use frontend\models\ItemCategory;
//use frontend\models\ItemPhoto;
use frontend\components\HelperBase;
//use frontend\components\HelperMarketPlace;
use frontend\components\HelperUser;
use yii\base\Exception;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property integer $warranty
 * @property integer $invoice
 * @property integer $packaging
 * @property integer $manual
 * @property string $price
 * @property integer $category_id
 * @property string $title
 * @property integer $user_id
 * @property integer $ad_type_id
 * @property string $description
 * @property string $preview
 * @property string $price_min
 * @property string $price_max
 * @property integer $site_id
 * @property string $s_item_id
 * @property string $s_user
 * @property string $s_location
 * @property string $s_phone
 * @property string $s_email
 * @property string $s_type
 * @property string $s_adv
 * @property string $s_date
 * @property string $s_preview
 * @property string $s_age
 * @property string $s_warranty
 * @property string $s_package
 * @property string $s_delivery
 * @property string $s_akn
 * @property string $s_manual
 * @property string $s_expires
 * @property string $s_brand
 * @property string $s_model
 * @property string $s_producer
 * @property string $s_watt
 * @property string $s_product
 * @property string $media_title
 * @property string $media_genre
 * @property string $media_type
 * @property string $media_producer
 * @property string $music_artist
 * @property string $media_features
 * @property string $media_inches
 * @property string $media_size
 * @property string $eq_capacity
 * @property string $hd_capacity
 * @property string $camera_resolution
 * @property string $optical_zoom
 * @property string $speaker
 * @property string $speaker_type
 * @property string $channels
 */
class Item extends ActiveRecord
{
    const YES_FLAG  = 1;
    const NO_FLAG   = 0;
    const NA_FLAG   = 2;

    public $price_min;
    public $price_max;
    public $preview;
    public $search_text;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['warranty', 'invoice', 'packaging', 'manual', 'price', 'category_id', 'title', 'ad_type_id', 'description'], 'required', 'on' => ['create', 'edit']],
            [['title', 'category_id', 'ad_type_id', 'description'], 'required', 'on' => ['create', 'edit']],
            [['warranty', 'invoice', 'packaging', 'manual', 'category_id', 'ad_type_id'], 'integer', 'on' => ['create', 'edit']],
            [['price'], 'number', 'on' => ['create', 'edit']],
            [['price'], 'default', 'value' => 0, 'on' => ['create', 'edit']],
            [['title'], 'string', 'max' => 255, 'on' => ['create', 'edit']],
            [['description'], 'string', 'on' => ['create', 'edit']],

            [['title', 'description'], 'filter', 'filter' => function ($value) {
                    return trim(strip_tags($value));
            }, 'on' => ['create', 'edit']],

            [['warranty', 'packaging', 'manual', 'ad_type_id'], 'integer', 'on' => ['search']],
            [['search_text'], 'string', 'max' => 255, 'on' => ['search']],
            [['price_min, price_max'], 'number', 'on' => ['search']],
        ];
    }

    /**
     * Build relation with Category model
     * @return ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ItemCategory::className(), ['id' => 'category_id']);
    }

    /**
     * Build relation with ItemPhoto model
     * @return ActiveQuery
     */
    /*public function getPhotos()
    {
        return $this->hasMany(ItemPhoto::className(), ['item_id' => 'id'])->orderBy('updated_at DESC');
    }*/

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getType()
    {
        return $this->hasOne(AdType::className(), ['id' => 'ad_type_id']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return require(__DIR__ . '/ItemLabel.php');
    }

    /**
     * Apply search filter for items
     * @param array $params Get parameters (form data)
     * @return array|bool|\yii\db\ActiveRecord[]
     */
    public function search($params)
    {

    }

    public function beforeSave($insert)
    {
        if (!isset($this->user_id)) {
            throw new Exception('User id cannot be blank.');
        }
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        // Set preview for each item
        // Default(blank) preview
        $this->preview = HelperBase::getParam('articleItemPlaceholder');

        if ($this->s_preview && $this->site_id == ExternalSite::HIFI4ALL) {
            $this->preview = HelperBase::getParam('HiFi4AllPic') . '/' . $this->s_preview;
        }
        if ($this->s_preview && $this->site_id == ExternalSite::DBA) {
            $this->preview = $this->s_preview;
        }

        /*if (($photos = $this->photos) && is_array($photos)) {
            $photoName = $photos[0]->name;
            $photoPath =
                Yii::getAlias('@photo_thumb_path')
                . '/'
                . $photoName;
            if (file_exists($photoPath)) {
                $this->preview =
                    Yii::getAlias('@photo_thumb_url')
                    . '/'
                    . $photoName;
            }
        }*/
        parent::afterFind();
    }

    /*public function beforeDelete()
    {
        // Get related photo models and delete them
        foreach ($this->photos as $photoModel) {
            if (!$photoModel->delete()) {
                throw new Exception('Photo model with id ' . $photoModel->id . ' could not be deleted.');
            }
        }

        return parent::beforeDelete();
    }*/
}
