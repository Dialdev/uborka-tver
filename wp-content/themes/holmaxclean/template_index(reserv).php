<?php
/**
 * Template Name: Главная страница
 *
 * Description: шаблон главной страницы
 *
 * Tip: для главной страницы
 *
 * @package WordPress
 * @subpackage dranikss
 * @since dranikss
 */
get_header();
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
    #banner-page .bx-wrapper li.six {
        background: url(<?= get_template_directory_uri(); ?>/images/mainpage_slider/slide_5.jpg) center top no-repeat;
        background-size: cover;
    }

    #banner-page .bx-wrapper li.one {
        background: url(<?= get_template_directory_uri(); ?>/img/sl_robot.jpg) center top no-repeat;
        background-size: cover;
    }
    /* адаптив */
    @media(max-width: 960px) {

        #banner-page .bx-wrapper li.six {
            background: url(<?= get_template_directory_uri(); ?>/images/adaptive_okno.jpg) center top no-repeat;
            background-size: cover;
        }
    }

    #banner-page .bx-wrapper li.seven {
        background: url(<?= get_template_directory_uri(); ?>/images/mainpage_slider/banner_bg2.jpg) center top no-repeat;
        background-size: cover;
    }
    #banner-page .bx-wrapper li.eight {
        background: url(<?= get_template_directory_uri(); ?>/img/sl_robot.jpg) center top no-repeat;
        background-size: cover;
    }
    #banner-page .bx-wrapper li.night {
        background: url(<?= get_template_directory_uri(); ?>/images/mainpage_slider/mainpage_jet.jpg) center top no-repeat;
        background-size: cover;
    }
    @media(max-width: 960px) {

        #banner-page .bx-wrapper li.night {
            background: url(<?= get_template_directory_uri(); ?>/images/adaptive_brava.jpg) center top no-repeat;
            background-size: cover;
        }
    }

    #banner-page .bx-wrapper li.five{
        background: url(<?= get_template_directory_uri(); ?>/images/mainpage_slider/banner_1920_530.gif) center top no-repeat;
        background-size: 100%;
    }
    .bx-pager-item:nth-child(7) {
        display: none!important;
    }
    img.slide-text.seven {
        top: 150px;
        right:0px;
    }
    img.slide-text.eight {
        top: 80px;
        left: 30px;
    }
    img.slide-text.night {
        top: 105px;
        right:-10px;
    }
    .bx-pager-item:nth-child(8) {
        display: none!important;
    }
    .bx-pager-item:nth-child(9) {
        display: none!important;
    }
</style>
<?php
$bannerArgs = array(
    'post_type' => 'slider',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order_by' => 'sort',
    'order' => 'ASC',
    'meta_query' => array(
        array(
            'key' => 'tohome',
            'value' => true,
            'type' => 'BOOLEAN'
        )
    )
);

$banners = query_posts($bannerArgs);

if (count($banners)) {
    ?>
    <div class="flexslider homeslider">
        <ul class="slides">
            <!--div id="banner-page" class="banner-page banner-page-home">
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
                 if($google){
                  ?>
                  <a class="play" href="<?=$google?>" target="_blank"><img src="<?= get_template_directory_uri();?>/images/plgog.png" alt=""></a>

                  <?php
                  }
                  ?>
                  <?php
                  if($appsotre){
                  ?>
                  <a class="apstore" href="<?=$appsotre?>" target="_blank"><img src="<?= get_template_directory_uri();?>/images/apstore.png" alt=""></a>

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

            <?php /*
                  <li class="six" style="background-image: url(<?=$fon?>);"> <!-- Время мыть окна -->
                  <div class="container_12">
                  <div class="grid_12">
                  <?php
                  if($google){
                  ?>
                  <a class="play" href="<?=$google?>" target="_blank"><img src="<?= get_template_directory_uri();?>/images/plgog.png" alt=""></a>

                  <?php
                  }
                  ?>
                  <?php
                  if($appsotre){
                  ?>
                  <a class="apstore" href="<?=$appsotre?>" target="_blank"><img src="<?= get_template_directory_uri();?>/images/apstore.png" alt=""></a>

                  <?php
                  }
                  ?>

                  <?php if(!empty($link)){?>
                  <a href="<?=$link?>">
                  <?php }?>
                  <?php if(!empty($text)){?>
                  <img style="visibility:hidden;<?=$posStr?>" src="<?=$text?>" alt="" class="slide-text">
                  <?php }?>
                  <?php if(!empty($link)){?>
                  </a>
                  <?php }?>
                  </div>
                  </div>
                  </li>
                  <?php
                 
            }*/
            ?>
        </ul>
    </div>
<?php
}
wp_reset_postdata();
wp_reset_query();
/*
  ?>
  <!-- BANNER : begin -->
  <div id="banner-page" class="banner-page">

  <ul>
  <!-- <li class="one">
  <div class="container_12">
  <div class="grid_12">
  <a href="/catalog/roboty-pylesosy/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/img/sl_robot_text.jpg" alt="" class="slide-text one"></a>
  </div>
  </div>
  </li> -->
  <!-- <li class="eight">
  <div class="container_12">
  <div class="grid_12">
  <a href="/roboty-pylesosy/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/img/sl_robot_text.jpg" alt="" class="slide-text eight"></a>
  </div>
  </div>
  </li> -->
  <li class="six"> <!-- Время мыть окна -->
  <div class="container_12">
  <div class="grid_12">
  <a href="/kliningovye-uslugi/myte-okon-i-fasadov/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/mainpage_slider/slide_text_5.png" alt="" class="slide-text six"></a>
  </div>
  </div>
  </li>
  <li class="first">
  <div class="container_12">
  <div class="grid_12">
  <a href="/kliningovye-uslugi/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/mainpage_slider/slide_text_1.png" alt="" class="slide-text first"></a>
  </div>
  </div>
  </li>
  <li class="night">
  <div class="container_12">
  <div class="grid_12">
  <a href="/catalog/braava-jet/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/mainpage_slider/mainpage_jet_text.png" alt="" class="slide-text night"></a>
  </div>
  </div>
  </li>
  <!-- <li class="seven">
  <div class="container_12">
  <div class="grid_12">
  <a href="#fake"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/mainpage_slider/plashka.png" alt="" class="slide-text seven"></a>
  </div>
  </div>
  </li> -->

  <li class="i-robot__ban">
  <div class="container_12">
  <div class="grid_12">
  <a class="play" href="https://play.google.com/store/apps/details?id=com.irobot.home" target="_blank"><img src="<?echo get_template_directory_uri();?>/images/plgog.png" alt=""></a>
  <a class="apstore" href="https://itunes.apple.com/ru/app/irobot-home/id1012014442?mt=8" target="_blank"><img src="<?echo get_template_directory_uri();?>/images/apstore.png" alt=""></a>
  <a href="/catalog/irobot-roomba-980/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/text_robot-01.png" alt="" class="slide-text"></a>
  </div>
  </div>
  </li>
  <li class="five">
  <a style="display: block;height: 100%" href="http://www.uborka-tver.ru/catalog/tork-peakserve-dispenser-dlya-polotenec-s-nepreryvnoj-podachej/">
  <div class="container_12">
  <div class="grid_12">
  <!-- <a href="/catalog/produkciya-tork/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/mainpage_slider/text_clear_house.png" alt="" class="slide-text five"></a> -->
  </div>
  </div>
  </a>
  </li>
  <li class="second">
  <div class="container_12">
  <div class="grid_12">
  <a href="/catalog/kliningovoe-oborudovanie/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/mainpage_slider/slide_text_2.png" alt="" class="slide-text second"></a>
  </div>
  </div>
  </li>
  <li class="third">
  <div class="container_12">
  <div class="grid_12">
  <a href="/roboty-pylesosy/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/mainpage_slider/slide_text_3.png" alt="" class="slide-text third"></a>
  </div>
  </div>
  </li>
  <li class="fourth">
  <div class="container_12">
  <div class="grid_12">
  <a href="/arenda-gryazezashhitnyx-pokrytij/"><img style="visibility:hidden;" src="<?echo get_template_directory_uri();?>/images/mainpage_slider/slide_text_4.png" alt="" class="slide-text fourth"></a>
  </div>
  </div>
  </li>
  </ul>

  </div>
  <!-- BANNER : end -->
  <?php
*/
?>
<div id="bannerhome">
    <div class="bx-pager bx-default-pager">
        <div class="bx-pager-item">
            <a href="/kliningovye-uslugi/" data-slide-index="0" class="bx-pager-link">1</a>
        </div>
        <div class="bx-pager-item">
            <a href="/catalog/kliningovoe-oborudovanie/" data-slide-index="1" class="bx-pager-link">2</a>
        </div>
        <div class="bx-pager-item">
            <a href="/roboty-pylesosy/" data-slide-index="2" class="bx-pager-link">3</a>
        </div>
        <div class="bx-pager-item">
            <a href="/arenda-gryazezashhitnyx-pokrytij/" data-slide-index="3" class="bx-pager-link">4</a>
        </div>
    </div>
</div>
<!-- CONTENT : begin -->
<div id="content-page">

    <!-- best selling : begin -->
    <div class="best-selling">

        <div class="container_12">

            <!-- title -->
            <div class="grid_8 grid_mob_8 grid_xs_12">
                <div class="title">Лучшие продажи</div>
            </div>

            <!-- see all link -->
            <div class="grid_4 grid_mob_4 hidden_xs">
                <div class="infinity clearfix">
                    <i></i>
                    <a href="/catalog/luchshie-prodazhi/" class="see-all-link" title="">Посмотреть все</a>
                </div>
            </div>
        </div>

        <!-- products : begin -->
        <div class="container_12">
            <div class="masonry">
                <?// популярные товары ?>

                <?echo do_shortcode( '[featured_products per_page = "8"]' ); ?>

            </div>

        </div>
        <!-- products : end -->

    </div>
    <!-- best selling : end -->


    <!-- novelty : begin -->
    <div class="novelty">

        <div class="container_12">

            <!-- title -->
            <div class="grid_8 grid_mob_8 grid_xs_12">
                <div class="title">Новинки</div>
            </div>

            <!-- see all link -->
            <div class="grid_4 grid_mob_4 hidden_xs">
                <div class="infinity clearfix">
                    <i></i>
                    <a href="/catalog/novinki/" class="see-all-link" title="">Все новинки</a>
                </div>
            </div>

        </div>

        <!-- products : begin -->
        <div class="container_12">
            <div class="grid_12">
                <div class="owl-carousel novelty-carousel">
                    <?echo do_shortcode( '[recent_products orderby="date" order="desc" per_page="6"]' );?>
                </div>
            </div>
        </div>
        <!-- products : end -->

    </div>
    <!-- novelty : end -->
<div class="mainpage__text">
        <div class="container_12">
            <div class="grid_12">
                <h1>Клининг и уборка в Твери</h1>
                <p>Клининговая компания «Чистый Дом» — команда профессионалов, которая более 12 лет оказывает услуги по уборке в Твери и Тверской области. Мы ежедневно даем нашим клиентам возможность сосредоточиться на своем бизнесе или семье и не отвлекаться на домашние дела и уборку.</p>
            </div>
            <div class="grid_6">
                <h2>Наши преимущества</h2>
                <ul>
                    <li>Cовременное профессиональное клининговое оборудование ведущих производителей — вашему дому обеспечена идеальная чистота!</li>
                    <li>Взаимозаменяемый штат сотрудников, прошедших предварительное обучение — вам не придется следить за качеством работы, все будет выполнено безупречно.</li>
                    <li>Страхование профессиональной ответственности сотрудников в случае непредумышленной порчи имущества. Не бойтесь за сохранность своих вещей.</li>
                    <li>Экологически чистые моющие и чистящие средства — гарантия безопасности во время проведения клининга и в процессе последующей эксплуатации помещений.</li>
                    <li>Индивидуальный подход к каждому клиенту, который отличает нас от других клининговых компаний Твери. Мы стараемся не только выполнить, но и предугадать ваши пожелания и потребности.</li>
                    <li>Конструктивный подход к вопросу ценообразования.</li>
                </ul>
            </div>
            <div class="grid_6">
                <h2>Мы предлагаем</h2>
                <ul>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/generalnaya-uborka/">Генеральную и поддерживающую уборку</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/autsorsing/">Аутсорсинг коммерческих объектов Твери</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/poslestroitelnaya-uborka/">Уборка после ремонта и строительства</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/ximchistka-kovrov-i-mebeli/">Химчистка ковров и мягкой мебели</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/myte-okon-i-fasadov/">Мытье окон, витрин, зеркал, вывесок, фасадов зданий</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/glubokaya-chistka-i-polirovka-napolnyx-pokrytij/">Очищение и полировка поверхностей из натурального камня</a></li>
                    <li><a href="http://www.uborka-tver.ru/arenda-gryazezashhitnyx-pokrytij/">Обслуживание грязезащитных покрытий</a></li>
                    <li><a href="http://www.uborka-tver.ru/catalog/nejtralizaciya-nepriyatnyx-zapaxov/">Устранение неприятных запахов</a>, <a href="http://www.uborka-tver.ru/catalog/biznes-aromatizaciya/">бизнес-ароматизация</a></li>
                    <li>Поставка оборудования и расходных материалов для туалетных комнат</li>
                </ul>
            </div>

            <div class="grid_12">
                <p>Уже 12 лет мы предоставляем клининговые услуги в Твери. За это время мы приобрели бесценный опыт и разработали свою эффективную систему управления процессами уборки. У наших сотрудников не бывает нештатных ситуаций, они могут решить любую возникшую проблему.</p>
                <p>Среди наших клиентов десятки коммерческих компаний и тысячи частных заказчиков, более 3 000 объектов и несколько сотен тысяч квадратных метров. Мы успешно сотрудничаем с иностранными компаниями, поскольку соответствуем высоким требованиям по качеству предоставления услуг, обеспечению безопасности и конфиденциальности и по системе документооборота.</p>
                <p>Мы с готовностью окажем разовые клининговые услуги или заключим договор на регулярное обслуживание по удобной для вас схеме сотрудничества.</p>
                <h2>Обеспечим чистоту:</h2>
                <ul>
                    <li>торгового и складского помещения;</li>
                    <li>спортивных и офисных зданий;</li>
                    <li>производственных объектов;</li>
                    <li>прилегающей территории (паркинг, входная зона, стрижка газона);</li>
                    <li>государственных и социальных учреждений;</li>
                    <li>в квартирах и загородных домах.</li>
                </ul>
                <p>Мы единственная компания в городе Тверь, клининговые услуги которой представлены полным спектром. Помимо предоставляемых услуг у нас вы можете приобрести профессиональное клининговое оборудование, моющие и чистящие средства, инвентарь и расходный материал для уборки по доступным ценам.</p>
            </div>
            <!-- logotypes carousel : begin -->
            <div class="grid_12">
                <div class="logotypes-carousel-wrapper">
                    <div class="logotypes-carousel">

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/grass.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <a href="/catalog/roboty-pylesosy/"><img src="/wp-content/uploads/logo/irobot.png" alt=""></a>
                        </div>

                        <!-- one logotype -->
                        <div>
                            <a href="/catalog/produkciya-tork/"><img src="/wp-content/uploads/logo/tork.png" alt=""></a>
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/larom.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/premiere.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/prochem.png" alt="">
                        </div>


                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/unger.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/vaportek.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/vileda.png" alt="">
                        </div>

                    </div>
                </div>
                
                <div class="logotypes-noncarousel-wrapper">

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/grass.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <a href="/catalog/roboty-pylesosy/"><img src="/wp-content/uploads/logo/irobot.png" alt=""></a>
                        </div>

                        <!-- one logotype -->
                        <div>
                            <a href="/catalog/produkciya-tork/"><img src="/wp-content/uploads/logo/tork.png" alt=""></a>
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/larom.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/premiere.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/prochem.png" alt="">
                        </div>


                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/unger.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/vaportek.png" alt="">
                        </div>

                        <!-- one logotype -->
                        <div>
                            <img src="/wp-content/uploads/logo/vileda.png" alt="">
                        </div>
                </div>
            </div>
            <!-- logotypes carousel : end -->
        </div>
    </div>

</div>

<!-- CONTENT : end -->

<?php get_footer(); ?>