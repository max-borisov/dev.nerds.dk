<?php

use yii\db\Schema;
use yii\db\Migration;

class m150323_172025_rename_table_parsers extends Migration
{
    public function safeUp()
    {
        $this->renameTable('game', 'parser_game');
        $this->renameTable('media', 'parser_media');
        $this->renameTable('movie', 'parser_movie');
        $this->renameTable('music', 'parser_music');
        $this->renameTable('radio', 'parser_radio');
        $this->renameTable('tv', 'parser_tv');
    }

    public function safeDown()
    {
        $this->renameTable('parser_game', 'game');
        $this->renameTable('parser_media', 'media');
        $this->renameTable('parser_movie', 'movie');
        $this->renameTable('parser_music', 'music');
        $this->renameTable('parser_radio', 'radio');
        $this->renameTable('parser_tv', 'tv');
    }
}
