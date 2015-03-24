<?php

use yii\db\Schema;
use yii\db\Migration;

class m150324_144214_delete_tables extends Migration
{
    public function safeUp()
    {
        $this->dropTable('parser_game');
        $this->dropTable('parser_media');
        $this->dropTable('parser_movie');
        $this->dropTable('parser_music');
        $this->dropTable('parser_radio');
        $this->dropTable('parser_tv');
    }
    
    public function safeDown()
    {
        echo "This migration can't be rolled back";
    }
}
