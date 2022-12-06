// при полной загрузке страницы проверяем urlы
jQuery(window).load(function () {
    // Получаем ajax url страницы
    function getURL() {
        var u = new Url();
        if (u.hash) {
            jQuery('.filter-category a.' + u.hash.replace(/!/g, "")).click()
        }
        ;
    }
    // использую полученные данные, если мы на нужной странице
    if (jQuery('div').hasClass('filter-category')) {
        getURL();
    }



    /* если мы на страницах новинки или лучшие продажи */
    var ur = new Url();
    if (ur.path == '/catalog/novinki/' || ur.path == '/catalog/luchshie-prodazhi/') {
        jQuery(".filter-category").hide();
    } else {
        jQuery(".filter-category").show();
    }

    if (ur.path == '/catalog/roboty-pylesosy/') {
        jQuery('#filter-brand > div:first-child').text('По моделям')
        /*jQuery('.filter-category li a[data-cid="104"]').parent().css({'margin-left':'10px'})
         jQuery('.filter-category li a[data-cid="100"]').parent().css({'margin-left':'10px'})
         jQuery('.filter-category li a[data-cid="108"]').parent().css({'margin-left':'10px'})
         jQuery('.filter-category li a[data-cid="96"]').parent().css({'margin-left':'10px'})*/
    }




    // выборка по роюотам
    switch (ur.hash) {
        case 'roomba':
            jQuery('#filter-brand ul li a[data-filter=".one-product[data-brand=Roomba]"]').click();
            break;
        case 'scooba':
            jQuery('#filter-brand ul li a[data-filter=".one-product[data-brand=Scooba]"]').click();
            break;
        case 'braava':
            jQuery('#filter-brand ul li a[data-filter=".one-product[data-brand=Braava]"]').click();
            break;
        case 'mirralooj':
            jQuery('#filter-brand ul li a[data-filter=".one-product[data-brand=Looj]"]').click();
            break;
        case '!polomoechnye-mashiny':
            jQuery('#filter-brand').hide();
            break;
            /*case '!professionalnye-pylesosy':
             jQuery('#main_banners').attr('src','http://www.uborka-tver.ru/wp-content/uploads/2017/08/2_Профессиональные-пылесосы.jpg');
             break;
             case '!razmyvochnaya-texnika':
             jQuery('#main_banners').attr('src','http://www.uborka-tver.ru/wp-content/uploads/2017/08/3_Размывочная-техника.jpg');
             break;*/
        default:
            jQuery('#filter-brand').show();
    }

    if (jQuery('div[data-tab="characteristics"] div p').length == 0) {
        jQuery('.tabs-titles div[data-tab="characteristics"]').hide();
        jQuery('.one-item-page .information > a').hide();
        if (jQuery('.tabs-titles div').length == 1) {
            jQuery('.tabs-titles').hide();
        } else {
            jQuery('.tabs-titles').show();
        }
    } else {
        jQuery('.tabs-titles div[data-tab="characteristics"]').show();
        jQuery('.one-item-page .information > a').show();
    }


// Если мы на странице с тороком
    if (ur.path == '/catalog/produkciya-tork/') {

        jQuery('.select a[data-sorting="novelity"]').click();
        jQuery('.select a[data-sorting="novelity"]').click();
        return false;
    }

});

// когда дом построена
jQuery(function () {

    $('.filters .subtitle').on('click', function () {
        var width = $(window).width();
        if (width <= 780)
        {
            $('#filters_inner').toggle('slow');
        }
    });

    // скрываю лоадер
    jQuery('.loader-magick').hide();

    // сбор всех категорий
    var all_category = [];
    jQuery(".filter-category li").each(function () {
        if (jQuery(this).find("a").attr('class')) {
            all_category.push(jQuery(this).find("a").attr('class'));
        }
    });

    /* сбор массива активных брендов */
    function refreshBrand() {
        var all_tags = [];
        var first_tags;
        // сбор всех брендов
        jQuery("#filter-brand li").each(function () {
            if (jQuery(this).find("a").hasClass('active')) {
                all_tags.push(jQuery(this).find("a").data('filter'));
            }
        });
        return all_tags;
    }

    /* сбор массива активных субкатегорий для фильтра */
    function refreshSub() {
        var all_tags = [];
        var first_tags;
        // сбор всех активов
        jQuery("#filter-sub li").each(function () {
            if (jQuery(this).find("a").hasClass('active')) {
                all_tags.push(jQuery(this).find("a").data('filter'));
            }
        });
        return all_tags;
    }

    /* фильтрация по брендам */
    function filterBrand() {
        // очищаем список
        jQuery('#filter-brand div ul').html('');
        // формируем новый
        var full_brand_array = [];
        jQuery('.masonry .one-product[data-brand]').each(function (i, val, count) {
            var tag = jQuery(this).attr('data-brand');
            // формирую массив брендов на текущей странице
            full_brand_array.push('<li><a href="#" title="" data-filter=".one-product[data-brand=' + tag + ']">' + tag + ' (<span>' + jQuery('.one-product[data-brand="' + tag + '"]').length + '</span>)</a></li>');
        });

        /* формирую уникальный списко брендов */
        var trash = [];
        jQuery.each(full_brand_array, function (i, el) {
            if (jQuery.inArray(el, trash) === -1) {
                trash.push(el);
                jQuery('#filter-brand div ul').append(el);
            }
        });
    }

    /* отработка нажатий по фильтру Брендов */
    jQuery('body').on('click', '#filter-brand a', function (e) {
        e.preventDefault();
        jQuery(this).toggleClass('active');
        var active_brands = [];
        active_brands = refreshBrand();
        // формирую сетку
        jQuery('#content-page.listing .masonry').isotope({
            itemSelector: '#content-page.listing .masonry .one-product',
            masonry: {
                gutter: 3
            },
            getSortData: {
                price: '[data-price] parseInt',
                title: '.descr a:firts-child()',
                novelity: '[data-stamp] parseInt',
                popular: '[data-popular] parseInt',
            }
        });
        // фильтрую
        jQuery('#content-page.listing .masonry').isotope({filter: active_brands.join(', ') + refreshSub().join(', ')});

        jQuery.fancybox.close();
    });

    /* отработка нажатий по фильтру Брендов */
    jQuery('body').on('click', '#filter-sub a', function (e) {
        e.preventDefault();
        jQuery(this).toggleClass('active');
        var active_brands = [];
        active_brands = refreshSub();
        // формирую сетку
        jQuery('#content-page.listing .masonry').isotope({
            itemSelector: '#content-page.listing .masonry .one-product',
            masonry: {
                gutter: 3
            },
            getSortData: {
                price: '[data-price] parseInt',
                title: '.descr a:firts-child()',
                novelity: '[data-stamp] parseInt',
                popular: '[data-popular] parseInt',
            }
        });
        // фильтрую
        jQuery('#content-page.listing .masonry').isotope({filter: active_brands.join(', ') + refreshBrand().join(', ')});
    });

    /* первая загрузка фильтра бренда */
    filterBrand();

    /* сортировка по */    /* клик по селекту */
    jQuery('body').on('click', '.listing .content .sorting .select a', function (event) {
        event.preventDefault();
        var filterTextLink = jQuery(this).text();
        jQuery(this).closest('.select').find('span').text(filterTextLink);

        var sort_by = jQuery(this).data('sorting');
        var sort_option;

        sort_option = sort_by == 'novelity' ? false : true;

        if (sort_by == 'priceup') {
            sort_by = 'price';
            sort_option = false;
        }
        else if (sort_by == 'novelity') {
            sort_option = false;
        }
        else if (sort_by == 'popular') {
            sort_option = false;
        }
        else {
            sort_option = true;
        }

        jQuery('#content-page.listing .masonry').isotope({
            itemSelector: '#content-page.listing .masonry .one-product',
            masonry: {
                gutter: 3
            },
            getSortData: {
                price: '[data-price] parseInt',
                title: '.descr a:firts-child()',
                novelity: '[data-stamp] parseInt',
                popular: '[data-popular] parseInt',
            }
        });
        jQuery('#content-page.listing .masonry').isotope({sortBy: sort_by, sortAscending: sort_option});
        return false;
    });

    if (window.location.hash == '#!polomoechnye-mashiny') {
        jQuery('#filter-sub > div:first-child').text('Питание');
    }
    if (window.location.hash == '#!professionalnye-pylesosy') {
        jQuery('#filter-sub > div:first-child').text('Тип пылесоса');
    }

    function emptyCategory() {
        if (jQuery('.masonry div').length == 0) {
            jQuery('.this-magick').html('<div class="empty-goods"><p>Пока нет товаров в данной категории.</p><p>По вопросам приобретения звоните <span>+7 (4822) 57-80-57</span></p></div>');
        }
        return true;
    }
    function switchCategory(link) {
        var t
        switch (link) {
            case '/catalog/kliningovoe-oborudovanie/':
                t = 'Клининговое оборудование';
                break;
            case '/catalog/moyushhie-sredstva/':
                t = 'Моющие средства';
                break;
            case '/catalog/inventar-dlya-uborki/':
                t = 'Инвентарь для уборки';
                break;
            case '/catalog/protirochnyj-material/':
                t = 'Протирочный материал';
                break;
            case '/catalog/dispensery-i-rasxodnye-materialy/':
                t = 'Диспенсеры и расходные материалы';
                break;
            case '/catalog/biznes-aromatizaciya/':
                t = 'Бизнес ароматизация';
                break;
            case '/catalog/nejtralizaciya-nepriyatnyx-zapaxov/':
                t = 'Нейтрализация неприятных запахов';
                break;
            case '/catalog/urny-i-pepelnicy/':
                t = 'Урны и пепельницы';
                break;
            case '/catalog/roboty-pylesosy/':
                t = 'Роботы пылесосы';
                break;
        }
        return t;
    }


    emptyCategory();

    //console.log();
    /* клик по категории и подгрузка результата */
    jQuery(document).on('click', '.filter-category li a', function (e) {
        e.preventDefault();
        jQuery('.banner-page').hide();

        if (jQuery(this).data('cid'))
            var cur = jQuery('.banner-page.banner' + jQuery(this).data('cid'));
        else
            var cur = jQuery('.banner-page.banner0');

        cur.show();
        cur.find('ul').bxSlider({
            infiniteLoop: false,
            speed: 900,
            easing: 'ease-in-out',
            responsive: true,
            pager: false,
            auto: true,
            pause: 6000,
            autoStart: true,
            onSliderLoad: function () {
                jQuery(".bx-wrapper").css("visibility", "visible");
                jQuery(".bx-wrapper img").css("visibility", "visible");
            }
        });

        var category = jQuery(this).attr('class');
        var title;
        if (jQuery(this).text() != 'Все товары') {
            jQuery('.grid_9.content h1').text(jQuery(this).text());
            jQuery('.grid_9.content .h1').text(jQuery(this).text());
            if (!jQuery('#breadcrumbs ul li').hasClass('end')) {
                jQuery('#breadcrumbs ul').append('<li class="current end"><a href="#" title="' + jQuery(this).text() + '">' + jQuery(this).text() + '</a></li>')
            } else {
                jQuery('#breadcrumbs ul li.current.end').html('<a href="#" title="' + jQuery(this).text() + '">' + jQuery(this).text() + '</a>')
            }
        } else {
            jQuery('.grid_9.content h1').text(jQuery(this).attr('title'));
            jQuery('.grid_9.content .h1').text(jQuery(this).attr('title'));
            jQuery('#breadcrumbs ul li.current.end').remove();
            title = switchCategory(window.location.pathname);
            jQuery('.grid_9.content h1').text(title);
            jQuery('.grid_9.content .h1').text(title);
        }


        // начало подменяю URL
        var url_category = jQuery(this).attr('class');
        if (url_category) {
            location.href = '#!' + url_category;
        }

        if (!jQuery(this).parent().hasClass('all')) {
            if (window.location.hash == '#!polomoechnye-mashiny') {
                jQuery('#filter-sub > div:first-child').text('Питание');
            }
            if (window.location.hash == '#!professionalnye-pylesosy') {
                jQuery('#filter-sub > div:first-child').text('Тип пылесоса');
            }
            if (window.location.pathname == '/catalog/inventar-dlya-uborki/') {
                jQuery('#filter-sub > div:first-child').text('Комплектующие');
            }
        } else {
            window.location.hash = "#";
            /* если нажата ссылка все товары, то собираем все категории */
            category = all_category.join(', ');
        }
        // конец подменяю URL

        var categoryid = jQuery(this).attr('data-cid');

        if (window.location.hash != '#!polomoechnye-mashiny' ||
                window.location.hash != '#!professionalnye-pylesosy' ||
                window.location.hash != '#!shvabry' ||
                window.location.hash != '#!shvabry-vileda-s-sistemoj-ultra-spid' ||
                window.location.hash != '#!shvabry-vileda-s-sistemoj-kombispid' ||
                window.location.hash != '#!shvabry-vileda-dlya-suxoj-uborki-s-sistemoj-dastmop' ||
                window.location.hash != '#!shvabry-vileda-s-sistemoj-svep-duo-plyus') {
            jQuery('#filter-sub').hide();
        }


        jQuery('.filter-category li').removeClass('active');
        jQuery(this).parent().addClass('active');

        // подготавливаю прелоадер
        jQuery('.this-magick').css({'opacity': '0.5'})
        jQuery('.loader-magick').show();

        var current_page = 3;
        // отправляю запрос
        jQuery.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_shoping_object.ajaxurl,
            data: {
                'action': 'ajaxshoping',
                'link_page': window.location.pathname,
                'category': category,
                'categoryid': categoryid,
                'per_page': current_page,
                'security_shoping': jQuery('#security_shoping').val()
            },
            success: function (data) {
                console.log(data);
                // убираю прелоадер и поготавливаю отображение
                jQuery('.this-magick').html(data.result);
                /* если нет товаров, то говорим, что нет товаров */
                emptyCategory();

                jQuery('#filter_subcategory').html(data.filter_sub_category);
                if (window.location.hash == '#!polomoechnye-mashiny' ||
                        window.location.hash == '#!professionalnye-pylesosy' ||
                        window.location.hash == '#!shvabry' ||
                        window.location.hash == '#!shvabry-vileda-s-sistemoj-ultra-spid' ||
                        window.location.hash == '#!shvabry-vileda-s-sistemoj-kombispid' ||
                        window.location.hash == '#!shvabry-vileda-dlya-suxoj-uborki-s-sistemoj-dastmop' ||
                        window.location.hash == '#!shvabry-vileda-s-sistemoj-svep-duo-plyus') {
                    jQuery('#filter-sub').show();
                } else {
                    jQuery('#filter-sub').hide();
                }

                if (window.location.hash == '#!polomoechnye-mashiny') {
                    jQuery('#filter-brand').hide();
                } else {
                    jQuery('#filter-brand').show();
                }


                jQuery('#content-page.listing .masonry').isotope({
                    itemSelector: '#content-page.listing .masonry .one-product',
                    masonry: {
                        gutter: 3
                    },
                    getSortData: {
                        price: '[data-price] parseInt',
                        title: '.descr a:firts-child()',
                        novelity: '[data-stamp] parseInt',
                        popular: '[data-popular] parseInt',
                    }
                });
                jQuery('.this-magick').fadeIn("slow");
                jQuery('.this-magick').css({'opacity': '1'})
                jQuery('.loader-magick').hide();
                jQuery('.variant.clearfix a.active').click(); // активирую для формирования масонри

                /* обновление фильтров бренда */
                filterBrand();
                /* debug */

                if (window.location.pathname == '/catalog/produkciya-tork/') {
                    jQuery('#content-page.listing .masonry').isotope({filter: '.one-product[data-brand=TORK]'});

                }
                jQuery('.select a[data-sorting="novelity"]').click();
                jQuery('.select a[data-sorting="novelity"]').click();
                //console.log(data.category);
            }
        });
        
        var width = $(window).width();
        if (width <= 780)
        {
            $('#filters_inner').toggle('slow');
        }
        
        return false;
    });

    /* скролим */
    jQuery(window).scroll(function () {
        var bottomOffset = 800; // отступ от нижней границы сайта, до которого должен доскроллить пользователь, чтобы подгрузились новые посты
        if (jQuery(document).scrollTop() > bottomOffset) {

        }
    });

    /* скрываем фильтр субкатегорий если их нет */
    if (!jQuery('.filter-category li:first-child').hasClass('active')) {
        jQuery('#filter-sub').show();
    } else {
        jQuery('#filter-sub').hide();
    }

    /* по умолчанию врубаем масонри, опять */
    jQuery('#content-page.listing .masonry').isotope({
        itemSelector: '#content-page.listing .masonry .one-product',
        masonry: {
            gutter: 3
        },
        getSortData: {
            price: '[data-price] parseInt',
            title: '.descr a:firts-child()',
            novelity: '[data-stamp] parseInt',
            popular: '[data-popular] parseInt',
        }
    });


});


