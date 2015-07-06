<?php

use yii\db\Schema;
use yii\db\Migration;

class m150703_122315_create_item_user_adv_table extends Migration
{
    private $_table = 'item_user_adv';

    public function up()
    {
        $this->createTable($this->_table, [
            'id'        => 'pk',
            'item_id'   => Schema::TYPE_INTEGER . ' NOT NULL',
            'email'     => Schema::TYPE_STRING . ' NOT NULL',
            'message'   => Schema::TYPE_TEXT . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable($this->_table);
    }
}
