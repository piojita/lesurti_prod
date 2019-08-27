//Slick Slider
$(document).ready(function(){
	$('.prod__items').slick({
		centerMode: true,
		centerPadding: '30px',
		slidesToShow: 2,
		slidesToScroll: 1,
		infinite: true,
		initialSlide:1,
		// nextArrow: $('.prod__arrow--next'),
		// prevArrow: $('.prod__arrow--prev'),
		prevArrow: '<div class="prod__arrow prod__arrow--prev"><i class="material-icons">arrow_back_ios</i></div>',
		nextArrow: '<div class="prod__arrow prod__arrow--next"><i class="material-icons">arrow_forward_ios</i></div>',
		responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 2
			}
		},
		{
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}
		]

	});

	$('.sprod__items').slick({
		dots: false,
		dots: false,
		prevArrow: $('.sprod__nav-prev'),
		nextArrow: $('.sprod__nav-next'),
		responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: true,
				centerMode: false,
				slidesToShow: 1,
				dots: false,
				dotsClass:'slick-dots'
			}
		}]

	});
	$('.sprod__thumb-item').click(function() {
		$('.sprod__items').slick('slickGoTo',$(this).index());
		
	});

	$(".header__toggler").click(function () {
		$(".header").toggleClass("header--toggled");
	});

	//Slick Slider en el single
	
	var scroll = new SmoothScroll('a[href*="#"]', {
		speed: 500,
		header: '[data-scroll-header]',
		clip: true,
		updateURL: true,

		
	});

	var main = $('.single__thumbs figure');
	$('[data-scroll]').click(function(event) {
		event.preventDefault();
		var full_url = this.href,
		parts = full_url.split('#'),
		trgt = parts[1],
		target_offset = $('#'+trgt).offset(),
		target_top = target_offset.top;
		
	});
	
	//wow libreria para animar al hacer scroll
	new WOW().init();

	$(".cantidad__button--mas").click(function(){
		var parent = $(this).parent();
		var button = parent.find(".cantidad__anadir")
		var span = button.find("span");
		var valor = parseInt(span.html());
		span.html(valor+1);

		$('[name="quantity"]').val(valor+1);
	});
	$(".cantidad__button--menos").click(function(){
		var parent = $(this).parent();
		var button = parent.find(".cantidad__anadir")
		var span = button.find("span");
		var valor = parseInt(span.html());
		if (valor > 0) {
			span.html(valor-1);
			$('[name="quantity"]').val(valor-1);
		}
		else{
			$('[name="quantity"]').val(0);
			return false;
		}
	});
	$(".cantidad__anadir").click(function () {
		console.log("lick");
		$(".modalproducto").fadeIn("fast");
	});
	$(".modalproducto__close, .modalproducto__space").click(function () {
		$(".modalproducto").fadeOut("slow");
	});
	$(".eheader__toggler").click(function () {
		$(".eheader").toggleClass("eheader--toggled");
	});

});

$.fn.isInViewport = function () {
	let elementTop = $(this).offset().top;
	let elementBottom = elementTop + $(this).outerHeight();

	let viewportTop = $(window).scrollTop()+100;
	let viewportBottom = viewportTop + $(window).height();

	return elementBottom > viewportTop && elementTop < viewportBottom;
};

//Scroll header
$(window).scroll(function() {
	var main = $('.single__slideshow figure');
	var thumbs = $('.single__thumbs figure');
	if ($(this).scrollTop() > 1){ 
		//si se hace scroll agregar la clase header--sticky al header 
		$('header').addClass("header--sticky");
		//si #id es visible agregar a la url el #id
		$(main).each(function(i,elem){
			var esVisible=$(elem).isInViewport();
			if(esVisible==true){
				var figura = $(elem).attr('id');
				//window.history.pushState(null, null, '#'+figura);
				//busca dentro de thumbs #id-número y dispara un click (lo cual une con la función de arriba)
				var _elem=$(thumbs).find('a[href="#'+figura+'"]:first')[0];
				$(thumbs).removeClass('active');
				$(_elem).parent().addClass('active');
				// $(_elem).trigger('click');
				return false;
			}

		});
		// isInViewport()
	}
	else{
		$('header').removeClass("header--sticky");
	}
});


