<?php
/**
 * Template Name: Услуги
 *
 * Description: шаблон для услуг
 *
 * Tip: для услуг
 *
 * @package WordPress
 * @subpackage dranikss
 * @since dranikss
 */
get_header();
?>


<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/mainslider/css/prism.css">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/mainslider/css/carousel.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/custom.css">
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/mainslider/js/prism.js"></script>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/mainslider/js/simplycarousel.js"></script>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/mainslider/js/script2.js"></script>	




<!-- BREADCRUMBS : begin -->
<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="/" title="">Главная</a></li>
                <li class="unavailable"><a href="#">Услуги</a></li>
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
<div id="content-page" class="cleaning-new">
    <div class="container_12">

        <!-- title -->
        <div class="grid_12">
            <h1 class="min550"><?php echo $post->post_title; ?></h1>
        </div>

        <!-- about services : begin -->
        <div class="grid_12 about-services">

            <?php
            // нахожу дочерние элементы страницы
            $pages = get_pages(array('child_of' => $post->ID, 'sort_column' => 'post_date'));
            ?>
            <?php if ($pages) : ?>
                <?php foreach ($pages as $page): ?>
                    <!-- one service : begin -->
                    <div class=" one-service clearfix">
                        <div class="service-category">
                            <!-- image/link -->
                            <a class="one-service-image" href="<?php echo get_permalink($page->ID); ?>" title="<?php echo $page->post_title; ?>">
                                <?php
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), 'full');
                                if (count($src)) {
                                    ?>
                                    <img src="<?php echo $src[0]; ?>" />
                                    <?php
                                }
                                ?>
                            </a>

                            <!-- title second lvl -->
                            <h2 class="one-service-title" ><a href="<?php echo get_permalink($page->ID); ?>" title="<?php echo $page->post_title; ?>"><?php echo $page->post_title; ?></a></h2>

                            <!-- description -->
                            <p><?php echo get_post_meta($page->ID, 'descr_services', true); ?></p>
                            <br clear="all"/>
                        </div>
                    </div>
                    <!-- one service : end -->

                <?php endforeach; ?>
            <?php else: ?>

            <?php endif; ?>

        </div>
        <!-- about services : end -->

    </div>

    <?if(is_page(12199)):?>
                <div class="advantages">

<div class="container_12">
    <div class="grid_12">

        <h2>Преимущества работы с нами</h2>

    </div>
</div>

<div class="container_12">

    <div class="grid_6 grid_mob_6 grid_xs_12">

        <ul>
            <li>Высокое качество профессионального уборочного оборудования, инвентаря и моющих средств европейских производителей.</li>
            <li>Качество уборки как самая важная составляющая контракта. Конструктивный подход к вопросу ценообразования.</li>
            <li>Легально устроенный, обученный и взаимозаменяемый <br>персонал.</li>
            <li>Страхование. Профессиональная ответственность сотрудников застрахована. В случае непредумышленной порчи имущества, ущерб будет возмещен в полном объеме.</li>
        </ul>

    </div>

    <div class="grid_6 grid_mob_6 grid_xs_12">

        <ul>
            <li>Хорошая деловая репутация. 10 лет бузупречной работы в тверском клининге, опыт сотрудничества с десятками коммерческих организаций и тысячами частных лиц.</li>
            <li>Опыт работы с иностранными компаниями, предъявляющими высокие требования к технике безопасности, охране труда, вопросам экологии и системе докуметооборота.</li>
            <li>Разработанная и проверенная на собственном опыте в течение многих лет эффективная система управления процессом уборки с учетом индивидуальных пожеланий клиентов.</li>
        </ul>

    </div>
</div>
</div>
            <?endif;?>

            
</div>
<!-- CONTENT : end -->


<?php get_footer(); ?>
