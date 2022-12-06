<?php
/**
 * dranikss
 * Шаблон страницы
 * http://dranikss.ru/
 * @package WordPress
 * @subpackage dranikss
 */
get_header(); // Подключаем хедер

$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
?>
<!-- BREADCRUMBS : begin -->

<?php if (isset($uri_parts[0]) && $uri_parts[0] == '/catalog/'): ?>

<div id="breadcrumbs">
    <div class="container_12">
      <div class="grid_12">
        <ul>
          <li><a href="/" title="">Главная</a>
          </li>
          <li class="unavailable"><a href="/catalog/">Магазин</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

<?php else: ?>

<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
        <?php

            $terms = get_the_terms( $post->ID, 'product_cat' );
            if($terms){
                foreach ($terms as $term) {
                    $category_current = $term->name;
                    $c = $term->parent;
                }
            }

        ?>
        <?php
            //global $product;
            //print_r($terms);
        $term_id = $post->ID;
        $taxonomy = 'product_cat';
        $termss = get_terms( $taxonomy );

        $li = '<li><a href="'.$_SERVER['HTTP_REFERER'].'" title="">'.$category_current.'</a></li>';


        foreach ($termss as $ter) {
            // print_r($ter);
            if($ter->term_id == $c && $ter->parent == 0){
                if($ter->slug == 'robot-pylesos'){
                    $li = '<li><a href="/catalog/roboty-pylesosy/" title="'.$ter->name.'">'.$ter->name.'</a></li>';
                } else{
                    $li = '<li><a href="/catalog/'.$ter->slug.'/" title="'.$ter->name.'">'.$ter->name.'</a></li>';
                }

            } else{

            }
        }

        ?>
            <ul>
                <li><a href="/" title="">Главная</a></li>
                <li><a href="/catalog/">Магазин</a></li>
                <?if($_SERVER['HTTP_REFERER'] == 'http://www.uborka-tver.ru/catalog/produkciya-tork/'):?>
                    <li><a href="/catalog/produkciya-tork/" title="Продукция TORK">Продукция TORK</a></li>
                <?else:?>
                    <?php echo $li;?>
                <?endif;?>
                <li class="current"><a href="#" title=""><?php the_title(); ?></a></li>
            </ul>
        </div>
    </div>
    <?//=$_SERVER['HTTP_REFERER'];?>
</div>


<?php endif ?>
<!-- BREADCRUMBS : end -->

<?php
    $class_shop = 'listing';

    if (isset($uri_parts[0]) && $uri_parts[0] == '/catalog/') {
        $class_shop = 'shop';
    } else{
        $class_shop = 'listing';
    }
 ?>

<!-- CONTENT : begin -->
<div id="content-page" class="<?= $class_shop ?>">
    
    

    <div class="container_12 woocommerce">

            <?php 
            
            if (isset($uri_parts[0]) && $uri_parts[0] == '/catalog/'): ?>

                <?php require 'shop.catalog.tpl.php'; ?>

            <?php else: ?>

                <?php if (isset($_GET['s'])): ?>

                <style>
                    nav.woocommerce-pagination {
                        position: absolute;
                        bottom: -45px;
                    }
                    .masonry {
                        margin-top: 50px;
                    }
                    h1.page-title {
                        margin-top: -70px;
                        position: absolute;
                    }
                </style>
                    <?//Закомментировано ввиду кривой работы функции filter_function_name_7806?>
                    <?//Поиск работает и без неё?>
                    <?php //add_filter( 'woocommerce_show_page_title', 'filter_function_name_7806', __return_false() );?>
                    <!-- <h2>Результаты поиска товаров по запросу: &ldquo;<?//= get_search_query()?>&rdquo;</h2> -->
                
                <div class="masonry ">
                    <?php woocommerce_content(); ?>
                </div>
                
                <div class="other_search" style="margin-top:75px;">
                    <h2>Другие результаты поиска по запросу: &ldquo;<?= get_search_query()?>&rdquo;</h2>
                    
                    <?php
                    $types = get_post_types();
                    unset($types['product'],$types['slider']);
                    
                    $args = array(
                            's' => get_search_query(), // поисковой запрос
                            'posts_per_page' => -1,
                            'post_type' => $types
                    );
                    $posts = query_posts($args);
                    
                    if($posts)
                        foreach($posts as $search_post)
                        {
                            echo "<div class='one-article'><a target='_blank' href='".get_permalink($search_post->ID)."'>".$search_post->post_title."</a><p>".  get_the_excerpt($search_post->ID)."</p></div>";
                        }
                    else "Извините, ничего не найдено";
                    ?>
                    
                    
                </div>

                <?php else: ?>

                <?php woocommerce_content(); ?>

                <?php endif ?>

            <?php endif ?>



    </div>
</div>
<!-- CONTENT : end -->


<!-- CONTENT : begin -->
<div id="content-page">

    <!-- best selling : begin -->
    <div class="best-selling">

        <!-- products : begin -->
        <div class="container_12">



        </div>
        <!-- products : end -->

    </div>
    <!-- best selling : end -->



</div>
<!-- CONTENT : end -->

<?php get_footer(); // Подключаем футер ?>