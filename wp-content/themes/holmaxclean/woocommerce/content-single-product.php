<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

global $product, $post;

/* print_r( $product );
  print_r( $post );
 */
?>
<meta name="test123" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
<?php
/**
 * woocommerce_before_single_product hook
 *
 * @hooked wc_print_notices - 10
 */
//do_action( 'woocommerce_before_single_product' );

if (post_password_required()) {
//echo get_the_password_form();
    return;
}

$attachment_ids = $product->get_gallery_attachment_ids();

if ($attachment_ids) {
    $image_first_link = wp_get_attachment_url($attachment_ids[0]);
    $image_first = '';
    $i = 0;
    foreach ($attachment_ids as $attachment_id) {
        $i++;

        $image_gallery[] = '<div class="item">
                                    <a href="' . wp_get_attachment_url($attachment_id) . '" ' . ( $i == 1 ? 'class="active fancybox"' : 'class="fancybox"') . ' rel="one-item-gallery">
                                        ' . wp_get_attachment_image($attachment_id, apply_filters('single_product_small_thumbnail_size', 'shop_thumbnail')) . '
                                    </a>
                                </div>';
    }
} else {
    
}
?>
<input class="back_button" type="button" onclick="history.back();" value="Назад"/>
<div class="one-item-page">
    <!-- product detail : begin -->
    <div class="product-detail" >
        <div class="container_12">

            <div class="grid_12 visible_960">
                <div class="information">
                    <?/*?><h1><?php the_title(); ?></h1><?*/?>
                    <div class="clearfix">
                        <div><?php the_price($product->id); ?>
                        </div>
                        <div></div>
                    </div><?php
                    $custprice = get_field('custprice');
                    $custpricetitle = get_field('custpricetitle');

                    if (!empty($custprice)) {
                        ?>

                        <div class="singlecustprice">
                            <div>
                                <?
                                echo $custprice . '<span class="ruble">o</span>';

                                if (!empty($custpricetitle)) {
                                    echo " (" . $custpricetitle . ")";
                                }
                                ?>
                            </div>                        
                            <div></div>

                        <?php }
                        ?>
                        <br clear="all"/>
                    </div>
                </div>
            </div>

            <!-- left column (image slider) : begin -->
            <div class="grid_6 slider-wrapper">

                <!-- image -->
                <div class="top-block">
                    <div class="img-wrapper">
                        <?php echo get_post_meta($product->id, 'goods_logo', true) ? '<div style="background: url(' . get_post_meta($product->id, 'goods_logo', true) . ') top right no-repeat;width:auto;max-width: 400px;height: 100px;margin-left: -2px;position: absolute;"></div>' : ''; ?>
                        <a href="<?php echo $image_first_link; ?>" class="fancybox" title="" rel="one-item-gallery"></a>
                    </div>
                </div>

                <!-- controls : begin-->
                <div class="controls">
                    <div class="thumbnails-wrapper">

                        <?php echo isset($image_gallery) ? implode('', $image_gallery) : ''; ?>

                    </div>
                </div>
                <!-- controls : end-->

            </div>
            <!-- left column (image slider) : end -->


            <!-- right column (information) : begin -->
            <div class="grid_6">
                <div class="information">

                    <h1 class="hidden_960"><?php the_title(); ?></h1>

                    <?php  if (get_post_meta($product->id, '_sale_price', true)): ?>

                        <div class="clearfix hidden_960">
                             <div class="price--old"><?php echo number_format((double)get_post_meta($product->id, '_regular_price', true), 0, '', ' '); ?> <span class="ruble">o</span></div> 
                            <div><div class="price--new"><?php the_price($product->id); ?></div></div>
                            
                            
                            <div class="inputs-and-soc-services clearfix basket_top">
                                <div clss="basket_top">
                                
                                    <!-- form : begin -->
                                    <!-- <form action="">
                                        <div class="number clearfix">
                                            <div class="input-wrapper test">
                                                <input type="text" value="1">
                                                <div class="controls">
                                                    <span class="plus"></span>
                                                    <span class="minus"></span>
                                                </div>
                                                <?php
                                                echo apply_filters('woocommerce_loop_add_to_cart_link', sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="button sub-cart %s product_type_%s">В корзину</a>', esc_url($product->add_to_cart_url()), esc_attr($product->id), esc_attr($product->get_sku()), $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '', esc_attr($product->product_type)
                                                        ), $product);
                                                ?>
                                            </div>
                                        </div>
                                    </form> -->
                                    <!-- form : end -->
                                
                            </div>
                            </div>
                            
                        </div>
                   
                        

                        <div class="singlecustprice hidden_960">
                            <?php
                            $custprice = get_field('custprice');
                            $custpricetitle = get_field('custpricetitle');

                            if (!empty($custprice)) {
                                ?>
                                <div>
                                    <?php
                                    echo $custprice . '<span class="ruble">o</span>';

                                    if (!empty($custpricetitle)) {
                                        echo " (" . $custpricetitle . ")";
                                    }
                                    ?>
                                </div>
                                <div></div>
                                <br clear="all"/>
                            <?php } ?>
                        </div>

                    <?php else: ?>
                        <div class="clearfix hidden_960">
                            <div><?php the_price($product->id); ?></div>
                            <div></div>                            
                            <?php
                            if ($_SERVER['REQUEST_URI'] == '/catalog/tork-peakserve-dispenser-dlya-polotenec-s-nepreryvnoj-podachej/' ||
                                    $_SERVER['REQUEST_URI'] == '/catalog/tork-peakserve-dispenser-dlya-polotenec-s-nepreryvnoj-podachej-kopirovat/'):
                                ?>    
                                <div style="position: relative;" class="hidden_960">
                                    <span style=" position: absolute; left: 0px; top: 49px; font-size: 12px; font-style: italic">
                                        Диспенсерная политика*
                                    </span>
                                </div>
                            <?php endif ?>
                        </div> 



                        <div class="singlecustprice hidden_960">
                            <?php
                            $custprice = get_field('custprice');
                            $custpricetitle = get_field('custpricetitle');

                            if (!empty($custprice)) {
                                ?>
                                <div>
                                    <?php
                                    echo $custprice . '<span class="ruble">o</span>';

                                    if (!empty($custpricetitle)) {
                                        echo " (" . $custpricetitle . ")";
                                    }
                                    ?>

                                </div>
                                <div></div>
                                <br clear="all"/> <?php
                            }
                            ?>
                        </div>

                    <?php endif;  ?>
                    <div>
                        <?php echo $post->post_content; ?>
                    </div>
                    <a href="#" title="">Посмотреть характеристики</a>
                    <div class="inputs-and-soc-services clearfix">
                        <div>
                            <!-- form : begin -->
                            <form action="">
                                <div class="number clearfix">
                                    <div class="input-wrapper test">
                                        <input type="text" value="1">
                                        <div class="controls">
                                            <span class="plus"></span>
                                            <span class="minus"></span>
                                        </div>
                                        <?php
                                        echo apply_filters('woocommerce_loop_add_to_cart_link', sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="1" class="button sub-cart %s product_type_%s">В корзину</a>', esc_url($product->add_to_cart_url()), esc_attr($product->id), esc_attr($product->get_sku()), $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '', esc_attr($product->product_type)
                                                ), $product);
                                        ?>
                                    </div>
                                </div>
                            </form>
                            <!-- form : end -->
                        </div>
                        <div>
                            <p>Рассказать друзьям</p>
                            <!-- Go to www.addthis.com/dashboard to generate a new set of sharing buttons -->
                            <a href="https://api.addthis.com/oexchange/0.8/forward/vk/offer?url=http%3A%2F%2Fwww.addthis.com&pubid=ra-547304877887d8c5&ct=1&title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/vk.png" border="0" alt="VKontakte"/></a>
                            <a href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=http%3A%2F%2Fwww.addthis.com&pubid=ra-547304877887d8c5&ct=1&title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/facebook.png" border="0" alt="Facebook"/></a>
                            <a href="https://api.addthis.com/oexchange/0.8/forward/mymailru/offer?url=http%3A%2F%2Fwww.addthis.com&pubid=ra-547304877887d8c5&ct=1&title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/mymailru.png" border="0" alt="Mail.ru"/></a>
                            <a href="https://api.addthis.com/oexchange/0.8/forward/favorites/offer?url=http%3A%2F%2Fwww.addthis.com&pubid=ra-547304877887d8c5&ct=1&title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/favorites.png" border="0" alt="Favorites"/></a>
                            <a href="https://www.addthis.com/bookmark.php?source=tbx32nj-1.0&v=300&url=http%3A%2F%2Fwww.addthis.com&pubid=ra-547304877887d8c5&ct=1&title=AddThis%20-%20Get%20likes%2C%20get%20shares%2C%20get%20followers&pco=tbxnj-1.0" target="_blank"><img src="https://cache.addthiscdn.com/icons/v2/thumbs/32x32/addthis.png" border="0" alt="Addthis"/></a>
                        </div>
                    </div>

                
            </div>
            <!-- right column (information) : end -->

        </div>
    </div>
    <!-- product detail : end -->
    <?php /* Разбираем вкладки */
    ?>
    <!-- more about product : begin -->
    <div class="more-about-product">
        <div class="container_12">
            <div class="grid_12">

                <?php
                $args = array(
                    'post_id' => $product->id, // правильно post_id, а не post_ID
                    'number' => 1
                );
                $comments = get_comments($args);
                ?>


                <?php
                $x_b = get_post_meta($product->id, 'goods_content', true);
                $flagss = $x_b ? true : false;

                $flagss = $comments ? false : $flagss;
                ?>
                <?php $video = get_post_meta($product->id, 'goods_video', true); ?>


                <!-- tabs titles : begin -->



                <div class="tabs-titles">

                    <?php if ($comments): ?>
                        <div data-tab="about-seria" class="active">О серии</div>
                    <?php endif; ?>

                    <?php if ($flagss): ?>
                        <div data-tab="about" class="active">
                            О серии <?php echo get_post_meta($product->id, 'goods_series', true) ? get_post_meta($product->id, 'goods_series', true) : ''; ?>
                        </div>
                    <?php endif; ?>

                    <div data-tab="characteristics" <?php echo $flagss ? '' : 'class="active"'; ?>>Характеристики</div>

                    <?php if ($video): ?>
                        <div data-tab="video">Видео</div>
                    <?php endif; ?>
						<div data-tab="delivery">Доставка</div>
                    <?php echo $post->post_excerpt ? '<div data-tab="whats-in-box">Что в коробке</div>' : ''; ?>






                </div>
                <!-- tabs titles : end -->

                <!-- tabs content : begin -->
                <div class="tabs-content">
                    <?php if ($flagss): ?>
                        <div data-tab="about" class="clearfix active">
                            <?php echo get_post_meta($product->id, 'goods_content', true) ? get_post_meta($product->id, 'goods_content', true) : ''; ?>
                        </div>
                    <?php endif; ?>
					
					<div data-tab="delivery">
					Информация о доставке:
					<ul>
						<li>Доставка курьером в пределах г. Тверь с понедельника по пятницу.</li>
						<li>При заказе от 1800 рублей доставка осуществляется бесплатно. При заказе до 1800 рублей стоимость доставки — 500 рублей.</li>
						<li>Доставка по России осуществляется транспортными компаниями и оплачивается получателем.</li>
						<li>Возможно получение товара клиентом в магазине “Чистый Дом” по адресу: г. Тверь, ул. Коминтерна, 22.</li>
					</ul>
					</div>

                    <div data-tab="characteristics" <?php echo $flagss ? '' : 'class="clearfix active"'; ?>>

                        <!-- left -->
                        <div>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_proizvoditel", true);
                            echo $x_a ? '<p class="clearfix"><span>Производитель: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_tip_dvigatelya", true);
                            echo $x_a ? '<p class="clearfix"><span>Тип двигателя: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_moschnost_dvigatelya_schetki", true);
                            echo $x_a ? '<p class="clearfix"><span>Мощность двигателя щетки: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_moschnost_dvigatelya_pilesosa", true);
                            echo $x_a ? '<p class="clearfix"><span>Мощность двигателя пылесоса: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, 'tech_pitanie', true);
                            echo $x_a ? '<p class="clearfix"><span>Питание: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_deka", true);
                            echo $x_a ? '<p class="clearfix"><span>Дека: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, 'tech_shirina_zahvata', true);
                            echo $x_a ? '<p class="clearfix"><span>Ширина захвата щетки: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <!-- вставить новые -->
                            <?php
                            $x_a = get_post_meta($product->id, "tech_skorost_vrascheniya", true);
                            echo $x_a ? '<p class="clearfix"><span>Скорость вращения: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_sistema", true);
                            echo $x_a ? '<p class="clearfix"><span>Система: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_moschnost_dvigatelya", true);
                            echo $x_a ? '<p class="clearfix"><span>Мощность двигателя: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_moschnost_vsasivaniya", true);
                            echo $x_a ? '<p class="clearfix"><span>Мощность всасывания: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <!-- вставить новые -->
                            <?php
                            $x_a = get_post_meta($product->id, 'tech_vremya', true);
                            echo $x_a ? '<p class="clearfix"><span>Время работы: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, 'tech_proizvoditelnost', true);
                            echo $x_a ? '<p class="clearfix"><span>Производительность: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_uroven_podema", true);
                            echo $x_a ? '<p class="clearfix"><span>Уровень подъема: </span><span>' . $x_a . '</span></p>' : '';
                            ?>

                            <?php
                            $x_a = get_post_meta($product->id, "tech_vozdushniy_potok", true);
                            echo $x_a ? '<p class="clearfix"><span>Воздушный поток: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_sila_vsasivaniya", true);
                            echo $x_a ? '<p class="clearfix"><span>Сила всасывания: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_pompa", true);
                            echo $x_a ? '<p class="clearfix"><span>Помпа: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem_baka_pri_suxoi_chistke", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем бака при сухой чистке: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem_baka_dlya_gryznoy_vody", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем бака для грязной воды: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem_baka_dlya_moyschego_sredstva", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем бака для моющего средства: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_uroven_shuma", true);
                            echo $x_a ? '<p class="clearfix"><span>Уровень шума: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem_baka", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем бака: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_diapazon_chistki", true);
                            echo $x_a ? '<p class="clearfix"><span>Диапазон чистки: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, 'tech_ves', true);
                            echo $x_a ? '<p class="clearfix"><span>Вес: </span><span>' . $x_a . '</span></p>' : '';
                            ?>

                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_glubina", true);
                            echo $x_a ? '<p class="clearfix"><span>Глубина: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, 'tech_dlina', true);
                            echo $x_a ? '<p class="clearfix"><span>Длина: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_visota", true);
                            echo $x_a ? '<p class="clearfix"><span>Высота: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_shirina", true);
                            echo $x_a ? '<p class="clearfix"><span>Ширина: </span><span>' . $x_a . '</span></p>' : '';
                            ?>

                            <?php
                            $x_a = get_post_meta($product->id, "tech_razmer", true);
                            echo $x_a ? '<p class="clearfix"><span>Размер: </span><span>' . $x_a . '</span></p>' : '';
                            ?>

                            <?php
                            $x_a = get_post_meta($product->id, "tech_sloynost", true);
                            echo $x_a ? '<p class="clearfix"><span>Слойность: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_shirina_rulona", true);
                            echo $x_a ? '<p class="clearfix"><span>Ширина рулона: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_dlina_rulona", true);
                            echo $x_a ? '<p class="clearfix"><span>Длина рулона: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_diametr_rulona", true);
                            echo $x_a ? '<p class="clearfix"><span>Диаметр рулона: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_vnutrenniy_diametr_rulona", true);
                            echo $x_a ? '<p class="clearfix"><span>Внутренний диаметр втулки: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_kolichestvo_listov", true);
                            echo $x_a ? '<p class="clearfix"><span>Количество листов: </span><span>' . $x_a . '</span></p>' : '';
                            ?>







                            <?php
                            $x_a = get_post_meta($product->id, 'tech_schetki', true);
                            echo $x_a ? '<p class="clearfix"><span>Щетки: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, 'tech_vsasivanie', true);
                            echo $x_a ? '<p class="clearfix"><span>Двигатель всасывания: </span><span>' . $x_a . '</span></p>' : '';
                            ?>

                            <?php
                            $x_a = get_post_meta($product->id, 'tech_scorost', true);
                            echo $x_a ? '<p class="clearfix"><span>Скорость вращения: </span><span>' . $x_a . '</span></p>' : '';
                            ?>

                            <?php
                            $x_a = get_post_meta($product->id, 'tech_emkost', true);
                            echo $x_a ? '<p class="clearfix"><span>Емкость бака (чистая/отработан. вода): </span><span>' . $x_a . '</span></p>' : '';
                            ?>

                            <?php
                            $x_a = get_post_meta($product->id, 'tech_gabariti', true);
                            echo $x_a ? '<p class="clearfix"><span>Габариты: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem_vpitivaniya", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем впитывания: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_diametr_pada", true);
                            echo $x_a ? '<p class="clearfix"><span>Диаметр пада: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_razmer_kolesnoy_bazi", true);
                            echo $x_a ? '<p class="clearfix"><span>Размер колесной базы: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem_veder_dlya_vodi", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем ведер для воды: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_cathegory", true);
                            echo $x_a ? '<p class="clearfix"><span>Ктегория: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_intensivnost_aromata", true);
                            echo $x_a ? '<p class="clearfix"><span>Интенсивнойсть аромата: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_recomenduemie_pomeweniya", true);
                            echo $x_a ? '<p class="clearfix"><span>Рекомендуемые помещения: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_sostav_aromata", true);
                            echo $x_a ? '<p class="clearfix"><span>Состав аромата: </span><span>' . $x_a . '</span></p>' : '';
                            ?>


                            <?php
                            $x_a = get_post_meta($product->id, "tech_tcvet", true);
                            echo $x_a ? '<p class="clearfix"><span>Цвет: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_diametr", true);
                            echo $x_a ? '<p class="clearfix"><span>Диаметр: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_material", true);
                            echo $x_a ? '<p class="clearfix"><span>Материал: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_psh", true);
                            echo $x_a ? '<p class="clearfix"><span>pH: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_tolschina", true);
                            echo $x_a ? '<p class="clearfix"><span>Толщина: </span><span>' . $x_a . '</span></p>' : '';
                            ?>


                            <!-- 2017 -->
                            <?php
                            $x_a = get_post_meta($product->id, "tech_razmer_polok", true);
                            echo $x_a ? '<p class="clearfix"><span>Размер полок: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem_meshka", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем мешка: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_obem_meshkov", true);
                            echo $x_a ? '<p class="clearfix"><span>Объем мешков: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_material_meshkov", true);
                            echo $x_a ? '<p class="clearfix"><span>Материал мешков: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_diametr_koles", true);
                            echo $x_a ? '<p class="clearfix"><span>Диаметр колес: </span><span>' . $x_a . '</span></p>' : '';
                            ?>
                            <?php
                            $x_a = get_post_meta($product->id, "tech_osnovanie", true);
                            echo $x_a ? '<p class="clearfix"><span>Основание: </span><span>' . $x_a . '</span></p>' : '';
                            ?>




                        </div>



                        <!-- right -->

                    </div>


                    <?php if ($video): ?>
                        <div data-tab="video">
                            <?php echo $video; ?>
                        </div>
                    <?php endif; ?>

                    <div data-tab="whats-in-box">
                        <?php $post->post_excerpt ? the_excerpt() : ''; ?>
                    </div>

                    <div data-tab="about-seria">
                        <?php
                        foreach ($comments as $comment) {
                            echo $comment->comment_content;
                        }
                        ?>
                    </div>


                </div>
                <!-- tabs content : end -->

            </div>
        </div>
    </div>
    <!-- more about product : end -->

    <!-- similar products : begin -->
    <div class="similar-products">

        <div class="container_12">
            <div class="grid_12">

                <!-- subtitle -->
                <div class="subtitle">
                    <?php
                    $x_c = get_post_meta($product->id, "rasxodnie_materiali", true);
                    echo $x_c ? 'Расходные материалы' : 'Сопутствующие товары';
                    ?>
                </div>


                <div class="owl-carousel similar-products-carousel">
                    <?php woocommerce_upsell_display(15, 1); ?><?php //echo do_shortcode('[related_products per_page="12"]');    ?>
                </div>
            </div>
            <!-- carousel : end -->



        </div>
    </div>

</div>
<!-- similar products : end -->




<?php
$similar = get_field('products');

if (count($similar)) {

    $ids = array();

    if($similar){
        foreach ($similar as $prod)
            $ids[] = $prod->ID;
    }
    
    if (count($ids)) {
        $args = array(
            'post_type' => 'product',
            'ignore_sticky_posts' => 1,
            'no_found_rows' => 1,
            'post__in' => $ids,
            'post__not_in' => array($product->id),
        );

        $products = new WP_Query($args);


        if ($products->have_posts()) :
            ?>

            <!-- similar products : begin -->
            <div class="another-products">

                <div class="container_12">
                    <div class="grid_12">

                        <!-- subtitle -->
                        <div class="subtitle">
                            <?php
                            echo "Альтернативные товары:";
                            ?>
                        </div>

                        <!-- carousel : begin -->
                        <div class="owl-carousel another-products-carousel">


                            <?php while ($products->have_posts()) : $products->the_post(); ?>
                                <?php wc_get_template_part('content', 'product'); ?>
                            <?php endwhile; // end of the loop.    ?>


                        </div>
                        <!-- carousel : end -->



                    </div>
                </div>

            </div>

            <?php
        endif;

        wp_reset_postdata();
    }
}
?>


<!-- similar products : end -->
</div>

<?php do_action('woocommerce_after_single_product'); ?>
