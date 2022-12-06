<?php
/**
 * Template Name: Роботы
 *
 * Description: шаблон Роботы
 *
 * Tip: Роботы
 *
 * @package WordPress
 * @subpackage dranikss
 * @since dranikss
 */
get_header('robot');
?>
<style type="text/css">
    .i-robot__ban{background:url(<?= get_template_directory_uri(); ?>/images/clear-house_robot.jpg) 48% center;}
    .i-robot__ban .slide-text{    top: 79px;right: 0px;}
    .bx-pager-item a[data-slide-index="5"] {display: none!important;}
    .i-robot__ban .apstore{top: 55px;
                           left: -51px;
                           display: block;
                           position: absolute;}
    .i-robot__ban .play{top: 55px;
                        left: 14px;
                        display: block;
                        position: absolute;}

    table.compare td {
        padding-bottom: 5px;
        vertical-align: middle;
        min-height: 86px;
        height: 50px;
        text-align: center;
        padding-top: 5px;
        font-size: 14px;
    }

    table.compare.left td {
        padding-bottom: 15px;
        vertical-align: top;
        min-height: 86px;
        height: 50px;
        text-align: left;
        padding-top: 15px;
        font-size: 14px;
    }

    table.compare td:first-child {
        text-align: left;
        padding-left: 20px;
    }

    table.compare td small {
    }

    table.compare tr:nth-child(odd) {
        background: rgba(74, 191, 66, 0.16);
    }
    table.compare tr:hover {
        background: rgba(74, 191, 66, 0.3);
    }
    table.compare tr.nohover:hover {
        background: transparent
    }
    table.compare.left tr:nth-child(odd) {
        background: transparent;
    }

    table.compare {
        margin-bottom: 25px;
    }

    table.compare td em {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: #4ABF42;
        border-radius: 50%;
        color: #4ABF42;
    }

    table.compare td span {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: #4ABF42;
        border-radius: 50%;
        color: #4ABF42;
    }

    .banner--text {
        margin-top: -113px;
        margin-bottom: 60px;
    }

    #banner-page .bx-wrapper li.night {
        background: url(<?= get_template_directory_uri(); ?>/images/mainpage_slider/page_jet.jpg) center top no-repeat;
        background-size: cover;
    }
    img.slide-text.night {
        top: 30px;
    }

.roomba696{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2020/08/roomba-696.jpg') center center no-repeat;
        background-size: 77%;
    }

.roomba698{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2020/09/698-2.png') center center no-repeat;
        background-size: 77%;
    }

    .roomba676{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2019/01/676-1.png') center center no-repeat;
        background-size: 77%;
    }
    .roombae5{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2019/01/e5-1.png') center center no-repeat;
        background-size: 77%;
    }
.roombai3{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2021/07/roomba-i3-hero.png') center center no-repeat;
        background-size: 77%;
    }
.roombai3plus{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2021/05/i3-4-2.jpg') center center no-repeat;
        background-size: 77%;
    }

    .roomba960{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2019/01/960-1.png') center center no-repeat;
        background-size: 77%;
}

    .roomba976{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2020/09/976-2.png') center center no-repeat;
        background-size: 77%;    
}

    .roomba981{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2019/05/981-миниатюры.png') center center no-repeat;
        background-size: 77%;
    }
    .roombai7{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2019/03/i7-new.png') center center no-repeat;
        background-size: 77%;
    }
    .roombai7plus{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2019/03/Roomba-i7-_Clean-Base-with-Phone.png') center center no-repeat;
        background-size: 70%;
}
.roombas9{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2021/07/irobot-s9.jpg') center center no-repeat;
        background-size: 80%;

    }
    .roombas9plus{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2020/04/s9-phone.jpg') center center no-repeat;
        background-size: 70%;

    }

    .roombaj7{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2022/02/J7-1.jpg') center center no-repeat;
        background-size: 70%;
    }
    .braavajet{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2016/11/Braava-Jet_%D0%BD%D0%B0-%D1%81%D0%B0%D0%B9%D1%821.png') center center no-repeat;
        background-size: 50%;
    }

    .braava390{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2015/03/Braava_2-218x218.png') center center no-repeat;
        background-size: 90%;
    }

.braavajetm6{
        background: url('https://www.uborka-tver.ru/wp-content/uploads/2019/09/Braava-m6-front.png') center center no-repeat;
        background-size: 70%;
    }

     .accessories{
        background: url('http://www.uborka-tver.ru/wp-content/uploads/2019/01/Аксессуары.png') center center no-repeat;
        background-size: 100%;
    }


    /* table.compare td:nth-child(4) {
        display: none;
    }
    table.compare td:nth-child(3) {
        display: none;
    } */

</style>
<?php
?>

<!-- BREADCRUMBS : begin
<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="#" title="">Главная</a></li>
                <li class="unavailable"><a href="#">Каталог</a></li>
                <li class="current"><a href="#" title="">Роботы-пылесосы</a></li>
            </ul>
        </div>
    </div>

</div>
BREADCRUMBS : end -->

<!-- BANNER : begin -->
<? /* ?>
<div id="banner-page" class="irobot banner-page">

    <ul>
        <li class="night">
            <div class="container_12">
                <div class="grid_12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mainpage_slider/page_jet_text.png" alt="" class="slide-text night">
                </div>
            </div>
        </li>
        <li class="i-robot__ban">
            <div class="container_12">
                <div class="grid_12">
                    <a class="play" href="https://play.google.com/store/apps/details?id=com.irobot.home" target="_blank"><img src="<?echo get_template_directory_uri();?>/images/plgog.png" alt=""></a>
                    <a class="apstore" href="https://itunes.apple.com/ru/app/irobot-home/id1012014442?mt=8" target="_blank"><img src="<?echo get_template_directory_uri();?>/images/apstore.png" alt=""></a>
                    <a href="/catalog/irobot-roomba-981/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/text_robot-01.png" alt="" class="slide-text"></a>
                </div>
            </div>
        </li>
        <li class="fifth">
            <div class="container_12">
                <div class="grid_12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/irobot/slide_text_5.png" alt="" class="slide-text fifth">
                </div>
            </div>
        </li>
        <li class="fourth">
            <div class="container_12">
                <div class="grid_12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/irobot/slide_text_4.png" alt="" class="slide-text fourth">
                </div>
            </div>
        </li>
        <li class="third">
            <div class="container_12">
                <div class="grid_12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/irobot/slide_text_3.png" alt="" class="slide-text third">
                </div>
            </div>
        </li>
        <!-- <li class="second">
            <div class="container_12">
                <div class="grid_12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/irobot/slide_text_2.png" alt="" class="slide-text second">
                </div>
            </div>
        </li>
        <li class="first">
            <div class="container_12">
                <div class="grid_12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/irobot/slide_text_1.png" alt="" class="slide-text first">
                </div>
            </div>
        </li> -->
    </ul>

</div>
<? */?>
<!-- BANNER : end -->

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
                        <p class="flex-caption">
                            <?php if ($google) { ?>
                                <a class="play" href="<?= $google ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/plgog.png" alt=""></a>

                            <?php } ?>
                            <?php if ($appsotre) { ?>
                                <a class="apstore" href="<?= $appsotre ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/apstore.png" alt=""></a>

                            <?php } ?>

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
<div id="content-page" class="irobot">
   

    <!-- links : begin -->
    <div class="container_12">
    <h1 class="title-robots" >Роботы-пылесосы iRobot</h1>
    <style>
        .title-robots {
            text-align: center;
            padding: 20px;
        }
    </style>


<div class="grid_4">
            <a href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-roomba-698/" title="" class="roomba698 irobot-image">
                <span><b>Roomba 698</b><br>Сухая уборка пола</span>
            </a>
        </div>

        <div class="grid_4">
            <a href="https://www.uborka-tver.ru/catalog/robot-pylesoc-irobot-roomba-i3/" title="" class="roombai3 irobot-image">
                <span><b>Roomba i3</b><br>Сухая уборка пола</span>
            </a>
        </div>

<div class="grid_4">
            <a href="https://www.uborka-tver.ru/catalog/robot-pylesoc-irobot-roomba-i3-2/" title="" class="roombai3plus irobot-image">
                <span><b>Roomba i3+</b><br>Сухая уборка пола</span>
            </a>
        </div>
       
    </div>
    <!-- links : end -->

    <!-- links : begin -->
    <div class="container_12">
          <div class="grid_4">
            <a href="http://www.uborka-tver.ru/catalog/robot-pylesos-irobot-roomba-i7/" title="" class="roombai7 irobot-image">
                <span><b>Roomba i7</b><br>Сухая уборка пола</span>
            </a>
        </div>
             <div class="grid_4">
            <a href="http://www.uborka-tver.ru/catalog/irobot-roomba-i7/" title="" class="roombai7plus irobot-image">
                <span><b>Roomba i7+</b><br>Сухая уборка пола</span>
            </a>
        </div>

<div class="grid_4">
            <a href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-roomba-s9-3/" title="" class="roombas9 irobot-image">
                <span><b>Roomba s9</b><br>Сухая уборка пола</span>
            </a>
        </div>
     </div>
    <!-- links : end -->

    <!-- links : begin -->
    <div class="container_12">
 <div class="grid_4">
            <a href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-roomba-s9-2/" title="" class="roombas9plus irobot-image">
                <span><b>Roomba s9+</b><br>Сухая уборка пола</span>
            </a>
        </div>
        <div class="grid_4">
            <a href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-roomba-j7/" title="" class="roombaj7 irobot-image">
                <span><b>iRobot Roomba J7</b><br>Сухая уборка пола</span>
            </a>
        </div>
<div class="grid_4">
            <a href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-braava-jet-m6/" title="" class="braavajetm6 irobot-image">
                <span><b>Braava Jet m6 </b><br>Влажная уборка пола</span>
            </a>
        </div>
    </div>
    <!-- links : end -->

<!-- links : begin -->
    <div class="container_12">
 <div class="grid_13">
<a href="http://www.uborka-tver.ru/catalog/roboty-pylesosy/#!aksessuary-irobot" title="" class="accessories irobot-image">
                <span><b>Аксессуары </b><br>Расходники и запчасти</span>
            </a>
        </div>


    <!-- mini banner -->
    <div class="container_12 hidden_960">
        <div class="grid_12">
            <p><br><br></p>
            <div class="banner">
                <img src="<?php echo get_template_directory_uri(); ?>/images/irobot/banner.jpg">
		<div class="banner--text">

                    <?php echo get_post_meta($post->ID, "slogan", true); ?>
                </div>
            </div>
        </div>
        <div class="grid_12 scroll">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; // Конец цикла ?>
        </div>
    </div>

</div>
<!-- CONTENT : end -->

<div class="mobail-table-robot">
<div class="serias9 serias99">
<div class="serias9-title">Серия</div>
<div class="serias9-model">s9+</div>
<div class="serias9-images"><a href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-roomba-s9-2/"><img src="/wp-content/uploads/2020/08/s9-мини-.jpg" alt="iRobot Roomba s9+" /></a></div>
</div>
<div class="serias99-tab">
<span class="tab-table"><em class="circle-table"></em><strong>Заряжается самостоятельно</strong> — автоматически отправляется на базу для подзарядки</span>

<span class="tab-table"><em class="circle-table"></em><strong>Локальная уборка</strong> — обнаруживает загрязненные места и сосредотачивает усилия на их уборке</span>

<span class="tab-table"><em class="circle-table"></em><strong>Эффективная уборка в нескольких комнатах</strong> — убирает до трех комнат</span>

<span class="tab-table"><em class="circle-table"></em><strong>Уборка всех помещений на этаже</strong> — убирает полностью весь этаж, работая без подзарядки до 2 часов*</span>

<span class="tab-table"><em class="circle-table"></em><strong>Подзарядка и возобновление работы</strong> — автоматически подзаряжается и возобновляет уборку, пока работа не выполнена</span>

<span class="tab-table"><em class="circle-table"></em><strong>Установка расписания</strong> — убирает по расписанию</span>

<span class="tab-table"><em class="circle-table"></em><strong>Валики-скребки с защитой от наматывания</strong> — легко справляется с волосами</span>

<span class="tab-table"><em class="circle-table"></em><strong>Приложение iRobot HOME</strong> — откройте приложение iRobot HOME и запустите уборку из любой точки мира</span>

<span class="tab-table"><em class="circle-table"></em><strong>Индивидуальные настройки уборки</strong> — выбирайте тип уборки, который больше всего вам подходит</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система уборки</strong> — приподнимает, собирает и всасывает мусор</span>

<span class="tab-table"><em class="circle-table"></em><strong>Фильтр HEPA-Style**</strong> — захватывает пыль размером до 1 микрона</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система очистки AeroForce™</strong> — пятикратное увеличение мощности (вплоть до десятикратного на модели 980)***</span>

<span class="tab-table"><em class="circle-table"></em><strong>Инновационные валики-скребки с разными лопастями </strong> — позволяет обеспечить очень тщательную уборку</span>

<span class="tab-table"><em class="circle-table"></em><strong>Моющийся пылесборник</strong> — мотор вынесен за пределы мусоросборника. Теперь есть возможность промывать контейнер</span>

<span class="tab-table"><em class="circle-table"></em><strong>Система автоматического извлечения мусора Clean Base™</strong> — Автоматически откачивает содержимое мусоросборника робота-пылесоса в специальный мешок</span>

<span class="tab-table"><em class="circle-table"></em><strong>Функция Carpet Boost</strong> — автоматически увеличивает мощность всасывания во время уборки ковров, где это необходимо</span>
</div>


<div class="serias9 seriasi77">
<div class="serias9-title">Серия</div>
<div class="serias9-model">i7+</div>
<div class="serias9-images"><a href="http://www.uborka-tver.ru/catalog/irobot-roomba-i7/"><img src="/wp-content/uploads/2019/03/mini-roomba-i7-1.jpg" alt="iRobot Roomba i7+" /></a></div>
</div>
<div class="seriasi77-tab">
<span class="tab-table"><em class="circle-table"></em><strong>Заряжается самостоятельно</strong> — автоматически отправляется на базу для подзарядки</span>

<span class="tab-table"><em class="circle-table"></em><strong>Локальная уборка</strong> — обнаруживает загрязненные места и сосредотачивает усилия на их уборке</span>

<span class="tab-table"><em class="circle-table"></em><strong>Эффективная уборка в нескольких комнатах</strong> — убирает до трех комнат</span>

<span class="tab-table"><em class="circle-table"></em><strong>Уборка всех помещений на этаже</strong> — убирает полностью весь этаж, работая без подзарядки до 2 часов*</span>

<span class="tab-table"><em class="circle-table"></em><strong>Подзарядка и возобновление работы</strong> — автоматически подзаряжается и возобновляет уборку, пока работа не выполнена</span>

<span class="tab-table"><em class="circle-table"></em><strong>Установка расписания</strong> — убирает по расписанию</span>

<span class="tab-table"><em class="circle-table"></em><strong>Валики-скребки с защитой от наматывания</strong> — легко справляется с волосами</span>

<span class="tab-table"><em class="circle-table"></em><strong>Приложение iRobot HOME</strong> — откройте приложение iRobot HOME и запустите уборку из любой точки мира</span>

<span class="tab-table"><em class="circle-table"></em><strong>Индивидуальные настройки уборки</strong> — выбирайте тип уборки, который больше всего вам подходит</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система уборки</strong> — приподнимает, собирает и всасывает мусор</span>

<span class="tab-table"><em class="circle-table"></em><strong>Фильтр HEPA-Style**</strong> — захватывает пыль размером до 1 микрона</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система очистки AeroForce™</strong> — пятикратное увеличение мощности (вплоть до десятикратного на модели 980)***</span>

<span class="tab-table"><em class="circle-table"></em><strong>Инновационные валики-скребки с разными лопастями </strong> — позволяет обеспечить очень тщательную уборку</span>

<span class="tab-table"><em class="circle-table"></em><strong>Моющийся пылесборник</strong> — мотор вынесен за пределы мусоросборника. Теперь есть возможность промывать контейнер</span>

<span class="tab-table"><em class="circle-table"></em><strong>Система автоматического извлечения мусора Clean Base™</strong> — Автоматически откачивает содержимое мусоросборника робота-пылесоса в специальный мешок</span>

<span class="tab-table"><em class="circle-table"></em><strong>Функция Carpet Boost</strong> — автоматически увеличивает мощность всасывания во время уборки ковров, где это необходимо</span>
</div>


<div class="serias9 seriasi7">
<div class="serias9-title">Серия</div>
<div class="serias9-model">i7</div>
<div class="serias9-images"><a href="http://www.uborka-tver.ru/catalog/irobot-roomba-i7-2/"><img src="/wp-content/uploads/2019/03/mini-roomba-i7.jpg" alt="iRobot Roomba i7" /></a></div>
</div>
<div class="seriasi7-tab">
<span class="tab-table"><em class="circle-table"></em><strong>Заряжается самостоятельно</strong> — автоматически отправляется на базу для подзарядки</span>

<span class="tab-table"><em class="circle-table"></em><strong>Локальная уборка</strong> — обнаруживает загрязненные места и сосредотачивает усилия на их уборке</span>

<span class="tab-table"><em class="circle-table"></em><strong>Эффективная уборка в нескольких комнатах</strong> — убирает до трех комнат</span>

<span class="tab-table"><em class="circle-table"></em><strong>Уборка всех помещений на этаже</strong> — убирает полностью весь этаж, работая без подзарядки до 2 часов*</span>

<span class="tab-table"><em class="circle-table"></em><strong>Подзарядка и возобновление работы</strong> — автоматически подзаряжается и возобновляет уборку, пока работа не выполнена</span>

<span class="tab-table"><em class="circle-table"></em><strong>Установка расписания</strong> — убирает по расписанию</span>

<span class="tab-table"><em class="circle-table"></em><strong>Валики-скребки с защитой от наматывания</strong> — легко справляется с волосами</span>

<span class="tab-table"><em class="circle-table"></em><strong>Приложение iRobot HOME</strong> — откройте приложение iRobot HOME и запустите уборку из любой точки мира</span>

<span class="tab-table"><em class="circle-table"></em><strong>Индивидуальные настройки уборки</strong> — выбирайте тип уборки, который больше всего вам подходит</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система уборки</strong> — приподнимает, собирает и всасывает мусор</span>

<span class="tab-table"><em class="circle-table"></em><strong>Фильтр HEPA-Style**</strong> — захватывает пыль размером до 1 микрона</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система очистки AeroForce™</strong> — пятикратное увеличение мощности (вплоть до десятикратного на модели 980)***</span>

<span class="tab-table"><em class="circle-table"></em><strong>Инновационные валики-скребки с разными лопастями </strong> — позволяет обеспечить очень тщательную уборку</span>

<span class="tab-table"><em class="circle-table"></em><strong>Моющийся пылесборник</strong> — мотор вынесен за пределы мусоросборника. Теперь есть возможность промывать контейнер</span>

</div>


<div class="serias9 serias976">
<div class="serias9-title">Серия</div>
<div class="serias9-model">976</div>
<div class="serias9-images"><img src="/wp-content/uploads/2020/11/min976.jpg" alt="iRobot Roomba 976" /></div>
</div>
<div class="serias976-tab">
<span class="tab-table"><em class="circle-table"></em><strong>Заряжается самостоятельно</strong> — автоматически отправляется на базу для подзарядки</span>

<span class="tab-table"><em class="circle-table"></em><strong>Локальная уборка</strong> — обнаруживает загрязненные места и сосредотачивает усилия на их уборке</span>

<span class="tab-table"><em class="circle-table"></em><strong>Эффективная уборка в нескольких комнатах</strong> — убирает до трех комнат</span>

<span class="tab-table"><em class="circle-table"></em><strong>Уборка всех помещений на этаже</strong> — убирает полностью весь этаж, работая без подзарядки до 2 часов*</span>

<span class="tab-table"><em class="circle-table"></em><strong>Подзарядка и возобновление работы</strong> — автоматически подзаряжается и возобновляет уборку, пока работа не выполнена</span>

<span class="tab-table"><em class="circle-table"></em><strong>Установка расписания</strong> — убирает по расписанию</span>

<span class="tab-table"><em class="circle-table"></em><strong>Валики-скребки с защитой от наматывания</strong> — легко справляется с волосами</span>

<span class="tab-table"><em class="circle-table"></em><strong>Приложение iRobot HOME</strong> — откройте приложение iRobot HOME и запустите уборку из любой точки мира</span>

<span class="tab-table"><em class="circle-table"></em><strong>Индивидуальные настройки уборки</strong> — выбирайте тип уборки, который больше всего вам подходит</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система уборки</strong> — приподнимает, собирает и всасывает мусор</span>

<span class="tab-table"><em class="circle-table"></em><strong>Фильтр HEPA-Style**</strong> — захватывает пыль размером до 1 микрона</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система очистки AeroForce™</strong> — пятикратное увеличение мощности (вплоть до десятикратного на модели 980)***</span>

<span class="tab-table"><em class="circle-table"></em><strong>Функция Carpet Boost</strong> — автоматически увеличивает мощность всасывания во время уборки ковров, где это необходимо</span>
</div>


<div class="serias9 seriase5">
<div class="serias9-title">Серия</div>
<div class="serias9-model">E5</div>
<div class="serias9-images"><img src="/wp-content/uploads/2019/01/mine5-2.png" alt="iRobot Roomba E5" /></div>
</div>
<div class="seriase5-tab">
<span class="tab-table"><em class="circle-table"></em><strong>Заряжается самостоятельно</strong> — автоматически отправляется на базу для подзарядки</span>

<span class="tab-table"><em class="circle-table"></em><strong>Локальная уборка</strong> — обнаруживает загрязненные места и сосредотачивает усилия на их уборке</span>

<span class="tab-table"><em class="circle-table"></em><strong>Эффективная уборка в нескольких комнатах</strong> — убирает до трех комнат</span>

<span class="tab-table"><em class="circle-table"></em><strong>Уборка всех помещений на этаже</strong> — убирает полностью весь этаж, работая без подзарядки до 2 часов*</span>

<span class="tab-table"><em class="circle-table"></em><strong>Установка расписания</strong> — убирает по расписанию</span>

<span class="tab-table"><em class="circle-table"></em><strong>Валики-скребки с защитой от наматывания</strong> — легко справляется с волосами</span>

<span class="tab-table"><em class="circle-table"></em><strong>Приложение iRobot HOME</strong> — откройте приложение iRobot HOME и запустите уборку из любой точки мира</span>

<span class="tab-table"><em class="circle-table"></em><strong>Индивидуальные настройки уборки</strong> — выбирайте тип уборки, который больше всего вам подходит</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система уборки</strong> — приподнимает, собирает и всасывает мусор</span>

<span class="tab-table"><em class="circle-table"></em><strong>Фильтр HEPA-Style**</strong> — захватывает пыль размером до 1 микрона</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система очистки AeroForce™</strong> — пятикратное увеличение мощности (вплоть до десятикратного на модели 980)***</span>

<span class="tab-table"><em class="circle-table"></em><strong>Инновационные валики-скребки с разными лопастями </strong> — позволяет обеспечить очень тщательную уборку</span>

<span class="tab-table"><em class="circle-table"></em><strong>Моющийся пылесборник</strong> — мотор вынесен за пределы мусоросборника. Теперь есть возможность промывать контейнер</span>

</div>


<div class="serias9 serias698">
<div class="serias9-title">Серия</div>
<div class="serias9-model">698</div>
<div class="serias9-images"><a href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-roomba-698/"><img src="/wp-content/uploads/2020/08/698-12-e1598517549392.jpg" alt="iRobot Roomba 698" /></a></div>
</div>
<div class="serias698-tab">
<span class="tab-table"><em class="circle-table"></em><strong>Заряжается самостоятельно</strong> — автоматически отправляется на базу для подзарядки</span>

<span class="tab-table"><em class="circle-table"></em><strong>Локальная уборка</strong> — обнаруживает загрязненные места и сосредотачивает усилия на их уборке</span>

<span class="tab-table"><em class="circle-table"></em><strong>Эффективная уборка в нескольких комнатах</strong> — убирает до трех комнат</span>

<span class="tab-table"><em class="circle-table"></em><strong>Установка расписания</strong> — убирает по расписанию</span>

<span class="tab-table"><em class="circle-table"></em><strong>Валики-скребки с защитой от наматывания</strong> — легко справляется с волосами</span>

<span class="tab-table"><em class="circle-table"></em><strong>Приложение iRobot HOME</strong> — откройте приложение iRobot HOME и запустите уборку из любой точки мира</span>

<span class="tab-table"><em class="circle-table"></em><strong>Индивидуальные настройки уборки</strong> — выбирайте тип уборки, который больше всего вам подходит</span>

<span class="tab-table"><em class="circle-table"></em><strong>Трехступенчатая система уборки</strong> — приподнимает, собирает и всасывает мусор</span>

</div>
<td><small>* Протестировано в лаборатории iRobot на твердых напольных покрытиях. Время работы может различаться в зависимости от особенностей помещения.</small></td>
<td><small>** Фильтр iRobot HEPA-Style использует мембрану E11 HEPA, которая задерживает 99% проходящих через фильтр частиц размером до 1 микрона, согласно тесту IEST-RP-CC001.5.</small></td>
<td><small>*** В сравнении с системами AeroVac™ Roomba® серии 600 и серии 700.</small></td>
<td><small>- Только определенные модели.</small></td>
</div>

<?php get_footer(); ?>



