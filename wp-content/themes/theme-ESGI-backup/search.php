<?php

get_header();

$term = $_GET["s"];
$posts = get_posts([
    "post_type" => "post",
    "s" => $term
]);
$pages = get_posts([
    "post_type" => "page",
    "s" => $term
]);
$nbPosts = count($posts);
$nbPages = count($pages);
?>
<h1>Résultats de la recherche pour <?= $term ?></h1>
<?php if ($nbPosts > 0) : ?>
    <h2>Articles : <?= $nbPosts ?> article(s) trouvé(s)</h2>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li>
                <a href="<?= get_permalink($post->ID) ?>"><?= $post->post_title ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php if ($nbPages > 0) : ?>
    <h2>Pages : <?= $nbPages ?> page(s) trouvée(s)</h2>
    <ul>
        <?php foreach ($pages as $page) : ?>
            <li>
                <a href="<?= get_permalink($page->ID) ?>"><?= $page->post_title ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php
get_footer();
?>
