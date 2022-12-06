<?php
/**
 * Template Name: Калькулятор
 *
 * Description: шаблон Калькулятор
 *
 * Tip: для Калькулятора
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
                <li class="unavailable"><a href="#">Компания</a></li>
                <li class="current"><a href="#" title=""><?php the_title();?></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->

<!-- CONTENT : begin -->
<div id="content-page" class="vacancies">
    <div class="container_12">

        <!-- left column : begin -->
        <div class="grid_9 grid_mob_8 grid_xs_12">

            <?php if ( have_posts() ) while ( have_posts() ) : the_post();?>

                <h1><?php the_title();?></h1>

                <?php the_content();?>

            <?php endwhile; // Конец цикла ?>

            <div class="b-calcul">
            <form action="" name="calc" method="post">
                <table class="b-calcul__table">
                    <tr>
                        <td>
                            <span>Тип помещения</span>
                        </td>
                        <td>
                            <select name="tip_home">
                                <option value="room">Квартира</option>
                                <option value="house">Коттедж</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Тип уборки</span>
                        </td>
                        <td>
                            <select name="tip_wash">
                                <option value="general">Генеральная</option>
                                <option value="afterbuilding">Послестроительная</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Площадь помещения</span>
                        </td>
                        <td>
                            <input required="" name="pl_pom" type="number" min="0" value="0"> кв.м.
                        </td>
                    </tr>
                    <tr id="floor_mnogo">
                        <td>
                            <span>Этаж в многоквартирном доме</span>
                        </td>
                        <td>
                            <input name="floor_house" type="number" min="0" value="">
                        </td>
                    </tr>
                    <tr id="floor_kottedg">
                        <td>
                            <span>Колличество этажей в коттедже</span>
                        </td>
                        <td>
                            <input name="floor_home" type="number" min="0" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Помещение в Твери</span>
                        </td>
                        <td>
                            <input id="intver" type="checkbox" name="intver" checked value="da" hidden />
                            <label for="intver"></label>
                        </td>
                    </tr>
                    <tr id="out_tver">
                        <td>
                            <span>За городом</span>
                        </td>
                        <td>
                            <input name="outtver" type="number" min="0" value=""> км. от Твери
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Мытье окон</span>
                        </td>
                        <td>
                            <input id="wash_windows" type="checkbox" name="wash_windows" hidden />
                            <label for="wash_windows"></label>
                        </td>
                    </tr>
                    <!-- <tr class="okoshki">
                        <td>
                            <span>С двух сторон</span>
                        </td>
                        <td>
                            <input id="double" type="checkbox" name="double" hidden />
                            <label for="double"></label>
                        </td>
                    </tr> -->
                    <tr class="okoshki">
                        <td>
                            <span>Стандартные окна</span>
                        </td>
                        <td>
                            <input id="window_standart" type="checkbox" name="window_standart" hidden />
                            <label for="window_standart"></label>
                        </td>
                    </tr>

                    <tr class="b-calcul__okna">
                        <td colspan="2">
                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_1" value="0"></p>
                                <p><img src="<?=get_template_directory_uri();?>/images/okno_1.png"></p>
                                <p>Одностворчатое <br>стандартное окно</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_2" value="0"></p>
                                <p><img src="<?=get_template_directory_uri();?>/images/okno_2.png"></p>
                                <p>Двухстворчатое <br>стандартное окно</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_3" value="0"></p>
                                <p><img src="<?=get_template_directory_uri();?>/images/okno_3.png"></p>
                                <p>Трёхстворчатое <br>стандартное окно</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_balkon" value="0"></p>
                                <p><img src="<?=get_template_directory_uri();?>/images/okno_4.png"></p>
                                <p>Мойка лоджий <br>и балконов </p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_blok" value="0"></p>
                                <p><img src="<?=get_template_directory_uri();?>/images/okno_5.png"></p>
                                <p>Оконный <br>блок</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_dver" value="0"></p>
                                <p><img src="<?=get_template_directory_uri();?>/images/okno_6.png"></p>
                                <p>Балконная <br>дверь</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_lodgia" value="0"></p>
                                <p><img style="height:110px;" src="<?=get_template_directory_uri();?>/images/lodgia.png"></p>
                                <p>Вход на<br>лоджию</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_zhal" value="0"></p>
                                <p><img src="<?=get_template_directory_uri();?>/images/okno_7.png"></p>
                                <p>Мойка <br>жалюзи </p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number"  min="0" name="okno_setka" value="0"></p>
                                <p><img src="<?=get_template_directory_uri();?>/images/okno_8.png"></p>
                                <p>Москитные <br>сетки</p>
                            </div>
                        </td>
                    </tr>

                    <tr class="b-calcul__nestandart okoshki">
                        <td>
                            <span>Нестандартные окна</span>
                        </td>
                        <td>
                            <input type="text" name="n_okno_d_1" value="" placeholder="длина"> см <input name="n_okno_v_1" type="text" value="" placeholder="высота"> см
                        </td>
                    </tr>

                    <tr class="okoshki">
                        <td colspan="2">
                            <span><small><a href="#fake" id="add">+ Добавить еще одно окно</a></small></span>
                            <br><br>
                        </td>
                    </tr>

                    <tr class="okoshki">
                        <td>
                            <span>Сильные загрязнения на рамах<br><small>(Пленка, скотч, клей, цемент)</small></span>
                        </td>
                        <td>
                             <input id="window_lenta" type="checkbox" name="window_lenta" hidden />
                            <label for="window_lenta"></label>
                        </td>
                    </tr>

                    <!-- <tr>
                        <td>
                            <span> Уборка кухни</span>
                        </td>
                        <td>
                            <input id="kuxnya" type="checkbox" name="kuxnya" hidden />
                            <label for="kuxnya"></label>
                        </td>
                    </tr> -->

                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Дополнительные услуги</span>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <span>Техника:</span>
                        </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>
                            <span>Холодильник (внутри)</span>
                        </td>
                        <td>
                            <input id="xolodilnik" type="checkbox" name="xolodilnik" hidden />
                            <label for="xolodilnik"></label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>СВЧ (внутри)</span>
                        </td>
                        <td>
                            <input id="svch" type="checkbox" name="svch" hidden />
                            <label for="svch"></label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span> Духовой шкаф (внутри)</span>
                        </td>
                        <td>
                            <input id="duxovka" type="checkbox" name="duxovka" hidden />
                            <label for="duxovka"></label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Химчистка мягкой мебели</span>
                        </td>
                        <td>
                            <input id="mebel" type="checkbox" name="mebel" hidden />
                            <label for="mebel"></label>
                        </td>
                    </tr>

                    <tr class="b-calcul__divan">
                        <td colspan="2">
                            <div class="b-calcul__box">
                                <p><input type="number" min="0" name="divan_ugol" value="0"></p>
                                <p class="b-calcul__ptb"><img src="<?=get_template_directory_uri();?>/images/divan_1.png"></p>
                                <p>Диван <br>угловой</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number" min="0" name="divan_4" value="0"></p>
                                <p class="b-calcul__ptb"><img src="<?=get_template_directory_uri();?>/images/divan_2.png"></p>
                                <p>Диван 4 <br>посадочных места</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number" min="0" name="divan_3" value="0"></p>
                                <p class="b-calcul__ptb"><img src="<?=get_template_directory_uri();?>/images/divan_3.png"></p>
                                <p>Диван 3 <br>посадочных места</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number" min="0" name="divan_2" value="0"></p>
                                <p class="b-calcul__ptb"><img src="<?=get_template_directory_uri();?>/images/divan_4.png"></p>
                                <p>Диван 2 <br>посадочных места</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number" min="0" name="divan_kreslo" value="0"></p>
                                <p class="b-calcul__ptb"><img src="<?=get_template_directory_uri();?>/images/divan_5.png"></p>
                                <p>Кресло</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number" min="0" name="divan_stul" value="0"></p>
                                <p class="b-calcul__ptb"><img src="<?=get_template_directory_uri();?>/images/divan_6.png"></p>
                                <p>Стул</p>
                            </div>

                            <div class="b-calcul__box">
                                <p><input type="number" min="0" name="divan_puf" value="0"></p>
                                <p class="b-calcul__ptb"><img src="<?=get_template_directory_uri();?>/images/divan_7.png"></p>
                                <p>Пуф</p>
                            </div>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span>Химчистка ковров</span>
                        </td>
                        <td>
                            <input type="text" name="xim_kovra"> кв.м
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                           <p><br><br><button>Расчитать стоимость услуги</button></p>
                        </td>
                    </tr>

                </table>

                </form>

                <hr>
                <p class="subtotal">Ориентировочная стоимость услуг составит:</p>
                <p class="full_price"><strong id="full_price">0 </strong> р.</p>
                <p>Цены носят ознакомительный характер, для точного расчета стоимости уборки свяжитесь с нами по телефону +7 (4822) 57-80-57 или закажите <a href="http://www.uborka-tver.ru/kliningovye-uslugi/">клининговую услугу</a>, выезд специалиста и оценка бесплатно.</p>                <p class="clining-services"><a href="#modal-window-feedback" class="fancybox green-button">Заказать услугу</a></p>
            </div>


        </div>
        <!-- left column : end -->

        <!-- right column : begin -->
        <div class="grid_3 grid_mob_4 grid_xs_12">
            <?php get_sidebar('left') /* sidebar-left.php */ ?>
        </div>
        <!-- right column : end -->

    </div>
</div>
<!-- CONTENT : end -->

<script>
    jQuery(document).ready(function(){
var data_array;
    function get_param( param ){

        var znachenie;

        $.each(data_array, function(){

            if( $(this)[0].name == param ){
                znachenie =  $(this)[0].value;
            }

        })

        return znachenie;
    }
    $('body').on('click','#window_standart', function(){

        $('.b-calcul__okna').toggle();

    });

    $('body').on('click','#intver', function(){

        $('#out_tver').toggle();

    });

    $('body').on('click','#wash_windows', function(){

        $('.okoshki').toggle();

    });



    $('body').on('click','#mebel', function(){

        $('.b-calcul__divan').toggle();

    });


    $('body').on('change','select[name="tip_home"]', function(){

        if( $(this)[0].value == 'room' ){
            $('#floor_mnogo').show();
            $('#floor_kottedg').hide();
        }

        if( $(this)[0].value == 'house' ){
            $('#floor_mnogo').hide();
            $('#floor_kottedg').show();
        }

    });

    var count = 1;
    $('body').on('click','#add', function(){

        count++;

        $('.b-calcul__nestandart').after('<tr><td><span>Нестандартные окна <a href="#fake" class="b-del"><small>(удалить)</small></a></span></td><td>'+
        '<input type="text" name="n_okno_d_'+count+'" value="" placeholder="длина"> см <input name="n_okno_v_'+count+'" type="text" value="" placeholder="высота"> см</td></tr>'
                );

    });

    $('body').on('click','.b-del', function(e){

        e.preventDefault();
        $( this ).parent().parent().parent().remove();

    });

    // $('body').on('click','label', function(){

    //     var id = '#' + $(this).attr('for');
    //     console.info(id);

    //     if ( !$( id ).attr('checked')) {
    //         $( id ).attr('checked', 'checked');
    //     } else {
    //         $( id ).removeAttr('checked');
    //     }
    //     return true;

    // });


    $('body').on('submit','form[name="calc"]', function(e){

        e.preventDefault();

        data_array = $(this).serializeArray();

        calculate( data_array );


    });


    function calculate( data ){

        var summa                   = 0;

        var tarif_genuborka         = 100;
        var tarif_poslestroyki      = 120;

        var tarif_etazhnost         = 0; // надбавка за этаж
        var tarif_etazhnost_kottedg = 0; // надбавка за этаж коттедж
        var tarif_kilometr          = 10; // километр от Твери

        var tarif_okno_1            = 400;
        var tarif_okno_2            = 460;
        var tarif_okno_3            = 530;
        var tarif_okno_balkon       = 1650;
        var tarif_okno_blok         = 2000;
        var tarif_okno_dver         = 330;
        var tarif_okno_zhal         = 650;
        var tarif_okno_setka        = 150;
        var tarif_okno_lodgia       = 650;

        var tarif_stekla            = 100; // мытье стекол по площади
        var tarif_window_lenta      = 500; //Сильные загрезнения

        var tarif_xolodilnik        = 500; // холодильник
        var tarif_svch              = 300; // свч
        var tarif_duxovka           = 500; // духовка

        var tarif_xim_kovra         = 250; // химчистка ковра

        var tarif_divan_ugol        = 3500; // Угловой диван
        var tarif_divan_4           = 3000; // 4 местный диван ?
        var tarif_divan_3           = 3000; // 3 местный диван
        var tarif_divan_2           = 1500; // 2 местный диван ?
        var tarif_divan_kreslo      = 750; // кресло
        var tarif_divan_stul        = 250; // стул
        var tarif_divan_puf         = 500; // пуф

        if( get_param('tip_home')  == 'room' || get_param('tip_home')  == 'house' ){

            if( get_param('tip_wash') == 'general' ){

                summa = summa + get_param('pl_pom')*tarif_genuborka; // Генеральная уборка

            }

            if( get_param('tip_wash') == 'afterbuilding' ){

                summa = summa + get_param('pl_pom')*tarif_poslestroyki; // Послестроительная уборка

            }

            summa = summa + get_param('floor_house')*tarif_etazhnost;

            summa = summa + get_param('floor_home')*tarif_etazhnost_kottedg;

            if( get_param('intver') != 'da'){

                summa = summa + get_param('outtver')*tarif_kilometr;

            }

            if( get_param('wash_windows') == 'on'){

                // коэффициент за мытье окон с жвух сторон


                if( get_param('window_lenta') == 'on'){
                   x2 = 0.1;
                } else{
                   x2 = 0;
                }

                if( get_param('okno_1') > 0 ){ summa      = summa + get_param('okno_1')*tarif_okno_1 + get_param('okno_1')*tarif_okno_1*x2; }
                if( get_param('okno_2') > 0 ){ summa      = summa + get_param('okno_2')*tarif_okno_2 + get_param('okno_2')*tarif_okno_2*x2; }
                if( get_param('okno_3') > 0 ){ summa      = summa + get_param('okno_3')*tarif_okno_3 +  get_param('okno_3')*tarif_okno_3*x2; }
                if( get_param('okno_balkon') > 0 ){ summa = summa + get_param('okno_balkon')*tarif_okno_balkon +  get_param('okno_balkon')*tarif_okno_balkon*x2; }
                if( get_param('okno_blok') > 0 ){ summa   = summa + get_param('okno_blok')*tarif_okno_blok +  get_param('okno_blok')*tarif_okno_blok*x2; }
                if( get_param('okno_dver') > 0 ){ summa   = summa + get_param('okno_dver')*tarif_okno_dver +  get_param('okno_dver')*tarif_okno_dver*x2; }
                if( get_param('okno_zhal') > 0 ){ summa   = summa + get_param('okno_zhal')*tarif_okno_zhal +  get_param('okno_zhal')*tarif_okno_zhal*x2; }
                if( get_param('okno_setka') > 0 ){ summa  = summa + get_param('okno_setka')*tarif_okno_setka +  get_param('okno_setka')*tarif_okno_setka*x2; }
                if( get_param('okno_lodgia') > 0 ){ summa = summa + get_param('okno_lodgia')*tarif_okno_lodgia +  get_param('okno_lodgia')*tarif_okno_lodgia*x2; }



                for (var i = 1; i <= 20; i++) {
                    if( get_param('n_okno_d_' + i) > 0 && get_param('n_okno_v_' + i) > 0 ){ summa   = summa + (get_param('n_okno_d_' + i)*get_param('n_okno_v_' + i))/10000*tarif_stekla + (get_param('n_okno_d_' + i)*get_param('n_okno_v_' + i))/10000*tarif_stekla*x2; }
                }




            }

            if( get_param('xolodilnik') == 'on'){ summa = summa + tarif_xolodilnik; }
            if( get_param('svch')       == 'on'){ summa = summa + tarif_svch; }
            if( get_param('duxovka')    == 'on'){ summa = summa + tarif_duxovka; }

            if( get_param('mebel') == 'on'){

                if( get_param('divan_ugol') > 0 ){ summa   = summa + get_param('divan_ugol')*tarif_divan_ugol; }
                if( get_param('divan_4') > 0 ){ summa      = summa + get_param('divan_4')*tarif_divan_4; }
                if( get_param('divan_3') > 0 ){ summa      = summa + get_param('divan_3')*tarif_divan_3; }
                if( get_param('divan_2') > 0 ){ summa      = summa + get_param('divan_2')*tarif_divan_2; }
                if( get_param('divan_kreslo') > 0 ){ summa = summa + get_param('divan_kreslo')*tarif_divan_kreslo; }
                if( get_param('divan_stul') > 0 ){ summa   = summa + get_param('divan_stul')*tarif_divan_stul; }
                if( get_param('divan_puf') > 0 ){ summa    = summa + get_param('divan_puf')*tarif_divan_puf; }
                if( get_param('okno_setka') > 0 ){ summa   = summa + get_param('okno_setka')*tarif_okno_setka*x2; }

            }

            if( get_param('xim_kovra') > 0 ){ summa = summa + get_param('xim_kovra')*tarif_xim_kovra; }


        }


        $('#full_price').html( summa )
    }

});
</script>


<?php get_footer(); ?>


