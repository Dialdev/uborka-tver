<?php dynamic_sidebar('service'); ?>


<?if(!is_page(3678)):?>

<h2>Схема сотрудничества:</h2>

<ol>
    <li>Обращение клиента <?php echo get_post_meta($post->ID, 'tz_services', true) ? '(<a href="' . get_post_meta($post->ID, 'tz_services', true) . '" title="техническое задание">техническое задание</a>)' : ''; ?></li>
    <li>Выезд специалиста на объект</li>
    <?php if ($post->ID == 108): ?><li>Предварительная калькуляция стоимости услуг</li><?php endif; ?>
    <li>Обсуждение деталей</li>
    <?php if ($post->ID == 108): ?><li>Подготовка и подписание договора</li><?php endif; ?>
    <li>Начало сотрудничества</li>
</ol>

<?endif;?>


<?php if ($post->ID == 108): ?><p><i>При взаимной заинтересованности обеих сторон весь<br>процесс занимает не больше недели!</i></p><?php endif; ?>

<?php if (get_post_meta($post->ID, 'price_services', true)): ?>
    <!-- pdf : begin -->
    <div class="pdf clearfix">
        <a href="<?php echo get_post_meta($post->ID, 'price_services', true) ?>" title="Скачать прайс-лист" target="_blank"></a>
        <div>
            <a href="<?php echo get_post_meta($post->ID, 'price_services', true) ?>" target="_blank" title="Скачать прайс-лист">Скачать прайс-лист</a>
            <span><?php echo '(2150,4 кб)*.pdf'; ?></span>
        </div>
    </div>
    <!-- pdf : end -->
<?php endif; ?>
<p>&nbsp;</p>
<h2>Свяжитесь с нами:</h2>

<p class="contacts">
    Телефон:<a href="tel:(4822) 57-80-57">+7 (4822) 57-80-57</a><br>
    Email: <a href="mailto:chistiydom.tver@mail.ru">chistiydom.tver@mail.ru</a><br>
    <a href="#modal-window-feedback" class="fancybox green-button">Заказать услугу</a>
</p>
<?php // print_r( $WC()->cart ); ?>
