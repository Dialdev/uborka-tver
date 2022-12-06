//jQuery(document).ready(function($) {
var $accordionBlock = $('.accordionBlock'),
                $accordionTitle = $accordionBlock.find('.accordionTitle'),
                $accordionText = $accordionBlock.find('.accordionText');
            $accordionBlock.find('.accordionTitle').click(function (e) {
                e.preventDefault();
                var $t = $(this);

                if(!$t.hasClass('active')) {
                    $accordionText.slideUp(250);
                    $accordionTitle.removeClass('active');
                    $t.addClass('active');
                    $t.next().slideDown();
                } else {
                    $t.removeClass('active');
                    $t.next().slideUp();
                }
            });
//});



/*==================================
 =            MASK INPUT            =
 ==================================*/
!function(a){"function" == typeof define && define.amd?define(["jquery"], a):a("object" == typeof exports?require("jquery"):jQuery)}(function(a){var b, c = navigator.userAgent, d = /iphone/i.test(c), e = /chrome/i.test(c), f = /android/i.test(c); a.mask = {definitions:{9:"[0-9]", a:"[A-Za-z]", "*":"[A-Za-z0-9]"}, autoclear:!0, dataName:"rawMaskFn", placeholder:"_"}, a.fn.extend({caret:function(a, b){var c; if (0 !== this.length && !this.is(":hidden"))return"number" == typeof a?(b = "number" == typeof b?b:a, this.each(function(){this.setSelectionRange?this.setSelectionRange(a, b):this.createTextRange && (c = this.createTextRange(), c.collapse(!0), c.moveEnd("character", b), c.moveStart("character", a), c.select())})):(this[0].setSelectionRange?(a = this[0].selectionStart, b = this[0].selectionEnd):document.selection && document.selection.createRange && (c = document.selection.createRange(), a = 0 - c.duplicate().moveStart("character", - 1e5), b = a + c.text.length), {begin:a, end:b})}, unmask:function(){return this.trigger("unmask")}, mask:function(c, g){var h, i, j, k, l, m, n, o; if (!c && this.length > 0){h = a(this[0]); var p = h.data(a.mask.dataName); return p?p():void 0}return g = a.extend({autoclear:a.mask.autoclear, placeholder:a.mask.placeholder, completed:null}, g), i = a.mask.definitions, j = [], k = n = c.length, l = null, a.each(c.split(""), function(a, b){"?" == b?(n--, k = a):i[b]?(j.push(new RegExp(i[b])), null === l && (l = j.length - 1), k > a && (m = j.length - 1)):j.push(null)}), this.trigger("unmask").each(function(){function h(){if (g.completed){for (var a = l; m >= a; a++)if (j[a] && C[a] === p(a))return; g.completed.call(B)}}function p(a){return g.placeholder.charAt(a < g.placeholder.length?a:0)}function q(a){for (; ++a < n && !j[a]; ); return a}function r(a){for (; --a >= 0 && !j[a]; ); return a}function s(a, b){var c, d; if (!(0 > a)){for (c = a, d = q(b); n > c; c++)if (j[c]){if (!(n > d && j[c].test(C[d])))break; C[c] = C[d], C[d] = p(d), d = q(d)}z(), B.caret(Math.max(l, a))}}function t(a){var b, c, d, e; for (b = a, c = p(a); n > b; b++)if (j[b]){if (d = q(b), e = C[b], C[b] = c, !(n > d && j[d].test(e)))break; c = e}}function u(){var a = B.val(), b = B.caret(); if (a.length < o.length){for (A(!0); b.begin > 0 && !j[b.begin - 1]; )b.begin--; if (0 === b.begin)for (; b.begin < l && !j[b.begin]; )b.begin++; B.caret(b.begin, b.begin)} else{for (A(!0); b.begin < n && !j[b.begin]; )b.begin++; B.caret(b.begin, b.begin)}h()}function v(){A(), B.val() != E && B.change()}function w(a){if (!B.prop("readonly")){var b, c, e, f = a.which || a.keyCode; o = B.val(), 8 === f || 46 === f || d && 127 === f?(b = B.caret(), c = b.begin, e = b.end, e - c === 0 && (c = 46 !== f?r(c):e = q(c - 1), e = 46 === f?q(e):e), y(c, e), s(c, e - 1), a.preventDefault()):13 === f?v.call(this, a):27 === f && (B.val(E), B.caret(0, A()), a.preventDefault())}}function x(b){if (!B.prop("readonly")){var c, d, e, g = b.which || b.keyCode, i = B.caret(); if (!(b.ctrlKey || b.altKey || b.metaKey || 32 > g) && g && 13 !== g){if (i.end - i.begin !== 0 && (y(i.begin, i.end), s(i.begin, i.end - 1)), c = q(i.begin - 1), n > c && (d = String.fromCharCode(g), j[c].test(d))){if (t(c), C[c] = d, z(), e = q(c), f){var k = function(){a.proxy(a.fn.caret, B, e)()}; setTimeout(k, 0)} else B.caret(e); i.begin <= m && h()}b.preventDefault()}}}function y(a, b){var c; for (c = a; b > c && n > c; c++)j[c] && (C[c] = p(c))}function z(){B.val(C.join(""))}function A(a){var b, c, d, e = B.val(), f = - 1; for (b = 0, d = 0; n > b; b++)if (j[b]){for (C[b] = p(b); d++ < e.length; )if (c = e.charAt(d - 1), j[b].test(c)){C[b] = c, f = b; break}if (d > e.length){y(b + 1, n); break}} else C[b] === e.charAt(d) && d++, k > b && (f = b); return a?z():k > f + 1?g.autoclear || C.join("") === D?(B.val() && B.val(""), y(0, n)):z():(z(), B.val(B.val().substring(0, f + 1))), k?b:l}var B = a(this), C = a.map(c.split(""), function(a, b){return"?" != a?i[a]?p(b):a:void 0}), D = C.join(""), E = B.val(); B.data(a.mask.dataName, function(){return a.map(C, function(a, b){return j[b] && a != p(b)?a:null}).join("")}), B.one("unmask", function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask", function(){if (!B.prop("readonly")){clearTimeout(b); var a; E = B.val(), a = A(), b = setTimeout(function(){z(), a == c.replace("?", "").length?B.caret(0, a):B.caret(a)}, 10)}}).on("blur.mask", v).on("keydown.mask", w).on("keypress.mask", x).on("input.mask paste.mask", function(){B.prop("readonly") || setTimeout(function(){var a = A(!0); B.caret(a), h()}, 0)}), e && f && B.off("input.mask").on("input.mask", u), A()})}})});
        /*-----  End of MASK INPUT  ------*/

$('a[href="/catalog/salfetkigubkitryapkiperchatki/"]').attr('href', '/catalog/salfetki-gubki-tryapki-perchatki/');
$('a[href="/catalog/inventar-dlya-mytya-okon/"]').attr('href', '/catalog/inventar-dlya-mytya-stekol/');
$('a[href="/catalog/mashinki-dlya-chistki-obuvi-glavnaya/"]').attr('href', '/catalog/mashinki-dlya-chistki-obuvi/');


//dobavka
//jQuery(document).ready(function($) {

		$(function show_active_item() {
					var location = window.location.href;
					var cur_url = window.location.pathname;
					var catalog = '/catalog/';
					var uslugi = [
							"/kliningovye-uslugi/",
							"/arenda-gryazezashhitnyx-pokrytij/",
							"/servisnyj-centr/"
							];
					var company = [
							"/o-kompanii/",
							"/vakansii/",
							"/stati/"
							];
							
					
					if(cur_url != '/'){
						if (cur_url.indexOf('catalog') >= 0){
							$('#catalog_menu_item').find('a').addClass('active_menu_item');
                            //$('#catalog_menu_item').find('a').removeAttr('href');
						}
				
						$('.menu_items li').each(function () {
							var link = $(this).find('a').attr('href');

							if (link == cur_url) {
								$(this).find('a').addClass('active_menu_item');
                                $(this).find('a').removeAttr('href');
								
	//							if(uslugi.indexOf(cur_url) >= 0){
	//								$('#services_menu_item').find('a').addClass('active_menu_item');
	//							}
	//							if(company.indexOf(cur_url) >= 0){
	//								$('#company_menu_item').find('a').addClass('active_menu_item');
	//							}	
							}
						});
					}
				});
		
// Preloader:begin
        $(window).load(function() { // makes sure the whole site is loaded
/* $(".loader-magick")
 .fadeOut(400, function() {
 
 // animations first slide : begin
 $('.loader-wrapper').fadeOut(600);
 
 });*/

$('.bx-wrapper li').css({
'cursor':'pointer',
        });
        $('.flexslider').flexslider({
animation: "slide"
});
        if ($("div").is("#content-page .best-selling .masonry")) {

// Masonry (Cascading grid layout library) : begin
var container = document.querySelector('#content-page .best-selling .masonry');
        var msnry = new Masonry(container, {
        // options
        singleMode: false,
                isResizable: true,
                itemSelector: '#content-page .best-selling .masonry .one-product',
                'gutter': 4
        });
        // Masonry (Cascading grid layout library) : end
        }

if ($("div").is("#content-page.listing .masonry")) {

var container = $('#content-page.listing .masonry');
        // init
        container.isotope({
        // options
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
        //$('li.all.active a').click();

        }

$('.probox').css({'visibility':'visible'});
});
// Preloader:end

        $(document).ready(function() {


   wWidth = $(window).width();
   if (wWidth < 3000) {
        var height = 0;
        height = $('.slide-img').height();
        
        $('.demo').css({'height': height + 5});
    } else{
         $('.demo').css({'height': ''});
    }              

$('.similar-products-carousel').owlCarousel({

loop: true,
        nav: true,
        margin: 25,
        responsiveClass: true,
        responsiveRefreshRate: true,
        responsive: {
        0: {
        items: 1
        },
                768: {
                items: 2
                },
                960: {
                items: 4
                }
        }
});
        $('.another-products-carousel').owlCarousel({

loop: true,
        nav: true,
        margin: 25,
        responsiveClass: true,
        responsiveRefreshRate: true,
        responsive: {
        0: {
        items: 1
        },
                768: {
                items: 2
                },
                960: {
                items: 4
                }
        }
});
        $('.banner-page ul').bxSlider({
infiniteLoop: false,
        speed: 900,
        easing: 'ease-in-out',
        responsive: true,
        pager: false,
        auto: true,
        pause: 6000,
        autoStart: true,
        onSliderLoad: function(){
        $(".bx-wrapper").css("visibility", "visible");
                $(".bx-wrapper img").css("visibility", "visible");
        }
});
        $('.elem-form input[name="phone"]').mask("+7 (999) 999-99-99");
        $('#footer-page').append('<link rel="stylesheet" href="https://cdn.saas-support.com/widget/cbk.css">\n\
<script type="text/javascript" src="https://cdn.saas-support.com/widget/cbk.js?wcb_code=9ee813d838682d3c26e41edad2f648fc" charset="UTF-8" async></script>\n\
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700&subset=latin,cyrillic-ext,greek-ext" rel="stylesheet" type="text/css">');
        //$('body').on('click', '.bx-pager-link[data-slide-index="0"], .bx-wrapper li.i-robot__ban', function() { window.location.href = '/catalog/irobot-roomba-980/'; });
        //$('body').on('click', '.bx-pager-link[data-slide-index="0"], .bx-wrapper li.first', function() { window.location.href = '/kliningovye-uslugi/'; });
        //$('body').on('click', '.bx-pager-link[data-slide-index="1"], .bx-wrapper li.second', function() { window.location.href = '/catalog/kliningovoe-oborudovanie/'; });
        //$('body').on('click', '.bx-pager-link[data-slide-index="2"], .bx-wrapper li.thrid', function() { window.location.href = '/roboty-pylesosy/'; });
        //$('body').on('click', '.bx-pager-link[data-slide-index="3"], .bx-wrapper li.fourth', function() { window.location.href = '/arenda-gryazezashhitnyx-pokrytij/'; });
        //$('body').on('click', '#banner-page li.night', function() { window.location.href = '/catalog/braava-jet/'; });

        //$('body').on('click', '.irobot .bx-wrapper li.first', function() { window.location.href = '/catalog/roboty-pylesosy/'; });
        //$('body').on('click', '.irobot .bx-wrapper li.second', function() { window.location.href = '/catalog/roboty-pylesosy/'; });
        //$('body').on('click', '.irobot .bx-wrapper li.thrid', function() { window.location.href = '/catalog/roboty-pylesosy/'; });
        //$('body').on('click', '.irobot .bx-wrapper li.fourth', function() { window.location.href = '/catalog/roboty-pylesosy/'; });
        //$('body').on('click', '.irobot .bx-wrapper li.night', function() { window.location.href = '/catalog/braava-jet/'; });


        // placeholder : begin
        $('input,textarea').focus(function(){
$(this).data('placeholder', $(this).attr('placeholder'))
        $(this).attr('placeholder', '');
        });
        $('input,textarea').blur(function(){
$(this).attr('placeholder', $(this).data('placeholder'));
        });
        // placeholder : end

        // main navigation. dropdown menu : begin
        $('#header-page .top-line nav > ul > li.dropdown > a').on('click', function(e) {

$(this).next('ul').show();
        event.preventDefault();
        });
        // сlick outside block
        $(document).mouseup(function (e) {
var container = $('#header-page .top-line nav > ul > li > ul');
        if (container.has(e.target).length === 0){
container.hide();
        }
});
        // main navigation. dropdown menu : end

        // product : begin
        // кастомный инпут (логика работы):begin
        $('body').on('click', '.one-product form > .number .controls .minus, .one-item-page .information .inputs-and-soc-services>div:first-child form>.number .controls .minus, .listing .content .vertical-list .one-product-full-width > form .input-wrapper .controls .minus, .basket table tr td.input .number .controls .minus', function () {
var $input = $(this).closest('.input-wrapper').find('input[type="text"]');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $('.sub-cart').attr({'data-quantity':parseInt($input.val())})
        $input.change();
        return false;
        });
        $('body').on('click', '.one-product form > .number .controls .plus,.one-item-page .information .inputs-and-soc-services>div:first-child form>.number .controls .plus, .listing .content .vertical-list .one-product-full-width > form .input-wrapper .controls .plus, .basket table tr td.input .number .controls .plus', function () {
var $input = $(this).closest('.input-wrapper').find('input[type="text"]');
        $input.val(parseInt($input.val()) + 1);
        $('.sub-cart').attr({'data-quantity':parseInt($input.val())})
        $input.change();
        return false;
        });
        // кастомный инпут (логика работы):end

        // отслеживание ввода в инпут (запрет на кол-во товаров меньше 1)
        $('.one-product form>.number .input-wrapper,.one-item-page .information .inputs-and-soc-services>div:first-child form>.number .input-wrapper, .listing .content .vertical-list .one-product-full-width > form .input-wrapper').on('change', 'input[type="text"]', function(){
var val = $(this).val();
        if (val <= 0){
$(this).val('1');
        }
});
        $('.basket table tr td.input .number').on('change', 'input[type="text"]', function(){
var val = $(this).val();
        if (val <= 0){
$(this).val('1');
        var currentTr = $(this).closest('tr');
        var numbersProduct = $(this).val();
        var price = $(currentTr).find('.price > div').text();
        var price = parseInt(price.replace(/\D+/g, ""));
        var total = numbersProduct * price;
        function replacement(n) {
        var a = (n + "").split("").reverse().join("").replace(/(\d{3})/g, "$1 ").split("").reverse().join("").replace(/^ /, "");
                $(currentTr).find('.total > div:nth-child(1)').html(a + '&nbsp;' + '<span class="ruble">o</span>');
        }
replacement(total);
        }
});
        // запрет ввода любых символов, кроме цифр:begin
        var filter_keys = {
        apply_events: function ($jq, callback) {
        $jq.bind({
        keyup: function (e) {
        callback(e);
        },
                keydown: function (e) {
                callback(e);
                },
                keypress: function (e) {
                callback(e);
                }
        });
        },
                get_float: function (num) {
                var new_num = parseFloat((num.replace(/[^0-9]/gi, "")).toString());
                        new_num = isNaN(new_num) ? "" : new_num;
                        return new_num;
                },
                numbers: function ($input, callback) {
                $input.each(function () {
                var $this = $(this),
                        value;
                        filter_keys.apply_events($this, function (e) {
                        var type_event = e.type,
                                type;
                                value = $this.val();
                                type = String.fromCharCode(e.which);
                                if (type_event === "keypress") {

                        if (! /^\d+$/.test(type) && type) {
                        value = filter_keys.get_float(value);
                                $this.val(value);
                        }

                        } else {
                        value = $this.val();
                                if (! /^\d+$/.test(value)) {
                        value = filter_keys.get_float(value);
                                $this.val(value);
                        }
                        }

                        if (typeof callback == "function") callback($this, value, e);
                        });
                });
                }
        };
        $(function () {
        filter_keys.numbers($('.one-product form>.number .input-wrapper input[type="text"], .one-item-page .information .inputs-and-soc-services>div:first-child form>.number .input-wrapper input[type="text"], .listing .content .vertical-list .one-product-full-width > form .input-wrapper input[type="text"],.basket table tr td.input .number input[type="text"]'),
                function ($input, value, event) {});
        });
        // запрет ввода любых символов, кроме цифр:end

        // карточка товара. табы : начало
        $('.tabs-titles').on('click', 'div', function(event) {

                var dataTab = $(this).attr('data-tab');
                $('.tabs-titles div').removeClass('active')
                $(this).addClass('active');
                $('.tabs-content > div').removeClass('active')
                $('.tabs-content div[data-tab*="' + dataTab + '"]').addClass('active')

                event.preventDefault();
        });
        // плавная прокрутка к блокам к характеристикам
        $('.one-item-page .information > a').on('click', function(){

$('html, body').animate({
scrollTop: $('.more-about-product').offset().top
        }, 900);
        $('[data-tab="characteristics"]').click();
        });
        // карточка товара. табы : конец
        // product : end

        // список товаров (фильтр) : начало
        // левая колонка
        $('.listing .filters .filter-brand > div:last-child a').click(function(event) {

// $(this).toggleClass('active');
// event.preventDefault();

});
        // селект
        $('.listing .content .sorting .select').click(function(event) {

$(this).toggleClass('active');
        event.preventDefault();
        });
        $(document).mouseup(function (e) {
var container = $('.listing .content .sorting .select');
        if (container.has(e.target).length === 0){
container.removeClass('active');
        }
});
        // вид
        $('.listing .content .sorting .variant a').click(function(event) {

var data = $(this).attr('data-attr');
        if (data == 'tile'){
// $('.listing .content .masonry').addClass('active');
// $('.listing .content .vertical-list').removeClass('active');
$('.listing .content .masonry').removeClass('vertical-list');
        // Masonry (Cascading grid layout library) : begin
        // формирую сетку
        $('#content-page.listing .masonry').isotope({
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
        // Masonry (Cascading grid layout library) : end
        }

else if (data == 'list'){
// $('.listing .content .vertical-list').addClass('active');
// $('.listing .content .masonry').removeClass('active');
$('.listing .content .masonry').addClass('vertical-list');
        // Masonry (Cascading grid layout library) : begin
        $('#content-page.listing .masonry').isotope({
// options
itemSelector: '#content-page.listing .masonry .one-product',
        masonry: {
        gutter: 1
        },
        });
        // Masonry (Cascading grid layout library) : end
        }

$(this).closest('.variant').find('a').removeClass('active');
        $(this).addClass('active');
        event.preventDefault();
        });
        // список товаров (фильтр) : конец
                function clearbasket_frontend(){
                // если в корзине 0 рублей, то очищаем ее
                var total_cart_price = $('.basket .total-money').attr('data-total-price');
                        if (total_cart_price == "0") {

                $('.basket .container_12 .grid_12').fadeOut(1200, function(){

                $('.basket .container_12 .grid_12').html('<div class="clear-basket"><h1>Ваша корзина пуста</h1><p>Чтобы совершать покупку добавьте товар в корзину</p><p><a href="/">НАЧАТЬ ПОКУПКИ</a></p></div>');
                });
                        $('.basket .container_12 .grid_12').fadeIn();
                        $('.basket .container_12 .grid_7').hide();
                        $('.basket .container_12 .grid_5').hide();
                }
                }

        /* функция разделения пробелом разрядов */
        function nbspYes(n){
        var a = (n + "").split("").reverse().join("").replace(/(\d{3})/g, "$1 ").split("").reverse().join("").replace(/^ /, "");
                return a;
        }
        /* функция удаления проблеов */
        function nbspNo(price){
        return price.replace("/\s+/g", '');
        }


        // корзина : начало
        // удаление строки корзины
        $('.basket table tr td.total > div.remove').click(function(event) {

        $(this).closest('tr').animate({
        'opacity': '0'},
                200, function() {
                $(this).hide(100);
                });
                // обнуляем цену
                $(this).prev().html('0&nbsp;' + '<span class="ruble">o</span>');
                // обнуляем количество
                refreshSumm();
                // отправляем запрос на удаление из корзины
                jQuery.ajax({
                type: 'POST',
                        dataType: 'json',
                        url: $(this).attr('data-url-remove')
                });
                clearbasket_frontend()

                event.preventDefault();
        });
                // очистка корзины
                $('.title-and-clear.clearfix a').click(function(event) {
        jQuery.ajax({
        type: 'POST',
                dataType: 'json',
                url: '?clear=1'
        });
                $('.basket .total-money').attr({'data-total-price':'0'});
                clearbasket_frontend();
                // $('.basket table tr td.total').each( function(indx, element) {
                // 	$( this ).remove();
                // });
                // $('.basket table tr td.total > div.remove').each( function(indx, element) {
                // 	//$( this ).click();
                // });
        });
                // изменение цены : начало
                var totalSum = 0;
                $('.basket table tr td.input .number input[type="text"]').each(function(indx, element){
        var currentTr = $(this).closest('tr');
                var numbersProduct = $(this).val();
                var numbersProductOld = $(this).val();
                var price = $(currentTr).find('.price > div').text();
                var price = parseInt(price.replace(/\D+/g, ""));
                var total = numbersProduct * price;
                function replacement(n) {
                var a = (n + "").split("").reverse().join("").replace(/(\d{3})/g, "$1 ").split("").reverse().join("").replace(/^ /, "");
                        $(currentTr).find('.total > div:nth-child(1)').html(a + '&nbsp;' + '<span class="ruble">o</span>');
                }
        replacement(total);
                totalSum += total;
                //refreshSumm()

        });
                // общая сумма при загрузке
                        function replacementAll(k) {
                        var b = (k + "").split("").reverse().join("").replace(/(\d{3})/g, "$1 ").split("").reverse().join("").replace(/^ /, "");
                                $('.basket .total-money div').html('<span>Итого:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>' + b + '&nbsp;' + '<span class="ruble">o</span>');
                        }

                // общая сумма
                function refreshSumm() {
                var summa = 0;
                        $('.total.clearfix').each(function(i, val) {
                var p = parseInt($(this).find('div:first-child()').text().replace(/\s+/g, ''));
                        summa = summa + p;
                });
                        $('.basket .total-money div').html('<span>Итого:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>' + nbspYes(summa) + '&nbsp;' + '<span class="ruble">o</span>');
                        $('.basket .total-money').attr({
                'data-total-price': summa
                });
                }

                // список товаров и их количество
                function hiddenBasket() {
                if ($('.basket table tr').show()) {
                var hidden_input = '';
                        $('.basket table tr').each(function() {
                var product_id = $(this).data('pr-id');
                        var product_count = $(this).attr('data-pr-count');
                        var input = '<input type="hidden" name="products[' + product_id + '][id]" value="' + product_id + '" >' + '<input type="hidden" name="products[' + product_id + '][count]" value="' + product_count + '" >';
                        hidden_input = hidden_input + input;
                });
                        $('form[name="cartcomplite"] .hiddendata').html(hidden_input);
                }
                }

                hiddenBasket();
                        replacementAll(totalSum);
                        // любое изменение input[type="text"]
                        $('.basket table tr td.input .number input[type="text"]').change(function() {

                var currentTr = $(this).closest('tr');
                        var numbersProduct = $(this).val();
                        var price = $(currentTr).find('.price > div').text();
                        var price = parseInt(price.replace(/\D+/g, ""));
                        var total = numbersProduct * price;
                        $(currentTr).attr({'data-pr-count' : numbersProduct});
                        function replacement(n) {

                        var a = (n + "").split("").reverse().join("").replace(/(\d{3})/g, "$1 ").split("").reverse().join("").replace(/^ /, "");
                                $(currentTr).find('.total > div:nth-child(1)').html(a + '&nbsp;' + '<span class="ruble">o</span>');
                        }

                replacement(total);
                        refreshSumm();
                        hiddenBasket();
                })
                        // изменение цены : конец


                        // помощь у чекбоксов : начало
                        $('.basket').on('click', '.help', function(event) {

                event.preventDefault();
                        $('.basket').find('.help').removeClass('active');
                        $(this).addClass('active');
                });
                        $(document).mouseup(function (e) {
                var container = $('.basket .help');
                        if (container.has(e.target).length === 0){
                container.removeClass('active');
                }
                });
                        // помощь у чекбоксов : конец

                        // корзина : конец
                        $('.bucket').css({'cursor':'pointer'})
                        $('body').on('click', '.bucket', function(){
                $(this).css({'cursor':'pointer'});
                        location.href = '/cart/';
                });
                if ($('.tabs-titles div').length > 0){

                $('.tabs-titles div')[0].click();
                }
                
				
                setTimeout(function(){
				
                $(document).append("<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700&subset=latin,cyrillic-ext,greek-ext' rel='stylesheet' type='text/css'>");
                        $(document).append('<link rel="stylesheet" href="https://cdn.saas-support.com/widget/cbk.css">');
                        $(document).append('<script type="text/javascript" src="https://cdn.saas-support.com/widget/cbk.js?wcb_code=9ee813d838682d3c26e41edad2f648fc" charset="UTF-8" async></script>');
                        $(document).append('<script src="//static-login.sendpulse.com/apps/fc3/build/loader.js" sp-form-id="c99b5c31e9696263a0e3d0141877d2d8270bda9cacfc920f35bc9695c23d8d2d"></script>');
                }, 1000);
				
                });
				

$(window).load(function() {
    if (window.location.href == 'https://www.uborka-tver.ru/catalog/professionalnye-pylesosy/') {
        console.log(window.location.href);
      $('.select a[data-sorting="popular"]').click();
      $('.sorting .select').removeClass('active');
    }
});


$(function(){
        //Всплывашка - уведомление о том, что товар добавлен в корзину.
        $('.popup_basket_add__overlay, .popup_basket_add__link._goon_buying').click(function(){
                $('.popup_basket_add').fadeOut();
        });
        $(document).on('click', '.add_to_cart_button', function(){
                console.log('basket');
                $('body').find('.popup_basket_add').fadeIn();
                setTimeout(function(){
                $('.popup_basket_add').fadeOut();
                }, 5000);
                var itemTitle = $(this).parent().parent().parent().parent().find('.descr a').text();
                console.log(itemTitle);
                $('.popup_basket_add__title').text('Товар: ' + itemTitle + ' добавлен в корзину.');
        });
});



jQuery(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});



jQuery(document).ready(function() {


        $('.serias9').each(function(){
                $(this).click(function(){
                        $(this).next().slideToggle();
                });
        });
      
});

console.log(3);