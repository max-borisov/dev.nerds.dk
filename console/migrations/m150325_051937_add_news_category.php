<?php

use yii\db\Schema;
use yii\db\Migration;

class m150325_051937_add_news_category extends Migration
{
    private $_table = 'news_category';

    public function up()
    {
        $this->insert($this->_table, ['title' => 'Uncategorized', 'id' => 7]);
    }

    public function down()
    {
        $this->delete($this->_table, 'id = 7');
    }
}
