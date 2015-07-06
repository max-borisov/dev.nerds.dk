<?php

use yii\db\Schema;
use yii\db\Migration;

class m150703_132228_update_item_user_adv_table extends Migration
{
    private $_table = 'item_user_adv';

    public function safeUp()
    {
        $this->addColumn($this->_table, 'created_at', Schema::TYPE_INTEGER . ' NOT NULL');
        $this->addColumn($this->_table, 'updated_at', Schema::TYPE_INTEGER . ' NOT NULL');
    }
    
    public function safeDown()
    {
        $this->dropColumn($this->_table, 'created_at');
        $this->dropColumn($this->_table, 'updated_at');
    }
}
