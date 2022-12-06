/*
	jQuery viewer - 2015
*/
(function($) { 

$.fn.viewer = function() {
	var target = $('.img-wrapper');
	var thumbs = $('.thumbnails-wrapper a');
	var image = $('.thumbnails-wrapper a.active');
	var imgWidth;
	var imgSrc = $(image).attr('href');

	
	
	replaceImg();
	imgLoad( imgSrc );

	// строим список больших изображений для fancybox
	$(thumbs).each(function(index, el) {

		var curHref = $(this).attr('href');
		var fancyVisible = $(target).find('a.fancybox').attr('href');

		//$(this).closest('.slider-wrapper').find('.img-wrapper').append('<img src="' + curHref + '" alt="" class="fancybox new" rel="one-item-gallery">');
		//$(this).closest('.slider-wrapper').find('.img-wrapper').find('img[src="' + fancyVisible + '"].new').remove();

	});

	function replaceImg(){

		$(thumbs).on('click', function() {

			// удаляем все активные классы
			$(thumbs).removeClass('active');

			// добавляем к текущей ссылке активный класс
			$(this).addClass('active');

			// меняем href ссылочки
			imgSrc = $(this).attr('href');
			// загружаем новое большое изображение
			imgLoad( imgSrc );
			
			return false;

		});


	};

	function imgLoad( imgSrc ) {

    	var src = $(image).attr('src');

    	$(target).find('a.fancybox').css({
    		'background':'url(' + imgSrc + ') no-repeat',
    		'background-size':'cover'
    	});
    	$(target).find('a.fancybox').attr({ 'href':imgSrc });

    	//console.log(imgSrc);
	    	    
	}
}
})(jQuery);

