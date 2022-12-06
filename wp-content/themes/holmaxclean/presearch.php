<?php

/*
 * Template Name: Presearch
 */

if (!empty($_REQUEST['query'])) {
    $request = htmlspecialchars($_REQUEST['query']);

    $args = array(
        's' => $request, // поисковой запрос
        'posts_per_page' => 10,
        'post_type' => 'product'
    );
    $posts = query_posts($args);

    if ($posts)
    {
        echo "<h3>Поиск по каталогу</h3>";
        foreach ($posts as $search_post) {
            echo "<div class='one-article'><a target='_blank' href='" . get_permalink($search_post->ID) . "'>" . $search_post->post_title . "</a><p></p></div>";
        }

    }
    $types = get_post_types();
    unset($types['product'],$types['slider']);

    $args = array(
        's' => get_search_query(), // поисковой запрос
        'posts_per_page' => 10,
        'post_type' => $types
    );
    $posts = query_posts($args);

    if ($posts)
    {
        echo "<h3>Поиск по другим разделам сайта</h3>";
        
        foreach ($posts as $search_post) {
            echo "<div class='one-article'><a target='_blank' href='" . get_permalink($search_post->ID) . "'>" . $search_post->post_title . "</a><p></p></div>";
        }
    }
}