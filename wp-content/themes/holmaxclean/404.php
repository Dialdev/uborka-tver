<?php
/**
 * dranikss
 * 404
 * http://dranikss.ru/
 * @package WordPress
 * @subpackage dranikss
 */
get_header(); // Подключаем хедер ?> 
<!-- CONTENT : begin -->
<div id="content-page" class="page-404">
    <div class="container_12">
        <div class="grid_12">
            
            <img src="/wp-content/themes/holmaxclean/images/404-bg.jpg" alt="">

            <div class="text">
                <h1>Страница не найдена</h1>
                
                <p>Страница, на которую вы пытаетесь перейти не найдена.<br>Возможно, вы ввели неправильный адрес, или страница<br>была удалена.</p>
                
                <p>Перейти на <a href="/">главную страницу</a>.</p>
            </div>

        </div>
    </div>
</div>
<!-- CONTENT : end -->


<?php// get_sidebar();  // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>