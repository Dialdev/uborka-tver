(function ($) {
//jQuery(document).ready(function($) {
	
    // detecting text changes : begin
    // http://zurb.com/playground/jquery-text-change-custom-event
    $('#header-page .bottom-line .search form input[type=text]').bind('textchange', function (event) {
        $('#header-page .bottom-line .search .dropdown-list').show();
    });
    // сlick outside block
    $(document).mouseup(function (e) {
        var container = $('#header-page .bottom-line .search .dropdown-list');
        if (container.has(e.target).length === 0) {
            container.hide();
        }
    });
    // detecting text changes : end

    // novelty (main page) : begin
    // owl carousel (http://owlgraphic.com/owlcarousel/index.html)
    $('.novelty-carousel .woocommerce').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsiveRefreshRate: true,
        responsive: {
            0: {
                items: 1
            },
            550: {
                items: 2
            },
            768: {
                items: 3
            },
            960: {
                items: 4
            }
        }
    });
    // novelty (main page) : end

    // logotypes-carousel (main page) : begin
    $('.logotypes-carousel').owlCarousel({
        items: 5,
        loop: true,
        nav: true,
        margin: 45
    });
    // logotypes-carousel (main page) : end
// height main page slider : begin
    function heightMainPageSlider() {

        var windowHeight = $(window).outerHeight(); // получаем высоту области просмотра браузера

        // если высота области просмотра меньше суммы высот шапки и слайдера
        if (windowHeight < 780) {

            $('#banner-page').addClass('minimize');

        }
        else {
            $('#banner-page').removeClass('minimize');
        }

    }
    heightMainPageSlider();

    // one-item : begin
    // slider
    $('.slider-wrapper').viewer();
    $('.one-item-page .fancybox').fancybox({
        padding: 0,
        nextEffect: 'fade'
    });
    //$('.img-wrapper').zoom();
    $('.thumbnails-wrapper').owlCarousel({
        items: 4,
        loop: false,
        nav: true,
        margin: 10
    });
    // one-item : end

    // clining services : begin
    $('.clining-services .fancybox').fancybox({
        padding: 0,
        nextEffect: 'fade'
    });
    // clining services : end
    //
    $('.fbox').fancybox({
        padding: 0,
        nextEffect: 'fade'
    });

    var timesearch;
    $("#presearch_input").keyup(function () {
        var search_input = $(this).val();

        $('#presearch_result').html('').hide();
        
        clearTimeout(timesearch);

        timesearch = setTimeout(function () {

            /*if($(window).width() < 767)
             return false;*/

            if ($.trim(search_input).length == 0)
            {
                $('#presearch_result').html('').hide();
                return false;
            }

            var dataString = 'query=' + search_input;
            if (search_input.length > 1) {
                $.ajax({
                    type: "POST",
                    url: "/presearch/",
                    data: dataString,
                    beforeSend: function () {
                        $('#presearch_result').html('').hide();
                    }, success: function (server_response) {
                        $('#presearch_result').html(server_response).show();
                    }
                });
            }
        }, 1000);
        return false;
    });

    $('#presearch_result').mouseleave(function () {
        $('#presearch_result').html('').hide();
    });

})(jQuery);
//});