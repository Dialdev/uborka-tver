<?php
/**
 * dranikss
 * Шаблон заголовков
 * @package WordPress
 * @subpackage dranikss
 */
?>
<?php
/*
 * HTML-минимизация
 */
ob_start();
?>
<!DOCTYPE html>
<html class="no-js">
    <head>

        <meta name="google-site-verification" content="wouFnWNVl2ZUpukVCpUU5HvtzuH5hq6iu2QMQfPBOeY" />

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?> <?php wp_title("&mdash;"); ?></title>


        <!-- Mobile Specific Metas -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <meta name="format-detection" content="telephone=no">

        <meta name='yandex-verification' content='676ad238c060a7cc' />
        <meta name='yandex-verification' content='4ccf9602bee32374' />

        <?php if (is_page('roboty-pylesosy')): ?>
            <link rel="canonical" href="http://www.uborka-tver.ru/catalog/roboty-pylesosy/"/>
        <?php endif ?>

        <?php
        wp_head(); // Необходимо для работы плагинов и функционала wp
        ?>

        <meta name="mailru-domain" content="MuLyMZVI9YQIIWNQ" />
        <!-- Global site tag (gtag.js) - Google Ads: 792055308 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-792055308"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'AW-792055308');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '287732648494270');
            fbq('track', 'PageView');
        </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=287732648494270&ev=PageView&noscript=1"
                   /></noscript>
    <!-- End Facebook Pixel Code -->

    <script>
        fbq('track', 'ViewContent');
    </script>
    <script type="text/javascript">!function () {
        var t = document.createElement("script");
        t.type = "text/javascript", t.async = !0, t.src = "https://vk.com/js/api/openapi.js?159", t.onload = function () {
            VK.Retargeting.Init("VK-RTRG-278930-2qgFB"), VK.Retargeting.Hit()
        }, document.head.appendChild(t)
    }();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-278930-2qgFB" style="position:fixed; left:-999px;" alt=""/></noscript> 


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129065693-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-129065693-1');
    </script>

</head>
<body>
    <script>/*insert_event_code_here;*/</script>
    <?php // print_r($_SESSION); ?>
    <!-- HEADER : begin -->
    <div id="header-page">

                 <!-- top line : begin -->
            <div class="top-line">
                <div class="burger container_12">

                    <!-- logotype -->
                    <div class="grid_1 grid_mob_3 mob_menu_block">
                        <div class="burger--icon"><span></span><span></span><span></span>
                        </div><span class="burger--caption">меню</span>            
                    </div>

                    <!-- search : begin -->
                    <div class="grid_2 grid_mob_6 mob_logo_block">
                        <a href="/" title="" class="logo">
                        </a>
                    </div>
                    <!-- search : end -->

                    <!-- bucket : begin -->
                    <div class="grid_4 grid_mob_3 mobile-cart mob_cart">

                        <?php
                        if (!is_page('cart')) {
                            get_sidebar('cart'); /* sidebar-right.php */
                        }
                        ?>

                    </div>
                    <!-- bucket : end -->




                </div>
                <div class="container_12 first_container">

                    <!-- left column : begin -->
                    <nav class="grid_8 fixed_menu">

                        <ul class="clearfix menu_items">
                            <li><a href="/" title="">Главная</a></li>
                            <li id="catalog_menu_item">
                                <!-- class="dropdown" -->
                                <a href="/catalog/" title="">Магазин</a>
                                <!-- second lvl -->
                                <ul>
                                    <li><a href="/catalog/kliningovoe-oborudovanie/" title="Клининговое оборудование"> Клининговое оборудование</a></li>
                                    <li><a href="/catalog/moyushhie-sredstva/" title="Моющие средства">Моющие средства</a></li>
                                    <li><a href="/catalog/inventar-dlya-uborki/" title="Инвентарь для уборки">Инвентарь для уборки</a></li>
                                    <li><a href="/catalog/protirochnyj-material/" title="Протирочный материал">Протирочный материал</a></li>
                                    <li><a href="/catalog/dispensery-i-rasxodnye-materialy/" title="Диспенсеры и расходные материалы">Диспенсеры и расходные материалы</a></li>
                                    <li><a href="/catalog/produkciya-tork/" title="Гигиеническая продукция TORK">Гигиеническая продукция TORK</a></li>
                                    <li><a href="/catalog/biznes-aromatizaciya/" title="Бизнес ароматизация">Бизнес ароматизация</a></li>
                                    <li><a href="/catalog/nejtralizaciya-nepriyatnyx-zapaxov/" title="Нейтрализация неприятных запахов">Нейтрализация неприятных запахов</a></li>
                                    <li><a href="/catalog/urny-i-pepelnicy/" title="Урны и пепельницы">Урны и пепельницы</a></li>
                                    <li><a href="/sredstva-zashhity-ot-nasekomyx-chistyj-dom/" title="Средства защиты от насекомых «Чистый Дом»">Средства защиты от насекомых «Чистый Дом»</a></li>
                             
                                    <li><a href="/roboty-pylesosy/" title="Роботы пылесосы">Роботы пылесосы</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" id="services_menu_item">
                                <a href="#" title="">Услуги</a>
                                <!-- second lvl -->
                                <ul>
                                    <li><a href="/kliningovye-uslugi/" title="Клининговые услуги">Клининговые услуги</a></li>
                                    <li><a href="/arenda-gryazezashhitnyx-pokrytij/" title="Аренда грязезащитных покрытий">Аренда грязезащитных покрытий</a></li>
                                    <li><a href="/servisnyj-centr/" title="Сервисный центр iRobot">Сервисный центр iRobot</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" id="company_menu_item">
                                <a href="#" title="">Компания</a>
                                <!-- second lvl -->
                                <ul>
                                    <li><a href="/o-kompanii/" title="">О компании</a></li>
                                    <li><a href="/vakansii/" title="">Вакансии</a></li>

                                    <li><a href="/stati/" title="">Статьи</a></li>
                                </ul>
                            </li>
                            <li><a href="/ceny/" title="">Цены</a></li>
                            <li><a href="/dostavka/" title="">Доставка</a></li>
                            <li><a href="/otzyvy-o-kompanii/" title="">Отзывы</a></li>
                            <li><a href="/contacts/" title="">Контакты</a></li>
                            <!-- <li class="sale__april"><a href="/rubrika/akciya/" title="">Акции</a></li> -->
                            <? if (date('d') < 8 && date('m') == 4 && date('Y') == 2016): ?>
                            <? endif; ?>
                        </ul>

                    </nav>
                    <!-- left column : end -->

                    <div class="grid_1 grid_mob_6 none">

                        <div>

                            <a class="kk" href="/kalkulyator/"><img src="<?= get_template_directory_uri(); ?>/images/calc.png" alt="Калькулятор"><span>Калькулятор<br>уборки</span></a>
                        </div>

                    </div>

                    <!-- right column : begin -->
                    <div class="grid_3 grid_mob_6">

                        <div>

                            <a href="tel:+7-4822-57-80-57"><span>+7 (4822) 57-80-57</span></a>   
			 <span>ПН-ЧТ с 9 до 18 | ПТ с 9 до 17</span>

                        </div>

                    </div>
                    <!-- right column : end -->

                </div>
            </div>
            <!-- top line : end -->

        <!-- bottom line : begin -->
        <div class="bottom-line">
            <div class="container_12">

                <!-- logotype -->
                <div class="grid_4 grid_mob_12">
                    <a href="/" title="" class="logo"></a>
                </div>

                <!-- search : begin -->
                <div class="grid_5 grid_mob_12 search">
                    <form action="/" class="new_search">
                        <input autocomplete="off" id="presearch_input" type="text" name="s" placeholder="Поиск товаров" required="" minlength="3" value="<?php echo $_GET['s'] ?>">
                        <input type="hidden" name="post_type" value="product">
                        <button type="submit">Найти</button>
                    </form>
                    <div id="presearch_result">

                    </div>
                    <?php //echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

                </div>
                <!-- search : end -->


<div class="grid_1 grid_mob_6 kalk">

                        <div>

                            <a class="kk" href="/kalkulyator/"><img src="https://www.uborka-tver.ru/wp-content/themes/holmaxclean/images/calc.png" alt="Калькулятор"><span>Калькулятор<br>уборки</span></a>
                        </div>

                    </div>



               <!-- bucket : begin -->
                    <div class="grid_3 grid_mob_0 mb15 ">

                        <?php
                        if (!is_page('cart')) {
                            get_sidebar('cartmobile'); /* sidebar-right.php */
                        }
                        ?>

                    </div>
                    <!-- bucket : end -->


            </div>
        </div>
        <!-- bottom line : end -->

    </div>
    <!-- HEADER : end -->


    <? if (is_page(2) && date('d') < 8 && date('m') == 4 && date('Y') == 2016): ?>

        <div class="modal__sale" id="modal__sale">
            <div>
                <a href="#fake" onclick="modal_close()" class="modal_close"></a>
                <img src="<?= get_template_directory_uri(); ?>/images/sale.jpg" alt="Скидка 8%">
                <a href="/catalog/roboty-pylesosy/" class="modal_more"></a>
            </div>
        </div>

        <script type="text/javascript">
            function modal_close() {
                document.getElementById("modal__sale").style.display = "none";
            }
        </script>

    <? endif; ?>