<?php

use yii\db\Schema;
use yii\db\Migration;

class m150325_053238_update_news_category extends Migration
{
    private $_table = 'news';

    public function safeUp()
    {
        $sql = 'UPDATE news
                    SET
                        category_id     = 7
                    WHERE category_id   = 0';
        $this->db
            ->createCommand($sql)
            ->execute();
    }
    
    public function safeDown()
    {
        $sql = 'UPDATE news
                    SET
                        category_id     = 0
                    WHERE category_id   = 7';
        $this->db
            ->createCommand($sql)
            ->execute();
    }
}
