<?php
/**
 * Template Name: Вакансии
 *
 * Description: шаблон Вакансии
 *
 * Tip: для Вакансии
 *
 * @package WordPress
 * @subpackage dranikss
 * @since dranikss
 */

get_header(); ?>

<!-- BREADCRUMBS : begin -->
<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="/" title="">Главная</a></li>
                <li class="unavailable"><a href="#">Компания</a></li>
                <li class="current"><a href="#" title=""><?php the_title();?></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<!-- CONTENT : begin -->
<div id="content-page" class="vacancies">
    <div class="container_12">

        <!-- left column : begin -->
        <div class="grid_9 grid_mob_8 grid_xs_12">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>

                <h1><?php the_title();?></h1>

                <?php the_content();?>

            <?php endwhile; // Конец цикла ?>

        <?php if(is_page(4030)): ?>

            <?php comments_template(); ?>

        <?php endif; ?>

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



<?php get_footer(); ?>