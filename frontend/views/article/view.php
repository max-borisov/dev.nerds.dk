<?php
$postDate = date('d/m-Y', strtotime($article['post_date']));
?>
<header>
    <h1><?= $article['title'] ?></h1>
    <?php
    $af = !empty($article['af']) ? $article['af'] : 'HiFi surround';
    echo '<p><em class="date">', $af, ' - ' , $postDate, '</em></p>';
    if (!empty($article['notice'])) {
        echo '<p><em>', $article['notice'], '</em></p>';
    }
    ?>
</header>
<?= $article['post'] ?>