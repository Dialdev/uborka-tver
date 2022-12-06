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
                <li class="current"><a href="/rubrika/akciya/" title="Акции">Акции</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<!-- CONTENT : begin -->
<div id="content-page" class="articles">
    <div class="container_12">

        <!-- left column : begin -->
        <div class="grid_9">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>

            <!-- one article : begin -->
            <div class="one-article akcio clearfix">
            <a id="<?php echo $post->ID?>"></a>
                <?if( get_post_meta($post->ID, 'kodd', true) ):?>

                    <div class="grid_0">
                        <?php echo get_post_meta($post->ID, 'kodd', true) ?>
                    </div>

                    <div class="push_3 grid_5 ak_text">
                        <h2><?php the_title();?></h2>

                        <p><?php the_content(); ?></p>

                    </div>


                <?else:?>

                    <div class="grid_3 imag">
                        <a href="<?php echo get_post_meta($post->ID, 'ak_link', true) ?>"><?php the_post_thumbnail();?></a>
                    </div>

                    <div class="grid_5 ak_text us">
                        <h2><?php the_title();?></h2>

                        <p><?php the_content(); ?></p>

                    </div>

                <?endif;?>
            </div>
            <!-- one article : end -->

        <?php endwhile; // Конец цикла ?>

        <?php if (function_exists("pagination")) {
            pagination();
        } ?>


        </div>
        <!-- left column : end -->

        <!-- right column : begin -->
        <div class="grid_3">
            <?php get_sidebar('left') /* sidebar-left.php */ ?>
        </div>

        <!-- right column : end -->

    </div>
</div>
<!-- CONTENT : end -->



<?php get_footer(); ?>