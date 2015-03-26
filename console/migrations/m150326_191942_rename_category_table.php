<?php

use yii\db\Schema;
use yii\db\Migration;

class m150326_191942_rename_category_table extends Migration
{
    public function up()
    {
        $this->renameTable('category', 'item_category');
    }

    public function down()
    {
        $this->renameTable('item_category', 'category');
    }
}
