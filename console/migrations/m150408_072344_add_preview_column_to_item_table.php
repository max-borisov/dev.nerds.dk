<?php

use yii\db\Schema;
use yii\db\Migration;

class m150408_072344_add_preview_column_to_item_table extends Migration
{
    private $_table = 'item';

    public function up()
    {
        $this->addColumn($this->_table, 'preview', Schema::TYPE_STRING . ' NOT NULL AFTER ad_type_id');
    }

    public function down()
    {
        $this->dropColumn($this->_table, 'preview');
    }
}
