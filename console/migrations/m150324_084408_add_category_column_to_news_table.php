<?php

use yii\db\Schema;
use yii\db\Migration;

class m150324_084408_add_category_column_to_news_table extends Migration
{
    private $_table = 'news';
    private $_index = 'index_category_id';

    public function safeUp()
    {
        $this->addColumn($this->_table, 'category_id', Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0 AFTER news_id');
        $this->createIndex($this->_index, $this->_table, 'category_id');
    }

    public function safeDown()
    {
        $this->dropIndex($this->_index, $this->_table);
        $this->dropColumn($this->_table, 'category_id');
    }
}
