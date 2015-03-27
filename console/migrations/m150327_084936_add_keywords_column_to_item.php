<?php

use yii\db\Schema;
use yii\db\Migration;

class m150327_084936_add_keywords_column_to_item extends Migration
{
    private $_table = 'item';

    public function up()
    {
        $this->addColumn($this->_table, 'keywords', Schema::TYPE_TEXT . ' NOT NULL DEFAULT ""');
    }

    public function down()
    {
        $this->dropColumn($this->_table, 'keywords');
    }
}
