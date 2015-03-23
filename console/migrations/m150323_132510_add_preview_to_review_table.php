<?php

use yii\db\Schema;
use yii\db\Migration;

class m150323_132510_add_preview_to_review_table extends Migration
{
    private $_table = 'review';

    public function up()
    {
        $this->addColumn($this->_table, 'preview', Schema::TYPE_STRING . ' NOT NULL DEFAULT "" AFTER post');
    }

    public function down()
    {
        $this->dropColumn($this->_table, 'preview');
    }
}
