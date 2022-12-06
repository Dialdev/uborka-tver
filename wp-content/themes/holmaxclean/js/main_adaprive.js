($(document).on('ready', function() {
    $('div[data-src],a[data-src]').each(function() {
        setElementBackground.apply(this);
    });

    function setElementBackground() {
        var elem = $(this);
        var src = elem.data('src').split(',');
        var result = '';
        if (src.length >= 2) {
            for (var i = 0; i < src.length; i++) {
                if (i === src.length - 1) {
                    result += ' url(' + src[i] + ')';
                } else {
                    result += ' url(' + src[i] + '),';
                }
            }
        } else {
            result = ' url(' + src[0] + ')';
        }

        elem.css('background-image', result);
    }

    var noveltyCrsl = $('.novelty-carousel .woocommerce');
    var lgtpCrsl = $(".logotypes-carousel");
   // var similarCrsl = $(".similar-products-carousel");
   // var anotherCrsl = $(".another-products-carousel");
    var thmbCrsl = $(".thumbnails-wrapper");

    // if (noveltyCrsl.length != 0) {
    //     noveltyCrsl.owlCarousel({
    //         loop: true,
    //         margin: 20,
    //         nav: true,
    //         dots: false,
    //         responsiveClass: true,
    //         responsiveRefreshRate: true,
    //         responsive: {
    //             0: {
    //                 items: 1
    //             },
    //             550: {
    //                 items: 2
    //             },
    //             768: {
    //                 items: 3
    //             },
    //             960: {
    //                 items: 4
    //             }
    //         }
    //     });
    //     // noveltyCrsl.trigger('refresh.owl.carousel');
    // }

    if (lgtpCrsl.length != 0) {
        var lgtpOwl = lgtpCrsl.data().owlCarousel;
        lgtpOwl.options.responsiveClass = true;
        lgtpOwl.options.responsiveRefreshRate = true;
        lgtpOwl.options.responsive = {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            550: {
                items: 3
            },
            768: {
                items: 4
            },
            960: {
                items: 5
            }
        };
        lgtpCrsl.trigger('refresh.owl.carousel');
    }

    /*if (similarCrsl.length != 0) {
        var similarOwl = similarCrsl.data().owlCarousel;
        similarOwl.options.responsiveClass = true;
        similarOwl.options.responsiveRefreshRate = true;
        similarOwl.options.responsive = {
            0: {
                items: 1
            },
            450: {
                items: 2
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
        };
        similarCrsl.trigger('refresh.owl.carousel');
    }*/

	
    /*if (anotherCrsl.length != 0) {
        var anotherOwl = anotherCrsl.data().owlCarousel;
        anotherOwl.options.responsiveClass = true;
        anotherOwl.options.responsiveRefreshRate = true;
        anotherOwl.options.responsive = {
            0: {
                items: 1
            },
            450: {
                items: 2
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
        };
        anotherOwl.trigger('refresh.owl.carousel');
    }*/
	
    if (thmbCrsl.length != 0) {
        var thmbOwl = thmbCrsl.data().owlCarousel;
        thmbOwl.options.responsiveClass = true;
        thmbOwl.options.responsiveRefreshRate = true;
        thmbOwl.options.responsive = {
            0: {
                items: 3
            },
            400: {
                items: 4
            }
        };
        thmbCrsl.trigger('refresh.owl.carousel');
    }

    var menu = $("#header-page nav");
    var burgerIcon = $(".burger--icon");


    function hideMenu() {
        menu.hide();
        burgerIcon.parent().removeClass("opened");

    }

    function showMenu() {
        menu.show();
        burgerIcon.parent().addClass("opened");
    }

    function toggleMenu() {
        if (menu.css("display") === 'block')
            hideMenu();
        else
            showMenu();
    }

    $(".burger--icon,.burger--caption").click(function(e) {
        e.stopPropagation();
        toggleMenu();
    });

    $("body,html").click(function(e) {
        if (window.innerWidth <= 960 && e.target.closest("#header-page nav") == null)
            hideMenu();
    })

    $(window).resize(function() {
        if (window.innerWidth <= 960)
            hideMenu();
        else
            showMenu();
    })



}))
