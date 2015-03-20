<?php
use frontend\components\HelperBase;
?>
<header>
    <h1><?= $post['title'] ?></h1>
    <?php
    $af = !empty($post['af']) ? $post['af'] : 'HiFi surround';
    $postDate = HelperBase::formatPostDate($post['post_date']);
    echo '<p><em class="date">', $af, ' - ' , $postDate, '</em></p>';
    if (!empty($post['notice'])) {
        echo '<p><em>', $post['notice'], '</em></p>';
    }
    ?>
</header>
<?= $post['post'] ?>