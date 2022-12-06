<?php

/**
 * Template Name: YML
 *
 * Description: YML
 *
 * Tip: для YML Яндекса
 *
 * @package WordPress
 * @subpackage dranikss
 * @since dranikss
 */
//get_header();
?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<?
?>
<?
$posts = get_posts(array(
    'numberposts'     => 560, // тоже самое что posts_per_page
    'offset'          => 0,
    'category'        => '',
    'orderby'         => 'post_date',
    'order'           => 'DESC',
    'include'         => '',
    'exclude'         => '',
    'meta_key'        => '',
    'meta_value'      => '',
    'post_type'       => 'product',
    'post_mime_type'  => '', // image, video, video/mp4
    'post_parent'     => '',
    'post_status'     => 'publish'
));
//print_r($posts);
foreach ($posts as $post) {
    setup_postdata($post);
    //echo $post->ID;


    $categorys = get_the_terms($post->ID, 'product_cat');

    if ($categorys) {
        foreach ($categorys as $key => $value) {

            $categorys['term_id'] = $value->term_id;
            $categorys['name']    = $value->name;
            //$cats[$value->term_id] = $value->name;

        }
    }



    $product_tag = get_the_terms($post->ID, 'product_tag');
    // print_r($product_tag);
    if ($product_tag) {
        foreach ($product_tag as $key => $value) {

            $product_tag['name'] = $value->name;
        }
    }


    $price     = get_post_custom($post->ID);
    $image_url = wp_get_attachment_url($price['_product_image_gallery'][0]);

    $goods[$post->ID]['cat_id']      = $categorys['term_id'];
    $goods[$post->ID]['model']       = $post->post_title;
    $goods[$post->ID]['description'] = htmlspecialchars($post->post_content);
    $goods[$post->ID]['cat']         = $categorys['name'];
    $goods[$post->ID]['price']       = $price['_price'][0];
    $goods[$post->ID]['url']         = get_permalink($post->ID);

    $goods[$post->ID]['img']         = $image_url;
    $goods[$post->ID]['img']         = explode('/', $goods[$post->ID]['img']);

    $last                            = count($goods[$post->ID]['img']) - 1;
    $goods[$post->ID]['img'][$last]  = urlencode($goods[$post->ID]['img'][$last]);
    $goods[$post->ID]['img']         = implode('/', $goods[$post->ID]['img']);


    $goods[$post->ID]['vendor']      = $product_tag['name'];
}

//print_r($goods);
foreach ($goods as $key => $value) {

    $cats[$value['cat_id']] = $value['cat'];
}
//print_r($cats);
//$cats = array_unique($cats);

foreach ($cats as $key => $value) {
    $cat[] = $value ? '<category id="' . $key . '">' . $value . '</category>' : '';
}

wp_reset_postdata();
?>
<yml_catalog date="<?= date('Y-m-d H:i') ?>">
    <shop>
        <name>Чистый дом</name>
        <company>Чистый дом</company>
        <url>http://www.uborka-tver.ru/</url>

        <currencies>
            <currency id="RUR" rate="1" plus="0" />
        </currencies>

        <categories>
            <?= implode("\n\t\t", $cat) ?>

        </categories>

        <local_delivery_cost>0</local_delivery_cost>

        <offers>

            <?
            foreach ($goods as $key => $value) { ?>
                <? if ($value['price'] && $value['cat_id']) : ?>
                    <offer id="<?= $key ?>" available="true" bid="21">
                        <url><?= $value['url'] ?></url>
                        <price><?= $value['price'] ?></price>
                        <currencyId>RUR</currencyId>
                        <categoryId><?= $value['cat_id'] == '98' ? '113' : $value['cat_id'] ?></categoryId>
                        <picture><?= $value['img'] ?></picture>
                        <?= $value['vendor'] ? '<vendor>' . $value['vendor'] . '</vendor>' : '' ?>
                        <name><?= $value['model'] ?></name>
                        <description><?= $value['description'] ?></description>
                    </offer>
                <? else : ?>
                <? endif; ?>

            <?
            }
            ?>

        </offers>

    </shop>
</yml_catalog>