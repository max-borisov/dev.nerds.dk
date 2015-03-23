<?php

use yii\db\Schema;
use yii\db\Migration;
use frontend\models\Review;

class m150323_133009_fill_preview_column_for_review extends Migration
{
    private $_table = 'review';

    public function safeUp()
    {
        $count = 0;
        $articles = Review::find()->where("preview = ''")->all();
        foreach ($articles as $item) {
            $post = strip_tags($item->post, '<img>');
            $pattern = '/src="([^"]+)"/i';
            preg_match($pattern, $post, $matches);
            if (empty($matches[1])) continue;
            $preview = $matches[1];
            $sql = 'UPDATE review
                SET
                    preview     = :preview,
                    updated_at  = UNIX_TIMESTAMP()
                WHERE id = ' . $item->id;
            $num = $this->db
                ->createCommand($sql)
                ->bindParam(':preview', $preview)
                ->execute();
            if ($num) {
                $count++;
            }
        }
        echo "Updated rows - ", $count, "\r\n";
    }

    public function safeDown()
    {
        $sql = 'UPDATE review
                SET
                    preview     = "",
                    updated_at  = UNIX_TIMESTAMP()';
        $rows = $this->db
            ->createCommand($sql)
            ->execute();
        echo $rows, " have been updated\r\n";
    }
}
