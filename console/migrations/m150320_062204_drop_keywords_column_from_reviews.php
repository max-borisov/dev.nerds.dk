<?php

use yii\db\Schema;
use yii\db\Migration;

class m150320_062204_drop_keywords_column_from_reviews extends Migration
{
    private $_table = 'review';

    public function up()
    {
        $this->dropColumn($this->_table, 'keywords');
    }

    public function down()
    {
        $this->addColumn($this->_table, 'keywords', Schema::TYPE_TEXT . ' NOT NULL DEFAULT "" AFTER post');
    }
}
