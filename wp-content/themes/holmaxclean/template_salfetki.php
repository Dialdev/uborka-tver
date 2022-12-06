<?php
/**
 * Template Name: Салфетки
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
$ids = get_post_meta($post->ID, 'category_ids', true);
?>

<!-- BREADCRUMBS : begin -->
<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="/" title="">Главная</a></li>
                <li><a href="/catalog/">Магазин</a></li>
                <li class="current"><a href="<?php echo get_the_permalink($post->ID); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a></li>

            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<?php
/* * *** Слайдер основной страницы ***** */
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
    <div class="flexslider" data-cat="0">
        <ul class="slides">
            <!--div id="banner-page" class="banner-page banner0" data-cat="0">
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
                            <?php } ?></p>

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
/* * *** Слайдер основной страницы ***** */


/* * *** Слайдеры по разделам ***** */

if ($ids) {
    $idsSlider = explode(",", $ids);
    $idsSlider[] = 0;

    $meta_query = array(
        'relation' => 'OR'
    );
    foreach ($idsSlider as $id) {
        $meta_query[] = array(
            'key' => 'catalog',
            'value' => sprintf(':"%s";', $id),
            'compare' => 'LIKE'
        );
    }

    $bannerArgs = array(
        'post_type' => 'slider',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'order_by' => 'sort',
        'order' => 'ASC',
        'meta_query' => $meta_query
    );

    $banners = get_posts($bannerArgs);

    $bGroups = array();

    foreach ($banners as $bannerOld) {
        $f = get_field('catalog', $bannerOld->ID);


        foreach ($f as $item) {
            $bGroups[$item->term_id][$bannerOld->ID] = $bannerOld;
        }
    }

    if (count($banners)) {
        foreach ($bGroups as $key => $bannersN) {
            ?>

            <div class="flexslider banner-page" style="display:none" data-cat="<?= $key; ?>">
                <ul class="slides">
                  <!--div id="banner-page" class="banner-page banner<?= $key; ?>" data-cat="<?= $key; ?>" style="display:none">
                      <ul--> 
                    <?php
                    foreach ($bannersN as $banner) {
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
    }

    wp_reset_query();
    wp_reset_postdata();
}


/* * *** Слайдеры по разделам ***** */
?>

<?php /* if (get_the_post_thumbnail_url( $post->ID, 'full' )):?>

  <img id="main_banners" style="width:100%;" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ) ?>" alt="<?php the_title(); ?>">
  <?php endif */ ?>
<!-- CONTENT : begin -->
<div id="content-page" class="listing">
    <div class="container_12">
        <!--  <?php if (!$_GET['_escaped_fragment_']): ?>
                             <div class="grid_12">
                                 <h1 class="visible_960"><?php the_title(); ?></h1>
                             </div>
        <?php else: ?>
            <?php $ID_get = url_to_postid($url); ?>
                             <div class="grid_12">
                                 <h1 class="visible_960"><?php echo get_the_title($ID_get) ?></h1>
                             </div>
        <?php endif; ?> -->

        <!-- left column (filters) : begin -->
        <div class="grid_3 filters">
            <!-- title -->

            <!-- subtitle -->
            <div class="subtitle">Фильтр товаров</div>
            <div id="filters_inner" class="filters_inner">
                <Div>
                    <!-- filter category : begin -->
                    <div class="filter-category">

                        <div>По категории</div>

                        <div>
                            <ul>
                                <li class="active all"><a title="<?php echo $post->post_title; ?>" href="#">Все товары</a></li>
                                <?php echo do_shortcode('[product_categories hide_empty="0" ids="' . ( $ids ? $ids : $post->ID) . '" orderby="description"] '); ?>
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
                    <!-- filter brand : begin -->
                    <div class="filter-brand" id="filter-brand">
                        <div>По бренду</div>
                        <div>
                            <ul>

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
                <h1 class=""><?php the_title(); ?></h1>
            <?php else: ?>
                <?php $ID_get = url_to_postid($url); ?>
                <h1 class=""><?php echo get_the_title($ID_get) ?></h1>
            <?php endif; ?>

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
                                echo do_shortcode('[product_category category="' . $_GET['_escaped_fragment_'] . '" per_page="9999"]');
                            } else {
                                the_content();
                            }
                            ?>
                            <?php ?>

                        <?php endwhile; // Конец цикла  ?>

                </div>
            </div>
            <!-- list products : end -->
            <?if(is_page(504)):?>
            <div class="category__text">

                <p>Хотите, чтобы уборка в доме или офисе происходила без вашего участия? Тогда мы предлагаем вам купить робот-пылесос. Чудо прогресса и торжество инженерной мысли, эта техника появилась на рынке еще в 2002 году. Сегодня iRobot Corporation по праву является признанным лидером на рынке продаж роботов для уборки в квартирах, домах и общественных учреждениях. Купить irobot вы можете прямо сейчас, позвонив в нашу клининговую компанию по указанным на сайте контактным номерам телефона.</p>
                <h3>Преимущества робота-пылесоса:</h3>
                <ul>
                    <li>техника практически не издает никаких звуков во время работы. Бесшумный режим позволит включать пылесос даже во время сна ребенка;</li>
                    <li>робот-пылесос потребляет минимум электроэнергии;</li>
                    <li>не вызывает психологического дискомфорта;</li>
                    <li>позволяет произвести качественную уборку пола, ковра и ковролина за считанные минуты. Помогает избавиться от мусора, пыли и иных загрязнений даже в труднодоступных местах, к примеру, по углам, между мебелью или предметами интерьера.</li>
                </ul>
                <p>За более чем 14-летнее существование робот-пылесос завоевал любовь разумных хозяев по всему миру. Сегодня вы без проблем сможете приобрести irobot в Твери по демократичной цене. Обращайтесь в клининговую компанию «Чистый дом»!</p>

            </div>
            <?endif;?>


            <?if(is_page(510)):?>
            <div class="category__text">

                <p>Компания "Чистый дом" предлагает широкий ассортимент диспенсеров и расходных материалов для туалетных комнат от известных брендов. В продаже туалетная бумага в рулонах и листовая, бумажные полотенца рулонные и листовые, сидения и покрытия на унитаз, жидкое и пенное мыло, диспенсеры для мыла, туалетной бумаги, полотенец, салфеток. Купить продукцию можно оптом и в розницу.</p>

            </div>
            <?endif;?>

            <?if(is_page(516)):?>
            <div class="category__text">

                <p>Компания "Чистый дом" предлагает купить оптом и в розницу урны для мусора различных типов: педальные, урны-пепельницы, закрытые корзины. В зависимости от вида и назначения, продукция может использоваться в помещениях или на улице.</p>

            </div>
            <?endif;?>


        </div>
        <!-- right column (filters + products) : end -->

    </div>
</div>
<!-- CONTENT : end -->


<?php get_footer(); ?>