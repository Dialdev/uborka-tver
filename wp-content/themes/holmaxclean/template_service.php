<?php
/**
 * Template Name: Услуга
 *
 * Description: шаблон для вывода одной услуги
 *
 * Tip: для вывода одной услуги
 *
 * @package WordPress
 * @subpackage dranikss
 * @since dranikss
 */
get_header();
?>

<!-- BREADCRUMBS : begin -->
<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="/" title="">Главная</a></li>
                <li class="unavailable"><a href="#">Услуги</a></li>
                <?php if ($post->post_parent): ?>
                    <li><a href="<?php echo get_permalink($post->post_parent); ?>" title=""><?php echo get_the_title($post->post_parent); ?></a></li>
                <?php endif; ?>
                <li class="current"><a href="#" title=""><?php echo $post->post_title; ?></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<?php
$bannerArgs = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order_by' => 'sort',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'toservice',
            'value' => sprintf(':"%s";', get_the_ID()),
            'compare' => 'LIKE'
        )
    )
);

$banners = query_posts($bannerArgs);

if (count($banners)) {
    ?>

    <div class="flexslider">
        <ul class="slides">
            <!--div id="banner-page" class="banner-page">
                <ul--> 
            <?php
            foreach ($banners as $banner) {
                $fon = get_field('fon', $banner->ID);
                $text = get_field('text', $banner->ID);
                $link = get_field('link', $banner->ID);
                $pos = get_field('position', $banner->ID);
                $google = get_field('google', $banner->ID);
                $appsotre = get_field('appstore', $banner->ID);

                if ($pos == 'right')
                    $posStr = 'left:500px;';
                elseif ($pos == 'center')
                    $posStr = 'left:250px;';
                else
                    $posStr = '';
                ?>
                <li style="background-image: url(<?= $fon ?>)">

                    <?php if (!empty($link)) { ?>
                        <a href="<?= $link ?>">
                        <?php } ?>  
                        <img style="visibility:hidden" src="<?= $fon ?>" />
                        <p class="flex-caption"><?php
                            if ($google) {
                                ?>
                                <a class="play" href="<?= $google ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/plgog.png" alt=""></a>

                                <?php
                            }
                            ?>
                            <?php
                            if ($appsotre) {
                                ?>
                                <a class="apstore" href="<?= $appsotre ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/apstore.png" alt=""></a>

                                <?php
                            }
                            ?>

                            <?php if (!empty($text)) { ?>
                                <img style="<?= $posStr ?>" src="<?= $text ?>" alt="" class="slide-text">
                            <?php } ?> </p>

                        <?php if (!empty($link)) { ?>
                        </a>
                    <?php } ?>
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
    <?php
}

wp_reset_query();
wp_reset_postdata();
?>

<!-- CONTENT : begin -->
<div id="content-page" class="clining-services">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
            <!-- title and banner : begin -->
            <div class="container_12">
                <div class="grid_12">

                    <h1><?php the_title(); ?></h1>

                    <?php //echo get_post_meta( $post->ID, 'img_services', true) ? '<img src="' . get_post_meta( $post->ID, 'img_services', true) . '">' : ''?>




                </div>
            </div>
            <!-- title and banner : end -->

            <div class="service-mobile">
                <?php if (get_post_meta($post->ID, 'price_services', true)): ?>
                    <!-- pdf : begin -->
                    <p class="contacts">
                        <a href="<?php echo get_post_meta($post->ID, 'price_services', true) ?>" target="_blank" title="Скачать прайс-лист">Скачать прайс-лист</a>

                    </p>
                    <!-- pdf : end -->
                <?php endif; ?>

                <p class="contacts">
                    <a href="#modal-window-feedback" class="fancybox green-button">Заказать услугу</a>
                </p>
            </div>

            <!-- text info : begin -->
            <div class="container_12">

                <!-- left column : begin -->
                <div class="grid_7">
                    <p>&nbsp;</p>
                    <?php the_content(); ?>

                </div>
                <!-- left column : end -->

                <!-- right column : begin -->
                <div class="grid_5">
                    <p>&nbsp;</p>
                    <?php get_sidebar('service') /* sidebar-left.php */ ?>

                </div>
                <!-- right column : end -->

            </div>
            <!-- text info : end -->
        <?php endwhile; // Конец цикла ?>  
</div>
<!-- CONTENT : end -->

<?php get_footer(); ?>