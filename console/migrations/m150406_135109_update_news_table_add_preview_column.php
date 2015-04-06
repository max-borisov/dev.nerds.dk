<?php

use yii\db\Schema;
use yii\db\Migration;

class m150406_135109_update_news_table_add_preview_column extends Migration
{
    private $_table = 'news';

    public function up()
    {
        $this->addColumn($this->_table, 'preview', Schema::TYPE_STRING . ' NOT NULL AFTER post');
    }

    public function down()
    {
        $this->dropColumn($this->_table, 'preview');
    }
}
