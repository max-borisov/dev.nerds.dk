<?php

namespace frontend\widgets;

use yii\base\Widget;
use frontend\models\Item;

class ItemsWidget extends Widget
{
    private $_limit = 4;

    public function run()
    {
        $items = Item::find()
                    ->orderBy('id DESC')
                    ->limit($this->_limit)
                    ->all();
        return $this->render('items', ['items' => $items]);
    }
}
