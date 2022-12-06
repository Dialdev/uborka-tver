<?php
/**
 * dranikss
 * Шаблон главной страницы
 * http://dranikss.ru/
 * @package WordPress
 * @subpackage dranikss
 */
get_header(); // Подключаем хедер?>

<!-- BREADCRUMBS : begin -->
<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="/" title="">Главная</a></li>
                <li class="current"><a href="#" title="">Статьи</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<!-- CONTENT : begin -->
<div id="content-page" class="articles">
    <div class="container_12">

        <!-- left column : begin -->
        <div class="grid_9 grid_mob_8 grid_xs_12">

            <!-- title -->
            <h1 class="title">Полезные статьи</h1>

            <?php //query_posts("cat=1&posts_per_page=10&paged=2"); ?>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>

            <?if(!in_category(138)):?>

            <!-- one article : begin -->
            <div class="one-article">
                <h2><a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title();?></a></h2>
                <p><?php the_date();?></p>
                <p><?php echo wp_trim_words( $post->post_content, 27, ' ...' ); ?></p>
            </div>
            <!-- one article : end -->

            <?endif;?>

        <?php endwhile; // Конец цикла ?>

        <?php if (function_exists("pagination")) {
            pagination();
        }

            //the_posts_pagination();
           // wp_reset_postdata();
        ?>


        </div>
        <!-- left column : end -->

        <!-- right column : begin -->
        <div class="grid_3 grid_mob_4 grid_xs_12">
            <?php get_sidebar('left') /* sidebar-left.php */ ?>
        </div>
        <!-- right column : end -->

    </div>
</div>
<!-- CONTENT : end -->

<?php get_footer(); // Подключаем футер ?>