<?php

use frontend\models\News;
use yii\db\Migration;

class m150320_130741_set_keywords_to_news extends Migration
{
    public function safeUp()
    {
        set_time_limit(0);
        $news = News::find()->asArray()->all();
        echo 'News count ', count($news), "\r\n";
        foreach ($news as $item) {
            $stack = [];
            array_push($stack, $item['title']);
            $post = strip_tags($item['post']);
            $post = str_replace('&nbsp;', '', $post);
            $post = preg_replace('/\s+/', ' ', $post);
            array_push($stack, strip_tags($post));
            if (!empty($item['af'])) {
                array_push($stack, $item['af']);
            }
            if (!empty($item['notice'])) {
                array_push($stack, $item['notice']);
            }
            $keywords = implode(' ', $stack);
            $sql = 'UPDATE news
                    SET
                        keywords    = :keywords,
                        updated_at  = UNIX_TIMESTAMP()
                    WHERE id = :id';
            $num = $this->db
                ->createCommand($sql)
                ->bindParam(':keywords', $keywords)
                ->bindParam(':id', $item['id'])
                ->execute();
            if (!$num) {
                throw new Exception('Keywords for news ' . $item['id'] . ' could not be saved');
            }
        }
    }

    public function safeDown()
    {
        $sql = 'UPDATE news
                SET
                    keywords    = "",
                    updated_at  = UNIX_TIMESTAMP()';
        $rows = $this->db
            ->createCommand($sql)
            ->execute();
        echo $rows, " have been updated\r\n";
    }
}
