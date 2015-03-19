<?php

use yii\db\Schema;
use yii\db\Migration;

class m150319_114027_rename_table_user extends Migration
{
    public function up()
    {
        $this->renameTable('user', 'user_base');
    }

    public function down()
    {
        $this->renameTable('user_base', 'user');
    }
}
