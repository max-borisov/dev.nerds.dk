<?php

use yii\db\Schema;
use yii\db\Migration;

class m150324_083250_create_news_category_table_and_fill_it extends Migration
{
    private $_table = 'news_category';

    public function safeUp()
    {
        $this->createTable($this->_table, [
            'id'            => 'pk',
            'title'         => Schema::TYPE_STRING . ' NOT NULL',
            'created_at'    => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at'    => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->insert($this->_table, ['title' => 'Games',   'id' => 1]);
        $this->insert($this->_table, ['title' => 'Media',   'id' => 2]);
        $this->insert($this->_table, ['title' => 'Movies',  'id' => 3]);
        $this->insert($this->_table, ['title' => 'Music',   'id' => 4]);
        $this->insert($this->_table, ['title' => 'Radio',   'id' => 5]);
        $this->insert($this->_table, ['title' => 'TV',      'id' => 6]);
    }
    
    public function safeDown()
    {
        $this->delete($this->_table, 'id = 1');
        $this->delete($this->_table, 'id = 2');
        $this->delete($this->_table, 'id = 3');
        $this->delete($this->_table, 'id = 4');
        $this->delete($this->_table, 'id = 5');
        $this->delete($this->_table, 'id = 6');

        $this->dropTable($this->_table);
    }
}
