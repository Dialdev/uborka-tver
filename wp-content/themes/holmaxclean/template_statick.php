<?php
/**
 * Template Name: Материал
 *
 * Description: шаблон для вывода одного материала
 *
 * Tip: для вывода одного материала
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
                <li class="unavailable"><a href="#">Услуги</a></li>
                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>" title=""><?php echo get_the_title( $post->post_parent ); ?></a></li>
                <li class="current"><a href="#" title=""><?php echo $post->post_title; ?></a></li>
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

            <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>

                <h1><?php the_title();?></h1>

                <?php the_content();?>

            <?php endwhile; // Конец цикла ?>

            <!-- additional features : begin -->
            <div class="additional-features clearfix">
               <?/* <a href="<?php echo $_SERVER['HTTP_REFERER']?>" title="">Назад к списку</a>*/?>
                <div class="share">Поделиться:
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-547304877887d8c5" async="async">
                    </script>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_sharing_toolbox"></div>
                </div>
            </div>
            <!-- additional features : end -->

        </div>
        <!-- left column : end -->
        <!-- right column : end -->

    </div>
</div>
<!-- CONTENT : end -->



<?php get_footer(); ?>