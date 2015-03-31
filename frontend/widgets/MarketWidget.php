<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\Item;

class MarketWidget extends Widget
{
    public $limit = 12;

    public function init()
    {
        parent::init();

    }

    public function run()
    {
        $items = Item::find()
                    ->select('id, title')
                    ->limit($this->limit)
                    ->orderBy('id DESC')
                    ->asArray()
                    ->all();
        return $this->render('market', ['items' => $items]);
    }
}
