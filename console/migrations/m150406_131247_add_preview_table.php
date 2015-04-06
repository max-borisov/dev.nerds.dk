<?php

use yii\db\Schema;
use yii\db\Migration;

class m150406_131247_add_preview_table extends Migration
{
    private $_table = 'preview';

    public function up()
    {
        $this->createTable($this->_table, [
            'id'         => Schema::TYPE_PK,
            'type'       => Schema::TYPE_INTEGER . ' NOT NULL',
            'name'       => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable($this->_table);
    }
}
