<?php

use yii\db\Schema;
use yii\db\Migration;

class m150406_132710_update_preview_table extends Migration
{
    private $_table = 'preview';

    public function up()
    {
        $this->addColumn($this->_table, 'parent_id', Schema::TYPE_INTEGER . ' NOT NULL AFTER type');
    }

    public function down()
    {
        $this->dropColumn($this->_table, 'parent_id');
    }
}
