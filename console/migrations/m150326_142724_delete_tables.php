<?php

use yii\db\Schema;
use yii\db\Migration;

class m150326_142724_delete_tables extends Migration
{
    public function safeUp()
    {
//        $this->dropTable('item_catalog');
//        $this->dropTable('item_dba');
    }
    
    public function safeDown()
    {
        echo 'This action is irreversible.';
    }
}
