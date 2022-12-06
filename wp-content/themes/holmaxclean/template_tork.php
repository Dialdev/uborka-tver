<?php
/**
 * Template Name: TORK
 *
 * Description: шаблон листинга товаров
 *
 * Tip: для лисгинга
 *
 * @package WordPress
 * @subpackage dranikss
 * @since dranikss
 */
get_header();
?>

<?php
//if (isset($_GET['qw'])) {

$bannerArgs = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order_by' => 'sort',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'toservice',
            'value' => sprintf(':"%s";', $post->ID),
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

<!--img style="width:100%;" src="<?= get_template_directory_uri() ?>/images/banner_02.jpg" alt=""-->

<!-- CONTENT : begin -->
<div id="content-page" class="listing">
    <div class="container_12">

        <!-- left column (filters) : begin -->
        <div class="grid_3 filters">

            <!-- subtitle -->
            <div class="subtitle">Фильтр товаров</div>
            <div id="filters_inner" class="filters_inner">
                <div>
                <!-- filter category : begin -->
                <div class="filter-category">

                    <div>По категории</div>

                    <div>
                        <ul>
                            <li class="active all"><a title="<?php echo $post->post_title; ?>" href="#">Все товары</a></li>
                            <?php
                            $ids = get_post_meta($post->ID, 'category_ids', true);
                            echo do_shortcode('[product_categories hide_empty="0" ids="' . ( $ids ? $ids : $post->ID) . '" orderby="slug" order="ASC"] ');
                            ?>
                        </ul>

                        <?php wp_nonce_field('ajax-shoping-nonce', 'security_shoping'); ?>

                    </div>

                </div>
                <!-- filter category : end -->
                <!-- filter brand : begin -->
                <div class="filter-brand" id="filter-sub">
                    <div></div>
                    <div>
                        <ul id="filter_subcategory">

                        </ul>
                    </div>
                </div>
                <!-- filter brand : end -->
                </div>
            </div>

        </div>
        <!-- left column (filters) : end -->

        <!-- right column (filters + products) : begin -->
        <div class="grid_9 content">

            <!-- title -->
            <?php if (!$_GET['_escaped_fragment_']): ?>
                <h1><?php the_title(); ?></h1>
            <?php else: ?>
                <?php $ID_get = url_to_postid($url); ?>
                <h1><?php echo get_the_title($ID_get) ?></h1>
            <?php endif; ?>

<p>
Компания «Чистый Дом» является официальным представителем торговой марки TORK. Гигиеническая продукция для туалетных комнат — туалетная бумага, бумажные полотенца, жидкое мыло, мыло-пена и салфетки — в наличии на складе компании и под заказ. «Чистый Дом» осуществляет еженедельные поставки продукции TORK по адресам клиентов.</p>
<p>Ознакомиться с продукцией TORK и сделать ваш первый заказ вы можете на сайте нашего интернет-магазина, а также в нашем шоу-руме по адресу г. Тверь, ул. Коминтерна, 22б. </p>
<p>Теперь вы можете оснастить туалетные комнаты вашей компании диспенсерами TORK абсолютно бесплатно! Узнайте у менеджеров компании, как присоединиться к диспенсерной политике TORK</p>

</p>

            <p class="tork__decr">На странице каждого диспенсера или материала указаны <a href="">сопутствующие товары <span><img src="<?= get_template_directory_uri() ?>/images/tork.png" alt=""></span></a>, подходящие к выбранной модели.</p>

            <!-- sorting : begin -->
            <div class="sorting clearfix">
                <span class="po">Сортировать по: </span>
                <!-- select -->
                <div class="select">
                    <span>новизне</span>
                    <a href="#" title="" data-sorting="price">цене, сначала недорогие</a>
                    <a href="#" title="" data-sorting="priceup">цене, сначала дорогие</a>
                    <a href="#" title="" data-sorting="title">названию</a>
                    <a href="#" title="" data-sorting="novelity">новизне</a>
                    <a href="#" title="" data-sorting="popular">популярности</a>
                </div>

                <!-- variant -->
                <div class="variant clearfix">
                    <span>Вид</span>
                    <a href="#" title="Плитка" class="active" data-attr="tile"></a>
                    <a href="#" title="Список" data-attr="list"></a>
                </div>

            </div>
            <!-- sorting : end -->
            <div class="loader-magick round-square">
                <div class="wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- list products : begin -->
            <div class="this-magick woocommerce">
                <div class="masonry">

                    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                            <?php
                            if ($_GET['_escaped_fragment_']) {
                                echo do_shortcode('[product_category category="' . $_GET['_escaped_fragment_'] . '" per_page="9999"  orderby="date" order="desc"]');
                            } else {
                                the_content();
                            }
                            ?>
                            <?php ?>

                        <?php endwhile; // Конец цикла  ?>

                </div>
            </div>
            <!-- list products : end -->

        </div>
        <!-- right column (filters + products) : end -->

    </div>
</div>
<!-- CONTENT : end -->
<script>
    jQuery(window).load(function () {
        jQuery('.select a[data-sorting="price"]').click();
        jQuery('#content-page.listing .masonry').isotope({filter: '.one-product[data-brand=TORK]'});
        jQuery('.select a[data-sorting="price"]').click();

    })</script>
<?php get_footer(); ?>
