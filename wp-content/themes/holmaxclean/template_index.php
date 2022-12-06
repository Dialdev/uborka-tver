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
		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/mainslider/css/prism.css">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/mainslider/css/carousel.css">
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/custom.css">
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/mainslider/js/prism.js"></script>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/mainslider/js/simplycarousel.js"></script>
		<script type="text/javascript" src="<?= get_template_directory_uri(); ?>/mainslider/js/script2.js"></script>		

<?/*<style type="text/css">
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
</style>*/?>
<!-- BANNER 19.06.19 -->
 <div class="container">
				<div id="main_banner" class="demo"><div class="carousel-slide">
<a class="slide-link" href="https://www.uborka-tver.ru/vremennye-izmeneniya-v-rabote-sajta/">
<img class="slide-img"  alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2022/03/Изменения-2.jpg">
			</a>
			</div>


<div class="carousel-slide">
<a class="slide-link" href="https://www.uborka-tver.ru/arenda-gryazezashhitnyx-pokrytij/">
<img class="slide-img"  alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2020/09/Аренда-грязезащитных-ковров-3.png">
			</a>
			</div>


<div class="carousel-slide">
<a class="slide-link" href="https://www.uborka-tver.ru/kliningovye-uslugi/dezinfekciya-pomeshhenij/">
<img class="slide-img"  alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2020/05/Услуга-Дезинфекция.png">
			</a>
			</div>

<div class="carousel-slide">
					<a class="slide-link" href="https://www.uborka-tver.ru/catalog/antisepticheskie-i-dezinficiruyushhie-sredstva/">
						<img class="slide-img"  alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2020/05/Антисептики-2.png">
					</a>
				</div>
<div class="carousel-slide">
					<a class="slide-link" href="https://www.uborka-tver.ru/roboty-pylesosy/">
						<img class="slide-img"  alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2020/05/Аксессуары-в-подарок-искл-676.png">
					</a>
				</div>
<div class="carousel-slide">
					<a class="slide-link" href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-roomba-s9-2/">
						<img class="slide-img"  alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2020/05/Roomba-s9right-2.png">
					</a>
				</div>										
				<div class="carousel-slide">		
					<a class="slide-link" href="https://www.uborka-tver.ru/catalog/robot-pylesos-irobot-braava-jet-m6/">
						<img class="slide-img" alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2020/03/Braava-Jet-m6.png">
					</a> 
				</div>
				<div class="carousel-slide">
					<a class="slide-link" href="https://www.uborka-tver.ru/kliningovye-uslugi/">
						<img class="slide-img" alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2018/08/Слайд-Услуги-клининга-1.png">
					</a> 
				</div>	
				
			
				<div class="carousel-slide">
					<a class="slide-link" href="https://www.uborka-tver.ru/catalog/vileda-sprejpro-inoks/">
						<img class="slide-img" alt="slide" src="https://www.uborka-tver.ru/wp-content/uploads/2018/09/Виледа.png">
					</a>
				</div>
				<span class="arrow left select-none">&lt;</span>
				<span class="arrow right select-none">&gt;</span>
			</div> 		
	</div> 

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

          
        </div>

        <!-- products : begin -->
        <div class="container_12">
            <div class="masonry">
                <?// популярные товары ?>

                <?echo do_shortcode( '[featured_products per_page = "8"]' ); ?>

            </div>
	  <!-- see all link -->
            <div class="grid_4 grid_mob_4 hidden_xs see_all_link">
                <div class="infinity clearfix">
                    <i></i>
                    <a href="/catalog/luchshie-prodazhi/" class="see-all-link" title="">Посмотреть все</a>
                </div>
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

            
        </div>

        <!-- products : begin -->
        <div class="container_12">
            <div class="grid_12">
                <div class="owl-carousel novelty-carousel">
                    <?echo do_shortcode( '[recent_products orderby="date" order="desc" per_page="6"]' );?>
                </div>
            </div>
            <!-- see all link -->
            <div class="grid_4 grid_mob_4 hidden_xs see_all_link">
                <div class="infinity clearfix">
                    <i></i>
                    <a href="/catalog/novinki/" class="see-all-link" title="">Все новинки</a>
                </div>
            </div>
	<!-- see all end-->
        </div>
        <!-- products : end -->
        
    </div>
    <!-- novelty : end -->
<div class="mainpage__text">
        <div class="container_12">

            <div class="grid_12">
                <h2>Наши преимущества</h2>
                <ul class="preim_index">
                    <li>Cовременное профессиональное клининговое оборудование ведущих производителей — вашему дому обеспечена идеальная чистота!</li>
                    <li>Взаимозаменяемый штат сотрудников, прошедших предварительное обучение — вам не придется следить за качеством работы, все будет выполнено безупречно.</li>
                    <li>Страхование профессиональной ответственности сотрудников в случае непредумышленной порчи имущества. Не бойтесь за сохранность своих вещей.</li>
                    <li>Экологически чистые моющие и чистящие средства — гарантия безопасности во время проведения клининга и в процессе последующей эксплуатации помещений.</li>
                    <li>Индивидуальный подход к каждому клиенту, который отличает нас от других клининговых компаний Твери. Мы стараемся не только выполнить, но и предугадать ваши пожелания и потребности.</li>
                    <li>Конструктивный подход к вопросу ценообразования.</li>
                </ul>
            </div>
<br>
<br>
            <div class="grid_12">
                <h2>Мы предлагаем</h2>
<!-- <div id="bannerhome1">
    <div class="bx-pager bx-default-pager flex-pager">
        <div class="bx-pager-item flex-pager-item">
            <a href="/kliningovye-uslugi/generalnaya-uborka/" data-slide-index="0" class="bx-pager-link">1</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/kliningovye-uslugi/autsorsing/" data-slide-index="1" class="bx-pager-link">2</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/kliningovye-uslugi/poslestroitelnaya-uborka/" data-slide-index="2" class="bx-pager-link">3</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/kliningovye-uslugi/ximchistka-kovrov-i-mebeli/" data-slide-index="3" class="bx-pager-link">4</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/kliningovye-uslugi/myte-okon-i-fasadov/" data-slide-index="4" class="bx-pager-link">5</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/kliningovye-uslugi/myte-okon-i-fasadov/" data-slide-index="5" class="bx-pager-link">6</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/kliningovye-uslugi/glubokaya-chistka-i-polirovka-napolnyx-pokrytij/" data-slide-index="6" class="bx-pager-link">7</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/arenda-gryazezashhitnyx-pokrytij/" data-slide-index="7" class="bx-pager-link">8</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/catalog/biznes-aromatizaciya/" data-slide-index="8" class="bx-pager-link">9</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/catalog/gigienicheskaya-produkcia-dlya-tualetnykh-komnat/" data-slide-index="9" class="bx-pager-link">10</a>
        </div>
        <div class="bx-pager-item flex-pager-item">
            <a href="/kliningovye-uslugi/dezinfekciya-pomeshhenij/" data-slide-index="10" class="bx-pager-link">10</a>
        </div>
    </div>
</div> -->


<div id="bannerhome1">
    <div class="flex-offer">
        <div class="flex-offer-item">
            <a href="/kliningovye-uslugi/generalnaya-uborka/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_1.png" alt="">
                <span>Генеральная уборка</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/kliningovye-uslugi/autsorsing/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_2.png" alt="">
                <span>Аутсорсинг</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/kliningovye-uslugi/poslestroitelnaya-uborka/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_3.png" alt="">
                <span>Уборка после ремонта</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/kliningovye-uslugi/ximchistka-kovrov-i-mebeli/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_4.png" alt="">
                <span>Химчистка ковров  и мягкой мебели</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/kliningovye-uslugi/myte-okon-i-fasadov/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_5.png" alt="">
                <span>Мытье окон и фасадов</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/kliningovye-uslugi/glubokaya-chistka-i-polirovka-napolnyx-pokrytij/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_6.png" alt="">
                <span>ГЛУБОКАЯ ЧИСТКА ПОЛОВ</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/kliningovye-uslugi/uborka-territorii/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_7.png" alt="">
                <span>Уборка территории</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/catalog/biznes-aromatizaciya/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_8.png" alt="">
                <span>БИЗНЕС-АРОМАТИЗАЦИЯ</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/catalog/gigienicheskaya-produkcia-dlya-tualetnykh-komnat/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_9.png" alt="">
                <span>ОСНАЩЕНИЕ туалетных КОМНАТ</span>
            </a>
        </div>
        <div class="flex-offer-item">
            <a href="/kliningovye-uslugi/dezinfekciya-pomeshhenij/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/offer/img_10.png" alt="">
                <span>ДЕЗИНФЕКЦИЯ ПОМЕЩЕНИЙ</span>
            </a>
        </div>
    </div>
</div>

                <!--ul>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/generalnaya-uborka/">Генеральную и поддерживающую уборку</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/autsorsing/">Аутсорсинг коммерческих объектов Твери</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/poslestroitelnaya-uborka/">Уборка после ремонта и строительства</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/ximchistka-kovrov-i-mebeli/">Химчистка ковров и мягкой мебели</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/myte-okon-i-fasadov/">Мытье окон, витрин, зеркал, вывесок, фасадов зданий</a></li>
                    <li><a href="http://www.uborka-tver.ru/kliningovye-uslugi/glubokaya-chistka-i-polirovka-napolnyx-pokrytij/">Очищение и полировка поверхностей из натурального камня</a></li>
                    <li><a href="http://www.uborka-tver.ru/arenda-gryazezashhitnyx-pokrytij/">Обслуживание грязезащитных покрытий</a></li>
                    <li><a href="http://www.uborka-tver.ru/catalog/nejtralizaciya-nepriyatnyx-zapaxov/">Устранение неприятных запахов</a>, <a href="http://www.uborka-tver.ru/catalog/biznes-aromatizaciya/">бизнес-ароматизация</a></li>
                    <li><a href="https://www.uborka-tver.ru/catalog/gigienicheskaya-produkcia-dlya-tualetnykh-komnat/">Поставка оборудования и расходных материалов для туалетных комнат</a></li>
                    <li><a href="https://www.uborka-tver.ru/kliningovye-uslugi/uslugi-professionalnoj-prachechnoj/">Услуги прачечной</a></li>
                </ul-->
            </div>
<p><br><br></p>
            <div class="grid_12">
<br>
<br>
<br>
                <h1>Клининговая компания Чистый дом</h1>
                <p>Клининговая компания «Чистый Дом» — команда профессионалов, которая более 12 лет оказывает услуги по уборке в Твери и Тверской области. Мы ежедневно даем нашим клиентам возможность сосредоточиться на своем бизнесе или семье и не отвлекаться на домашние дела и уборку.</p>
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