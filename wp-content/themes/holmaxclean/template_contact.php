<?php
/**
 * Template Name: Контакты
 *
 * Description: контакты
 *
 * Tip: контакты
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
                <li class="current"><a href="#" title="">Контакты</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<!-- MAP : begin -->
<div id="contacts-map">

    <!-- map : begin -->
    <div class="map" id="map">

    </div>
    <div class="marker"></div>
    <!-- map : end -->

    <!-- form : begin -->
    <form id="search_route">
        <div class="container_12">
            <div class="grid_12">
                <div class="wrapper clearfix">
                    <input id="start" type="text" placeholder="Введите ваш адрес для расчета маршрута">
                    <input id="end" type="hidden" value="г. Тверь, ул. Коминтерна, д. 22">
                    <input type="submit" value="Проложить">
                </div>
            </div>
        </div>
    </form>
    <!-- form : end -->

</div>
<!-- MAP : end -->

<!-- CONTENT : begin -->
<div id="content-page" class="contacts">
    <div class="container_12">

        <!-- left column (address) : begin -->
        <address class="grid_6">

            <!-- title -->
            <h1>Контактная информация</h1>

            <!-- address -->
	        <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
                <div>

                <?php the_content();?>

                <p><a href="http://www.uborka-tver.ru/wp-content/uploads/2014/12/central__full.jpeg" class="fancybox"><img src="http://www.uborka-tver.ru/wp-content/uploads/2014/12/central.png" alt=""></a></p>
                </div>

			<?php endwhile; // Конец цикла ?>

            <!-- tel/email : begin -->
            <!-- <div>
                <p class="clearfix">
                    <span>Телефон/факс: </span>
                    <span><?php echo get_post_meta( $post->ID, 'tel-fax', true); ?></span>
                </p>
                <p class="clearfix">
                    <span>Отдел клининга: </span>
                    <span><?php echo get_post_meta( $post->ID, 'mcanal', true); ?></span>
                </p>
                <p class="clearfix">
                    <span>Продажа уборочного оборудования: </span>
                    <span><?php echo get_post_meta( $post->ID, 'mobile', true); ?></span>
                </p>
                <p class="clearfix">
                    <span>Продажа iRobot: </span>
                    <span><?php echo get_post_meta( $post->ID, 'tel-fax', true); ?>, <?php echo get_post_meta( $post->ID, 'mobile', true); ?></span>
                </p>
                <p class="clearfix">
                    <span>Продажа инвентаря и моющих средств: </span>
                    <span><?php echo get_post_meta( $post->ID, 'dop', true); ?></span>
                </p>
                <p class="clearfix">
                    <span>Эл. почта: </span>
                    <span><a href="mailto:<?php echo get_post_meta( $post->ID, 'email', true); ?>" title=""><?php echo get_post_meta( $post->ID, 'email', true); ?></a></span>
                </p>
            </div> -->
            <!-- tel/email : end -->

            <!-- subtitle -->
            <!-- <h2>Часы работы</h2> -->

            <!-- visiting hours : begin -->
            <!-- <div>
                <p class="clearfix">
                    <span>Понедельник: </span>
                    <span>9:00 &mdash; 18:00</span>
                </p>
                <p class="clearfix">
                    <span>Вторник: </span>
                    <span>9:00 &mdash; 18:00</span>
                </p>
                <p class="clearfix">
                    <span>Среда: </span>
                    <span>9:00 &mdash; 18:00</span>
                </p>
                <p class="clearfix">
                    <span>Четверг: </span>
                    <span>9:00 &mdash; 18:00</span>
                </p>
                <p class="clearfix">
                    <span>Пятница: </span>
                    <span>9:00 &mdash; 17:00</span>
                </p>
                <p class="clearfix">
                    <span><b>Суббота:</b> </span>
                    <span>Выходной</span>
                </p>
                <p class="clearfix">
                    <span><b>Воскресенье:</b> </span>
                    <span>Выходной</span>
                </p>
            </div> -->
            <!-- visiting hours : end -->

        </address>
        <!-- left column (address) : end -->

        <!-- right column (feedback form) : begin -->
        <div class="grid_6 form">


        <address class="grid_6">


            <div style="margin-top:60px;">
                <h2>Магазин роботов-пылесосов iRobot</h2>
                <p class="clearfix">Адрес: г. Тверь, ул. Коминтерна д. 22Б </p>
               <p class="clearfix">Телефон:  <a href="tel:+7-4822-57-80-57">+7 (4822) 57-80-57</a></p>
            </div>


</address>

            <!-- title -->
            <div class="title">Оставьте сообщение</div>

            <!-- form : begin -->
            <form action="" method="post" class="feedback">

                <!-- inputs -->
                <div class="clearfix">
                    <div>
                        <label for="">Имя</label>
                        <input type="text" value="" name="name" id="name" placeholder="" required="">
                    </div>
                    <div>
                        <label for="">Эл. почта/Телефон</label>
                        <input type="text" value="" name="email1" id="email1" placeholder="" required="">
                    </div>
                </div>

                <!-- textarea -->
                <div>
                    <label for="">Сообщение</label>
                    <textarea name="message" id="message" placeholder=""></textarea>
                </div>
            <div>
                <input checked type="checkbox" name="accept" value="" required /> Даю добро на обработку <a href="/politika-konfidencialnosti/" target="_blank">персональных данных</a> и соглашаюсь с <a href="/polzovatelskoe-soglashenie/" target="_blank">пользовательским соглашением</a>
                <br/><br/>
            </div>

				<?php wp_nonce_field( 'ajax-mailsend-nonce', 'security_mailsend' ); ?>
                <!-- button -->
                <input type="submit" name="submit" value="Отправить">

                <!-- status text -->
                <p class="status_mail"></p>

            </form>
            <!-- form : end -->

        </div>
        <!-- right column (feedback form) : end -->

    </div>
</div>
<!-- CONTENT : end -->

<?php get_footer(); ?>