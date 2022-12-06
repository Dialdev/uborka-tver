<?php
/**
 * dranikss
 * Функции
 * @package WordPress
 * @subpackage dranikss
 */




/* добавление стилей и js */
function holmax_scripts_styles() {

		// Добавляю js в футер
		                //wp_enqueue_script( 'holmax-production', get_template_directory_uri() . '/js/production.min.js', array(), false, true );
		//wp_enqueue_script( 'holmax-production', get_template_directory_uri() . '/js/production.js', array(), false, true );

		wp_enqueue_script( 'holmax-jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.js', array(), false, true );
		wp_enqueue_script( 'holmax-modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), false, true );
		wp_enqueue_script( 'holmax-urljs', get_template_directory_uri() . '/js/url.min.js', array(), false, true );

		//wp_enqueue_script( 'holmax-textchange', get_template_directory_uri() . '/js/jquery.textchange.min.js', array(), false, true );
		wp_enqueue_script( 'holmax-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), false, true );

		//wp_enqueue_script( 'holmax-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), false, true );
		wp_enqueue_script( 'holmax-isotop', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), false, true );
		wp_enqueue_script( 'holmax-viewer', get_template_directory_uri() . '/js/viewer.js', array(), false, true );
		wp_enqueue_script( 'holmax-zoom', get_template_directory_uri() . '/js/zoom.js', array(), false, true );
		wp_enqueue_script( 'holmax-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), false, true );
		wp_enqueue_script( 'holmax-bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array(), false, true );
		wp_enqueue_script( 'holmax-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), false, true );
		wp_enqueue_script( 'holmax-main', get_template_directory_uri() . '/js/main.js', array(), false, true );
		wp_enqueue_script( 'holmax-plugins', get_template_directory_uri() . '/js/plugins.js', array(), false, true );

		// добавляю стили в хедер
		//wp_enqueue_style( 'holmax-style', get_template_directory_uri() . '/css/build/production.min.css"' );
                wp_enqueue_style( 'holmax-style', get_template_directory_uri() . '/css/build/production.css', false, array(), false );

                wp_enqueue_style( 'holmax-style-base', get_template_directory_uri() . '/css/style.css', false, array(), false );
		
		wp_enqueue_style( 'holmax-style-banner', get_template_directory_uri() . '/css/build/bannerhome.css', false, array(), false );

		
wp_enqueue_style( 'holmax-flexslider', get_template_directory_uri() . '/css/flexslider.css"', false, array(), false );
		//wp_enqueue_style( 'bannerhome-style', get_template_directory_uri() . '/css/build/bannerhome.css"', array(), null, true  );

}

add_action( 'wp_enqueue_scripts', 'holmax_scripts_styles' );

remove_action( 'wp_head', 'wp_generator' );
remove_action( "wp_head", "rel_canonical" );
remove_action('wp_head', 'wlwmanifest_link');
remove_action( "wp_head", "shortlink_link" );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// Регистрирую ме
register_nav_menus( array(
	'top' => 'Верхнее меню'
) );

//add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр

function example_dashboard_widget_function(){
	// Показать то, что вы хотите показать
	echo '<h2>Техподдержка</h2>
	<p>Если у вас возникают вопросы связанные с работой в этой системе управления с данным шаблоном, пишите вопросы на почтовый ящик</p>
	<p><a href="mailto:dranikss@holmax.ru">dranikss@holmax.ru</a> с темой "<b>Чистый Дом | Вопрос по управлению</b>"</p>
	<p>Также, обращайтесь по телефону: <strong>+7 999 789-36-61</strong></p>';
}
// Создаем функцию, используя хук действия
function example_add_dashboard_widgets() {
	wp_add_dashboard_widget('example_dashboard_widget', 'HOLMAX - техподдержка', 'example_dashboard_widget_function');
}
// Хук в 'wp_dashboard_setup', чтобы зарегистрировать нашу функцию среди других
add_action('wp_dashboard_setup', 'example_add_dashboard_widgets' );


function my_custom_login_logo(){
	echo '<style type="text/css">
	h1 a { background-image:url('.get_template_directory_uri().'/images/holmax-logo-2013.png) !important; }
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

// register_sidebar(); // Регистрируем сайдбар

function register_my_widgets(){
	register_sidebar( array(
		'name' => 'Блок с корзиной',
		'id' => 'cart-sidebar',
		'description' => 'Выводится для корзины в шапке.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
        register_sidebar( array(
		'name' => 'Блок с корзиной Адаптив',
		'id' => 'cartmobile-sidebar',
		'description' => 'Выводится для корзины в шапке адаптивной версии',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Блок правой колонки',
		'id' => 'left-sidebar',
		'description' => 'Выводится в правой колонке.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
	register_sidebar( array(
		'name' => 'Блок для услуг',
		'id' => 'service',
		'description' => 'Выводится в правой колонке.',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}


add_action( 'widgets_init', 'register_my_widgets' );


// убираем заголовок у виджетов
add_filter( 'widget_title', 'hide_widget_title' );
function hide_widget_title( $title ) {
    if ( empty( $title ) ) return '';
    if ( $title[0] == '!' ) return '';
    return $title;
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'holmax_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'holmax_wrapper_end', 10);

add_action( 'woocommerce_before_shop_loop', 'woocommerce_taxonomy_archive_description', 100 );

function holmax_wrapper_start() {
  echo '<section id="main">';
}

function holmax_wrapper_end() {
  echo '</section>';
}

add_theme_support( 'woocommerce' );

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_home_text' );
function jk_change_breadcrumb_home_text( $defaults ) {
	// Изменяем текст для главной страницы с 'Главная' на 'Аппартаменты'
	$defaults['home'] = 'Главная';
	return $defaults;
}

/**
	Вывод цены товара в соответствии с шаблоном
*/
function the_price($post_ID){

	$price = get_post_meta( $post_ID, '_price', true);
	if ($price == '' || $price == '0') {
		echo '<span class="pricerequest"> <a href="#modal-window-feedback" class="fancybox">цена по запросу </a></span>';
	} else {
		echo number_format( get_post_meta( $post_ID, '_price', true), 0, '.', ' ') .'&nbsp;<span class="ruble">o</span>';
	}

}


/**
	Вывод цены товара без шаблона для подсчета и использования в рассчетах
*/
function get_price($post_ID){

	$price = get_post_meta( $post_ID, '_price', true);
	if ($price == '' || $price == '0') {
		return '0';
	} else {
		return number_format( get_post_meta( $post_ID, '_price', true), 0, '.', ' ');
	}

}


/**
	ajax отправка формы со страницы контакты
*/
function ajax_mailsend_init(){
	wp_enqueue_script( 'ajax-mailsend', get_template_directory_uri() . '/js/mailsend.js', array('jquery'), false, true  );
	wp_localize_script( 'ajax-mailsend', 'ajax_mailsend_object', array(
	  'ajaxurl' => admin_url( 'admin-ajax.php' ),
	  'loadingmessage' => __('Подготавливаем данные к отправке...')
	) );
	add_action( 'wp_ajax_nopriv_ajaxmailsend', 'ajax_mailsend' );
	add_action( 'wp_ajax_ajaxmailsend', 'ajax_mailsend' );
}

add_action('init', 'ajax_mailsend_init');

function ajax_mailsend(){

	check_ajax_referer( 'ajax-mailsend-nonce', 'security_mailsend' );

	$message = "Добрый день, Чистый Дом!\n\nПисьмо со страницы: ".$_POST['page']."\n\nИмя: ".$_POST['name'] ."\nEmail/Телефон: ".$_POST['email1']."\nСообщение: ".$_POST['message'];

	$headers = 'From: UBORKA-TVER.ru <info@uborka-tver.ru>' . "\r\n";

	$send_mail = wp_mail( 'chistiydom.tver@mail.ru, dranikss@holmax.ru' , 'Сообщение с сайта ЧИСТЫЙ ДОМ', $message, $headers );



	if ( $send_mail )  {
        $roistatData = array(
            'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null,
            'key'     => 'MTI0NDM3Ojg0MDAzOjYzYzQyOTQwYzYzYjI0OWM1NjdmNzQwODc0MDczMmUz', // Вместо SECRET_KEY нужно вставить секретный ключ. Чтобы скопировать этот ключ, откройте Каталог интеграций -> amoCRM. Секретный ключ находится в нижней части экрана в строке Ключ для интеграций (смотрите скриншот ниже).
            'title'   => 'Новый лид с сайта https://www.uborka-tver.ru', // Постоянное значение
            'comment' => isset($_POST['message']) ? $_POST['message'] : null, // Для поля с именем 'your-message'
            'name'    => isset($_POST['name'])    ? $_POST['name'] : null, // Для поля с именем 'your-name'
            'email'   => isset($_POST['email1'])   ? $_POST['email1'] : null, // Для поля с именем 'your-email'
            'phone'   => isset($_POST['email1'])   ? $_POST['email1'] : null, // Если значения нет
            'fields'  => array(

            ),
        );
        file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));
		echo json_encode( array( 'message'=>__( 'Сообщение отправлено. Мы скоро с вами свяжемся!' ) ) );
	} else {
		echo json_encode( array( 'message'=>__( 'Что-то пошло не так!' ) ) );
	}

	die();
}

/**
	фильтрация товаров в каталоге по категориям.
*/
function ajax_shoping_init(){
    
    if(!is_admin())
    {
	wp_enqueue_script( 'ajax-shoping', get_template_directory_uri() . '/js/shoping.js', array('jquery'), null, true  );
	wp_localize_script( 'ajax-shoping', 'ajax_shoping_object', array(
		  'ajaxurl' => admin_url( 'admin-ajax.php' )
	) );
    }   
        
		add_action( 'wp_ajax_nopriv_ajaxshoping', 'ajax_shoping' );
		add_action( 'wp_ajax_ajaxshoping', 'ajax_shoping' );
}
//if(!is_admin()){
add_action('init', 'ajax_shoping_init');
//}
function ajax_shoping(){

	check_ajax_referer( 'ajax-shoping-nonce', 'security_shoping' );

	$category = $_POST['category'];
	$categoryid = $_POST['categoryid'];

	$data['category'] = $category;

	$data['filter_sub_category'] = do_shortcode( '[product_categories parent="' . $categoryid . '"]' );

	$data['result'] = '<div class="masonry">' . do_shortcode( '[product_category category="' . $category . '" per_page="9999"]' ) . '</div>';

	echo json_encode( $data );

	die();
}

/**
	Подсчет количества просмотров страниц
*/
add_action('wp_head', 'dranikss_postviews');
function dranikss_postviews() {

/* ------------ Настройки -------------- */
$meta_key		= '_most_popular';	// Ключ мета поля, куда будет записываться количество просмотров.
$who_count 		= 0; 		// Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированых пользователей.
$exclude_bots 	= 0;		// Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.
/* СТОП настройкам */

global $user_ID, $post;
	if( is_singular( array('product') ) ) {
		$id = (int)$post->ID;
		static $post_views = false;
		if($post_views) return true; // чтобы 1 раз за поток
		$post_views = (int)get_post_meta($id,$meta_key, true);
		$should_count = false;
		switch( (int)$who_count ) {
			case 0: $should_count = true;
				break;
			case 1:
				if( (int)$user_ID == 0 )
					$should_count = true;
				break;
			case 2:
				if( (int)$user_ID > 0 )
					$should_count = true;
				break;
		}
		if( (int)$exclude_bots==1 && $should_count ){
			$useragent = $_SERVER['HTTP_USER_AGENT'];
			$notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
			$bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
			if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
				$should_count = false;
		}

		if($should_count)
			if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
	}
	return true;
}

/**
	Хлебные крошки
*/
function breadcramps() {

	echo '
		<li><a href="/" title="">Главная</a></li>
		<li><a href="/catalog/">Услуги</a></li>
		<li><a href="#" title="">Клининговые услуги</a></li>
		<li class="current"><a href="#" title="">Клининговые услуги</a></li>';
}
function breadcrumbs($separator = ' » ', $home = 'Главная') {

	$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
	$base_url = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
	$breadcrumbs = array("<a href=\"$base_url\">$home</a>");

	$last = end(array_keys($path));

	foreach ($path AS $x => $crumb) {
		$title = ucwords(str_replace(array('.php', '_'), Array('', ' '), $crumb));
		if ($x != $last){
			$breadcrumbs[] = '<a href="'.$base_url.$crumb.'">'.$title.'</a>';
		}else{
			$breadcrumbs[] = $title;
		}
	}

	return implode($separator, $breadcrumbs);
}

/**
	Пагинация
*/
function pagination($pages = '', $range = 2) {
	$showitems = ($range * 2)+1;
     global $paged;
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<ul class='pagination clearfix'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='arrow unavailable'><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? '<li class="current"><a href="">'.$i.'</a></li>' :'<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
             }
         }
         if ($paged < $pages && $showitems < $pages) echo '<li class="arrow"><a href="'.get_pagenum_link($paged + 1).'">&raquo;</a></li>';
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo '<li class="arrow"><a href="'.get_pagenum_link($pages).'">&raquo;</a></li>';
         echo "</ul>\n";
     }
}


function get_id_product_func($order_id) {

	$order = new WC_Order( $order_id );
	$items = $order->get_items();

	// print_r($order);

	$subtotal = $order->get_subtotal();

	// вывод
	//$message[0] = '<p>Состав заказа #'.$order_id.'</p> ';

	// $sum = 0;

	foreach ( $items as $item ) {

		$product_name  = $item['name'];
		$product_price = $item['line_total'];
		$product_qty   = $item['qty'];

		//$message[] = '<p><strong>'.$product_name.'</strong> - '.$product_qty.' шт. -------- '.$product_price.' руб</p>';

		$message[] = '<tr style="width:100%;"><td style="text-align:left;vertical-align:middle;border:1px solid #eee;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word;color:#737373;padding:12px">
'.$product_name.'
<br><small></small></td>
<td style="text-align:left;vertical-align:middle;border:1px solid #eee;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;color:#737373;padding:12px">'.$product_qty.'</td>
<td style="text-align:left;vertical-align:middle;border:1px solid #eee;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;color:#737373;padding:12px"><span>
'.$product_price."&nbsp;<span>₽</span>
</span></td>
</tr>";


	}

	$message[999999] = '</tbody>
	<tfoot>
	<tr>
	<th scope="row" colspan="2" style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px">Всего:</th>
	<td style="text-align:left;color:#737373;border:1px solid #e4e4e4;padding:12px"><span>'.$subtotal.' <span>₽</span></span></td>
	</tr>
	</tfoot>
	</table>';
	//$message[99999] = '<p>Итого: <strong>'.$subtotal.'</strong> руб</p>';

	return implode('', $message);

}


function true_add_post_columns($my_columns){
	$my_columns['tohome'] = 'Выводится на главной странице';
	$my_columns['toservice'] = 'Выводится на странице';
	//$my_columns['tocatalog'] = 'Выводится на основной странице каталога';
	$my_columns['catalog'] = 'Выводится в разделах каталога';
	$my_columns['sort'] = 'Порядок вывода';
        
	return $my_columns;
}
 
add_filter( 'manage_edit-slider_columns', 'true_add_post_columns', 10, 1 );


function true_fill_post_columns( $column ) {
	global $post;
	switch ( $column ) {
		case 'tohome':
			$tohome = get_field('tohome', $post->ID);
                        echo $tohome?"Да":"Нет";
			break;
		case 'toservice':
			$toservice = get_field('toservice', $post->ID);
                        foreach($toservice as $service)
                        {
                            echo $service->post_title."<br/>";
                        }
			break;
		case 'catalog':
			$catalog = get_field('catalog', $post->ID);
                        foreach($catalog as $item)
                        {
                            echo $item->name."<br/>";
                        }
			break;
		/*case 'tocatalog':
			$tocatalog = get_field('tocatalog', $post->ID);
                        echo $tocatalog?"Да":"Нет";
			break;*/
		case 'sort':
			echo get_field('sort', $post->ID);
			break;
	}
}
 
add_action( 'manage_posts_custom_column', 'true_fill_post_columns', 10, 1 );

function add_custom_query_var( $vars ){
  $vars[] = "fbclid";
  return $vars;
}
add_filter( 'query_vars', 'add_custom_query_var' );

remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);
function woocommerce_pagination() {
    wp_pagenavi();      
}
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);

function fix_missing_404_on_paginated_page() {
    global $wp_query,$page,$paged;
 
    if (!isset($page)) $page = get_query_var('page');
	if (!isset($paged)) $paged = get_query_var('paged');
	if ( get_home_url() ) {

	
	} else {		
    if (is_page() || is_single()) {
        $realpagescount = count( explode( '<!--nextpage-->', $wp_query->post->post_content ) );
        if ( (isset($page) && isset($realpagescount) && $page >= $realpagescount) || (is_paged() && isset($paged) && $paged >=0 ) ){
        //wp_redirect( home_url() );
            nocache_headers();
            status_header( '404' );
            $wp_query->is_404=true;
            $wp_query->is_single=false;
            $wp_query->is_singular=false;
            $wp_query->post_count=0;
            $wp_query->page=0;
            $wp_query->query['page']='';
            $wp_query->query['posts']=array();
            $wp_query->query['post']=array();
            $wp_query->posts=array();
            $wp_query->post=array();
            $wp_query->queried_object=array();
            $wp_query->queried_object_id=0;
            locate_template('404.php', true);
            exit;
        }
	}
}
}
add_action('template_redirect', 'fix_missing_404_on_paginated_page');