<?php

use yii\db\Schema;
use yii\db\Migration;

class m150320_130613_add_keywords_column_to_news extends Migration
{
    private $_table = 'news';

    public function up()
    {
        $this->addColumn($this->_table, 'keywords', Schema::TYPE_TEXT . ' NOT NULL DEFAULT "" AFTER post');
    }

    public function down()
    {
        $this->dropColumn($this->_table, 'keywords');
    }
}
