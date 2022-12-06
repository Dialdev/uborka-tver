<?php
/**
 * Template Name: Корзина товаров
 *
 * Description: шаблон корзины товаров
 *
 * Tip: для корзины
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
                <li><a href="/" title="Главная">Главная</a></li>
                <li class="current"><a href="#" title="Корзина">Корзина</a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<!-- CONTENT : begin -->
<div id="content-page" class="basket">
	<?php
        if( $_GET['clear'] == 1){
            WC()->cart->empty_cart();
        }

       	if( isset( $_POST['gocart'] ) && $_POST['fio'] != '' && $_POST['phone'] != '' ){

	       	$available_gateways = WC()->payment_gateways->get_available_payment_gateways();
	       	$payment = $available_gateways['cod'];

			$address = array(
			    'first_name' => $_POST['fio'],
			    'last_name'  => '',
			    'company'    => $_POST['delivery'],
			    'email'      => $_POST['email'],
			    'phone'      => $_POST['phone'],
			    'address_1'  => $_POST['adress'],
			    'address_2'  => '',
			    'city'       => $_POST['city'],
			    'state'      => $_POST['postcode'],
			    'postcode'   => '',
			    'country'    => ''
			);

			$roiComment = '';
			$roiComment .= ' Индекс ' .$_REQUEST['postcode'] . ' Адрес ' . $_REQUEST['adress'] . ' Город '. $_REQUEST['city'];
            $roiComment .= ' Комментарий ' .$_REQUEST['comment'] . ' Способ доставки ' . $_REQUEST['delivery'] ;
            $roiComment .= ' Товары : ';

			$order = wc_create_order();

			foreach ($_POST['products'] as $product) {
				if( $product['id'] != 'undefined' ){
					$order->add_product( get_product( $product['id'] ), $product['count'] ); //(get_product with id and next is for quantity)

				}
			}
            foreach ($order->get_items() as $item_id => $item) {

                $roiComment .=  ' Название: ' . $item['name'] ;
            }


			$order->set_address( $address, 'billing' );
			$order->set_address( $address, 'shipping' );
			$order->set_payment_method( $payment );
			$order->calculate_totals();

			$roiComment .= "\n". ' Сумма ' .$order->get_total();

            $roistatData = array(
                'roistat'          => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
                'key'              => 'MTI0NDM3Ojg0MDAzOjYzYzQyOTQwYzYzYjI0OWM1NjdmNzQwODc0MDczMmUz',
                'title'            => 'Заявка с корзины',
                'name'             => $address['name'],
                'email'            => $address['email'],
                'phone'            => $address['phone'],
                'comment'          => $roiComment,
                'fields'           => array(
                    'OPPORTUNITY' => $order->get_total()
                ),
            );

            file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));



            $order->add_order_note( "Комментарий клиента: " . htmlspecialchars($_POST['comment']), 1 );

            $order->update_status('processing');

            $order->payment_complete();

            WC()->cart->empty_cart();

            $text_error = '';
		} else{
            if( isset( $_POST['gocart'] ) ){
                $text_error = 'Введите данные отмеченные звездочкой!';
            }

        }
	?>

<?php if( !$order->id ): ?>

    <?php if( WC()->cart->get_cart() ): ?>
    <!-- list products : begin -->
    <div class="container_12">
        <div class="grid_12">

   	       <!-- title and clear -->
            <div class="title-and-clear clearfix">
                <h1>Корзина</h1>
                <a href="#" title=""><span>Очистить корзину</span></a>
            </div>

            <!-- table : begin -->
            <table>

                <!-- head : begin -->
                <tr>
                    <th class="img-and-title">Товар</th>
                    <th class="price">Цена</th>
                    <th class="input">Количество</th>
                    <th class="total">Сумма</th>
                </tr>
                <!-- head : end -->
                <!-- content : begin -->
	<?php
    global $product;
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {?>
                <?
                    $attachment_image = get_children( array(
                        'numberposts' => -1,
                        'post_mime_type' => 'image',
                        'post_parent' => $cart_item['product_id'],
                        'post_type' => 'attachment',
                        'order' => 'asc'
                    ) );

                   //print_r($attachment_image->guid);
                ?>
				<tr data-pr-id = "<?php echo $cart_item['product_id']; ?>" data-pr-count = "<?php echo $cart_item['quantity']; ?>" >
                    <!-- image/link, title, description -->
                    <td class="img-and-title">
			             <?//print_r($cart_item)?>
                        <!-- image/link -->
                        <a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>" title="">
                        <?
                            //print_r( $attachment_image );

                            $attachment_image = array_shift( $attachment_image );

                            echo '<img src="'.wp_get_attachment_url( $attachment_image->ID ).'">';

                            //foreach ( $attachment_image as $key => $value ) {}
                        ?>
                        </a>
                        <!-- title, description -->
                        <div>
                            <h2><a style="margin:0; width:auto; height:auto;" href="<?php echo get_permalink( $cart_item['product_id'] ); ?>" title=""><?php echo $cart_item['data']->post->post_title; ?></a></h2>
						<?php
                            $terms = get_the_terms( $cart_item['product_id'], 'product_cat' );
						?>
                            <span><?php echo $terms['0']->name; ?></span>
                        </div>

                    </td>

                    <!-- price -->
                    <td class="price">
                        <div><?php the_price( $cart_item['product_id'] );?></div>
                    </td>

                    <!-- numbers -->
                    <td class="input">
                        <div class="number clearfix">
                            <div class="input-wrapper">
                                <input type="text" value="<?php echo $cart_item['quantity'] ? $cart_item['quantity'] : '1'; ?>">
                                <div class="controls">
                                    <span class="plus"></span>
                                    <span class="minus"></span>
                                </div>
                            </div>
                        </div>
                    </td>

                    <!-- total, button -->
                    <td class="total clearfix">
                        <!-- price -->
                        <div>2 000 <span class="ruble">o</span></div>
                        <!-- button -->
                        <div class="remove" data-url-remove="<?php echo esc_url( WC()->cart->get_remove_url( $cart_item_key ) ); ?>"></div>

                    </td>
                </tr>


	<?php	}

	?>

                <!-- content : end -->

            </table>
            <!-- table : end -->

            <!-- total money : begin -->
            <div class="total-money" data-total-price="">
                <div><span>Итого:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>0 <span class="ruble">o</span></div>
            </div>
            <!-- total money : end -->

        </div>
    </div>
    <!-- list products : end -->

    <!-- ordering : begin -->
    <div class="container_12">

        <!-- left column : begin -->
        <div class="grid_7" style="width:100%">
            <div class="ordering">

                <!-- title -->
                <div class="title">Оформление заказа</div>

                <!-- form : begin -->
                <form action="" class="clearfix" method="post" name="cartcomplite">

                    <div class="cart_block" >
                        <div class="cart_block__wrapper">
                            <div class="cart_block__top">
                                <div class="cart_block__user_info">
                                    <!-- subtitle -->
                                    <div class="subtitle">Данные пользователя</div>

                                    <div class="elem-form">
                                        <label>Ф.И.О<sup>*</sup></label>
                                        <input type="text" name="fio" required="">
                                    </div>

                                    <div class="elem-form">
                                        <label>Эл. почта<sup>*</sup></label>
                                        <input type="email" name="email" required="">
                                    </div>

                                    <div class="elem-form">
                                        <label>Индекс<sup></sup></label>
                                        <input type="text" name="postcode">
                                    </div>

                                    <div class="elem-form">
                                        <label>Адрес доставки<sup></sup></label>
                                        <input type="text" name="adress">
                                    </div>

                                    <div class="elem-form">
                                        <label>Город<sup></sup></label>
                                        <input type="text" name="city">
                                    </div>

                                    <div class="elem-form">
                                        <label>Телефон<sup>*</sup></label>
                                        <input type="text" name="phone" required="">
                                    </div>

                                    <div class="elem-form full">
                                        <label>Комментарии к заказу</label>
                                        <textarea name="comment" id=""></textarea>
                                    </div>
                                </div>
                                <div class="cart_block__delivery_block">
                                    <div class="delivery_block">
                                        <!-- radio : begin -->
                                        <div class="elem-form full radio">

                                            <!-- subtitle -->
                                            <div class="subtitle">Способ доставки</div>

                                            <div class="radio clearfix">

                                                <input id="delivery-by-courier" type="radio" name="delivery" value="Доставка курьером" hidden checked>
                                                <label for="delivery-by-courier">Доставка курьером</label>
                                                <div class="help">
                                                    <div class="hint"><?php echo get_post_meta( $post->ID, 'delivery_kurier', true )?></div>
                                                </div>

                                            </div>
                                            <div class="radio clearfix">

                                                <input id="transport-companies" type="radio" name="delivery" value="Доставка транспортной компанией" hidden>
                                                <label for="transport-companies">Транспортные компании</label>
                                                <div class="help">
                                                    <div class="hint"><?php echo get_post_meta( $post->ID, 'delivery_tk', true )?></div>
                                                </div>

                                            </div>

                                            <!-- <div class="radio clearfix">

                                                <input id="mail-ems" type="radio" name="delivery" value="Доставка почтой EMS" hidden>
                                                <label for="mail-ems">Почта EMS</label>
                                                <div class="help">
                                                    <div class="hint"><?php echo get_post_meta( $post->ID, 'delivery_ems', true )?></div>
                                                </div>

                                            </div> -->
                                            <div class="radio clearfix">

                                                <input id="self-delivery" type="radio" name="delivery" value="Самовывоз (Тверь, Коминтерна, 22)" hidden>
                                                <label for="self-delivery">Самовывоз (Тверь, Коминтерна, 22)</label>
                                                <div class="help">
                                                    <div class="hint"><?php echo get_post_meta( $post->ID, 'delivery_sam', true )?></div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- radio : end -->
                                    </div>
                                    <div class="order_info_help">
                                        <!-- right column : begin -->
                                        <div class="grid_5">

                                            <!-- banner (call me) : begin-->
                                            <div class="call-me">
                                                <p>Нужна помощь<br><span>в оформлении заказа?</span></p>
                                                <p><span>8(4822)</span> 57-80-57</p>
                                            </div>
                                            <!-- banner (call me) : end-->

                                        </div>
                                        <!-- right column : end -->
                                    </div>
                                </div>
                            </div>
                            <div class="cart_block__bottom">
                                <div>
                                    <input checked type="checkbox" name="accept" value="" required /> Даю добро на обработку <a href="/politika-konfidencialnosti/" target="_blank">персональных данных</a> и соглашаюсь с <a href="/polzovatelskoe-soglashenie/" target="_blank">пользовательским соглашением</a>
                                    <br/><br/>
                                </div>
                                <!-- button : begin -->
                                <div class="elem-form">
                                    <input type="submit" class="ordering-button" name="gocart" onclick="yaCounter29815874.reachGoal('order'); return true;" value="Оформить заказ">
                                </div>
                                <!-- button : end -->
                                <div class="hiddendata"></div>
                                <p><?php echo $text_error;?></p>
                            </div>
                        </div>
                    </div>

                </form>
                <!-- form : end -->

            </div>
        </div>
    </div>
    <!-- ordering : end -->

    <?php else: ?>
    <div class="container_12">
        <div class="grid_12">

           <!-- title and clear -->
            <div class="clear-basket">
                <h1>Ваша корзина пуста</h1>
                <p>Чтобы совершать покупку добавьте товар в корзину</p>
                <p><a href="/catalog/">НАЧАТЬ ПОКУПКИ</a></p>
            </div>

            <!--
                <?php // ?>
             -->

        </div>
    </div>
    <?php endif; ?>

<?php else: ?>
		    <!-- ordering : begin -->
    <div class="container_12">

        <!-- left column : begin -->
        <div class="grid_7">
            <div class="ordering">

                <!-- title -->
                <div class="title">Заказ оформлен</div>
                <h2>Номер заказа: #<?php echo $order->id; ?></h2>
                <p>Ваш заказ был получен и в настоящее время обрабатывается.</p>
                <p>Данные по заказу отправлены на электронную почту, указанную при оформлении заказа <a href="#"><?php echo $_POST['email']; ?></a>.</p>
                <p>Если у Вас нет доступа к данному почтовому ящику позвоните нам и назовите номера заказа.</p>

                <?php

                    add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));

                    /* формирование письма */
                        $message = get_id_product_func( $order->id );

                        $html_mesage = '<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%"><tbody><tr><td align="center" valign="top"><div></div><table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#fdfdfd;border:1px solid #dcdcdc;border-radius:3px!important"><tbody><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color:#557da1;border-radius:3px 3px 0 0!important;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif"><tbody><tr><td style="padding:36px 48px;display:block"><h1 style="color:#ffffff;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:left">Новый заказ Чистый Дом</h1></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="600"><tbody><tr><td valign="top" style="background-color:#fdfdfd"> <table border="0" cellpadding="20" cellspacing="0" width="100%"><tbody><tr><td valign="top" style="padding:48px"><div style="color:#737373;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left">';
                        $html_mesage .= '<p style="margin:0 0 16px">Вы получили заказ от '.$_POST['fio'].'  - '.$_POST['delivery'].' - . Детали заказа:</p>';
                        $html_mesage .= '<h2 style="color:#557da1;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left"><a href="#" style="color:#557da1;font-weight:normal;text-decoration:underline" target="_blank">Заказ #'. $order->id.'</a> (<time>'.date('d.m.Y').'</time>)</h2>';
                        $html_mesage .= '<table cellspacing="0" cellpadding="6" style="width:100%;font-family:\'Helvetica Neue\',Helvetica,Roboto,Arial,sans-serif;color:#737373;border:1px solid #e4e4e4" border="1"><thead><tr><th scope="col" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px">Товар</th><th scope="col" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px">Количество</th><th scope="col" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px">Цена</th></tr></thead><tbody>';
                        $html_mesage .= $message;

                        $html_mesage .= '<h2 style="color:#557da1;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left">Информация
о клиенте</h2>
<ul>
<li>
<strong>Тел: '.$_POST['fio'].'</strong>
<strong>Тел: '.$_POST['phone'].'</strong>
</li>
</ul>
<table cellspacing="0" cellpadding="0" style="width:100%;vertical-align:top" border="0"><tbody><tr>
<td valign="top" width="50%">
<h3 style="color:#557da1;display:block;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;font-size:16px;font-weight:bold;line-height:130%;margin:16px 0 8px;text-align:left">Платёжный адрес</h3>
<p style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;margin:0 0 16px">'.$_POST['fio'].'<br>
<p style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;margin:0 0 16px">'.$_POST['adress'].'<br>
<p style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;margin:0 0 16px">'.$_POST['city'].'<br>
<p style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;margin:0 0 16px">'.$_POST['phone'].'<br>
<p style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;margin:0 0 16px">'.$_POST['email'].'<br>
<p style="color:#505050;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto,Arial,sans-serif;margin:0 0 16px">'.$_POST['postcode'].'</p>
</td></tr></tbody></table></div></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table border="0" cellpadding="10" cellspacing="0" width="600"><tbody><tr><td valign="top" style="padding:0"><table border="0" cellpadding="10" cellspacing="0" width="100%"><tbody><tr><td colspan="2" valign="middle" style="padding:0 48px 48px 48px;border:0;color:#99b1c7;font-family:Arial;font-size:12px;line-height:125%;text-align:center"><p>Чистый дом<br>Клининговая компания<br><a href="http://uborka-tver.ru" target="_blank" >http://uborka-tver.ru</a><br></p></td></tr></tbody></table></td></tr></tbody></table></td> </tr></tbody></table></td></tr></tbody></table>';

                    /* формирование письма */

                    $order->update_status('processing');
                    $order->payment_complete();


                    wp_mail('chistiydom.tver@mail.ru, dranikss@gmail.com','Новый заказ №'.$order->id, $html_mesage);


                 ?>

                <!-- form : end -->

            </div>
        </div>
        <!-- left column : end -->

        <!-- right column : begin -->
        <div class="grid_5">

            <!-- banner (call me) : begin-->
            <div class="call-me">
                <p>Нужна помощь<br><span>в оформлении заказа?</span></p>
                <p><span>8(4822)</span> 57-80-57</p>
            </div>
            <!-- banner (call me) : end-->

        </div>
        <!-- right column : end -->

    </div>

<?php endif; ?>

</div>
<!-- CONTENT : end -->

<?php get_footer(); ?>