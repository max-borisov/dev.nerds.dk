<?php

use yii\db\Schema;
use yii\db\Migration;

class m150408_053951_destroy_preview_table extends Migration
{
    public function up()
    {
        $this->dropTable('preview');
    }

    public function down()
    {
        echo "m150408_053951_destroy_preview_table cannot be reverted.\n";
        return false;
    }
}
