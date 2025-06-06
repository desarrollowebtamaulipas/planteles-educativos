
jQuery(document).ready(function($) {
	
	//----------------------------//
	//        Sticky Header       //
	//----------------------------//
	var trigger_sticky_header = function() {
		var header = $('.header'),
		breadcrumbs = $('#breadcrumbs');
	
		var st = $(window).scrollTop();
		var header_bot = header.position().top + header.height();
		if (header.hasClass('barra-admin')) header_bot -= 32;
	
		if (st > header_bot) {
			header.addClass('fixed-header');
			breadcrumbs.addClass('fixed-header');
			setTimeout(function () {
				header.addClass('visible');
			}, 50);
		} else {
			header.removeClass('fixed-header');
			breadcrumbs.removeClass('fixed-header');
			header.removeClass('visible');
		}
	}
	$(window).scroll(trigger_sticky_header);
	
	//----------------------------//
	//       Menu responsive      //
	//----------------------------//
	
	// Menu home flecha rotate
	$("#menu-container ul").children("li.menu-item-has-children").addClass("principal");
	$("li.principal").children("ul.sub-menu").children("li.menu-item-has-children").addClass("li-hijo-submenu");
	
	// Menu responsive
	$(".nav-menu").children("li.menu-item-has-children").addClass("padre").append('<i class="fa-solid fa-chevron-right menu-flecha"></i>');
	$("li.padre i.menu-flecha").click(function(event) {
		var $object = $(this);
		$(this).toggleClass("open");
		if (!$(this).hasClass("open")) {
			$(this).parent('li.menu-item-has-children').children('a').removeClass('sub-open');
			$(this).parent('li.menu-item-has-children').children('ul.sub-menu').css('height', 0).addClass('sub-menu-a');
			$(this).parent().css('height', 50);
			$('a').removeClass('sub-open');
		} else {
			$object.parent('.menu-item-has-children').children('a').addClass('sub-open');
			var alto = $object.parent('li.menu-item-has-children').children('ul.sub-menu').children().length;
			if (alto > 0) {
				var hijosdeHermanosdelLi = 0;
				var padreUl = $object.parent('li.menu-item-has-children').children('ul.sub-menu').children();
				$(padreUl).each(function(k, v) {
					if ($(v).children("i.open").length > 0) {
						hijosdeHermanosdelLi += $(v).children('ul.sub-menu').children().length;
					}
				});
			}
			alto = (hijosdeHermanosdelLi + alto) * 50;
			var alturapadre = alto + 50;
			$object.parent('li.menu-item-has-children').css('height', alturapadre);
			$object.parent('li.menu-item-has-children').children('ul.sub-menu').css('height', alto);
			$object.parent('li.menu-item-has-children').children('i.menu-flecha').addClass('open');
		}
	});
	
	// Poner spam a los hijos 
	if ($("li.padre").children("ul.sub-menu").children("li.menu-item-has-children").children("ul.sub-menu").length > 0) {
		$("li.padre").children("ul.sub-menu").children("li.menu-item-has-children").append('<i class="fa-solid fa-chevron-right menu-flecha"></i>');
		$("li.padre").children("ul.sub-menu").children("li.menu-item-has-children").addClass("hijo");
	}
	$("li.hijo i.menu-flecha").click(function(e) {
		// Abre el menú
		var hijos = $(this).parent('li.menu-item-has-children').parent('ul.sub-menu').children().length;
		$(this).toggleClass("open");
		if ($(this).hasClass("open")) {
			$(this).parent('.menu-item-has-children').children('a').addClass('sub-open');
			var altoPadre = $(this).parent('li.menu-item-has-children').parent('ul.sub-menu').children().length;
			var altoHijos = $(this).parent('li.menu-item-has-children').children('ul.sub-menu').children().length;
			var alto = $(this).parent('li.menu-item-has-children').children('ul.sub-menu').children().length;
			var hijosdeHermanosdelLi = 0;
			var padreUl = $(this).parent('li.menu-item-has-children').parent('ul.sub-menu').children();
			var padreLiID = $(this).parent('li.menu-item-has-children').attr('id');
			$(padreUl).each(function(k, v) {
				if (padreLiID != $(v).attr("id"))
					if ($(v).children("i.open").length > 0) {
						hijosdeHermanosdelLi += $(v).children('ul.sub-menu').children().length;
					}
			});
			if ($(this).hasClass("open")) altoTotal = (altoPadre + altoHijos + (hijosdeHermanosdelLi + 1)) * 50;
			var contenedor = (hijosdeHermanosdelLi + hijos + altoHijos + 1) * 50;
			alto = alto * 50;
			$(this).parent('li.menu-item-has-children').children('ul.sub-menu').css('height', alto);
			$(this).parent('li.menu-item-has-children').css('height', alto + 50);
			$(this).parent('li.menu-item-has-children').parent('ul.sub-menu').parent().css('height', contenedor);
			$(this).parent('li.menu-item-has-children').parent('ul.sub-menu').css('height', altoTotal - 50);
			$(this).parent('li.menu-item-has-children').children('i.menu-flecha-hijo').addClass('open');
		} else {
			// Cierra el menú
			$(this).parent('li.menu-item-has-children').children('a').removeClass('sub-open');
			$(this).parent('li.menu-item-has-children').children('ul.sub-menu').css('height', 0);
			$(this).parent('li.menu-item-has-children').children('i.menu-flecha-hijo').removeClass('open');
			var hijosdeHermanosdelLi = 0;
			var padreUl = $(this).parent('li.menu-item-has-children').parent('ul.sub-menu').children();
			var padreLiID = $(this).parent('li.menu-item-has-children').attr('id');
			$(padreUl).each(function(k, v) {
				if (padreLiID != $(v).attr("id"))
					if ($(v).children("i.open").length > 0) {
						hijosdeHermanosdelLi += $(v).children('ul.sub-menu').children().length;
					}
			});
			var altoPadre = $(this).parent('li.menu-item-has-children').parent('ul.sub-menu').children().length;
			altoPadre = (altoPadre + hijosdeHermanosdelLi) * 50;
			$(this).parent('li.menu-item-has-children').parent('ul.sub-menu').css('height', altoPadre);
			$(this).parent('li.menu-item-has-children').parent('ul.sub-menu').parent().css('height', altoPadre + 50);
			$(this).parent('li.menu-item-has-children').css('height', 50);
		}
	});
	
	//----------------------------//
	//      Filtro Buscador       //
	//----------------------------//
	
	var selected = 0;
	  $('.form-buscador .form-control').on('keyup', function(e){
		  var value = $(this).val(); 
		  if(value)
			  $(this).addClass("buscando");
		  else
			  $(this).removeClass("buscando");
			  
		  $('.buscador-filtro span').html(value);
		  
		  $('.buscador-filtro a').each(function(i,e){
			  var buscar = $(e).data('buscar');
			  $(e).attr('href', "?s=" + value + "&buscar=" + buscar);
		  });
		  
		  // e.keyCode = 40 Abajo
		  // e.keyCode = 38 Arriba
		  
		  if(e.keyCode == 40){
			  selected++;
		  } else if(e.keyCode == 38){
			  selected--;
		  }
		  
		  if(selected > 1)
			  selected = 1;
		  if(selected < 0)
			  selected = 0;
	
		  $('.buscador-filtro li').removeClass('selected').eq(selected).addClass("selected");
		  
		  if(e.keyCode == 40 || e.keyCode == 38){
			  var buscar = $('.buscador-filtro li').eq(selected).find('a').data('buscar');
			  $('.form-buscador input[name=buscar]').val(buscar);
			  e.preventDefault();
			  return false;
		  }
	  });
	
	
	//----------------------------//
	//          Swiper JS         //
	//----------------------------//
	
	// Swiper
	const swiperHero = new Swiper('.hero.swiper', {
		autoplay: {
	   	delay: 8000,
	 	},
		speed: 500,
		loop: true,
		pagination: {
			el: ".swiper-pagination",
		},
	});
	
	const swiperSitios = new Swiper('.sitios-de-interes.swiper', {
		autoplay: {
		   delay: 8000,
		 },
		speed: 500,
		loop: true,
		slidesPerView: 2,
		  spaceBetween: 16,
		  // Responsive breakpoints
		  breakpoints: {
			480: {
				slidesPerView: 4,
				spaceBetween: 16
			},
			992: {
				slidesPerView: 6,
				spaceBetween: 16
			}
		  }
	});
	
	const swiperGallery = new Swiper('.swiper-gallery.swiper', {
		autoplay: {
			delay: 8000,
		 },
		speed: 500,
		loop: true,
		slidesPerView: 2,
		spaceBetween: 16,
		// Responsive breakpoints
		breakpoints: {
			480: {
				slidesPerView: 3,
				spaceBetween: 16
			},
			992: {
				slidesPerView: 4,
				spaceBetween: 16
			}
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true
		},
	});
	
	const swiperInteres = new Swiper("#sidebar-temas-interes", {
		spaceBetween: 30,
		centeredSlides: true,
		loop: true,
		autoplay: {
			delay: 5000
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		}
	});
	
	// Limitar la lista de temas de interés a 5
	$('.lista-temas').each(function() {
		$(this).find('li:gt(4)').remove();
	});
	
	// Fancybox
	Fancybox.bind("[data-fancybox]", {
	  // Your custom options
	});
	
	// Encontrar etiquetas <a> con la clase fancybox y convertirlo a data
	$("li.menu-item.fancybox").each(function() {
		$(this).find("a").attr("data-fancybox", "");
	});
	
	$("a.fancybox").each(function() {
		$(this).attr("data-fancybox", "");
	});
	
	$('.alert a').each(function(){
		$(this).addClass('alert-link');
	})
	
	// CounterUp
	$('.counter').counterUp({
		time: 2000
	});
	
	// Sticky Aside
	if ($('.widget.js-sticky-widget').length) {
		var stickyEl = new Sticksy('.widget.js-sticky-widget', {topSpacing: 120})
		stickyEl.onStateChanged = function (state) {
			if(state === 'fixed') stickyEl.nodeRef.classList.add('widget--sticky')
			else stickyEl.nodeRef.classList.remove('widget--sticky')
		}
	}
	
	// Agregar forzosamente el target blank a destinos pdf
	$('a[href$=".pdf"], a[href*=".pdf?"]').each(function() {
		if (!$(this).attr('target')) {
			$(this).attr('target', '_blank');
			$(this).attr('rel', 'noopener noreferrer');
		}
	});

});