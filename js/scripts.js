var app = {};
$(function(){
	console.log('its working');
	app.windowResize();
	app.mobileMenu();
	app.frontPageSlider();
	app.smoothScroll();
});

app.width = window.innerWidth;
app.windowResize = function(){
	if(app.width <= 767){
		$('.menu-header-menu-container').addClass('mobile');
	}

	$( window ).resize(function() {
		var originalWidth = app.width;
		app.width = window.innerWidth;
		//if the window size transitions from over 767 to under 767
		if((originalWidth >= 767) && (app.width < 767)){
			$('.menu-header-menu-container').addClass('mobile');
		}
		//if the window size transitions from under 767 to over 767
		if((originalWidth <= 767) && (app.width > 767)){
			$('.menu-header-menu-container').show();
			$('.menu-header-menu-container').removeClass('mobile');

		}
	});
}

app.mobileMenu = function(){
	$('.menu-toggle, #primary-menu li').on('click', function(){
		$('.menu-header-menu-container.mobile').slideToggle();
		$('#bars').toggleClass("on");
		var el = $('.menu-toggle h4');
		if (el.text() == el.data("text-swap")) {
		    el.text(el.data("text-original"));
		} else {
		    el.data("text-original", el.text());
		    el.text(el.data("text-swap"));
		}
		$(this).toggleClass('toggled');
	});
}

$("button").on("click", function() {
  var el = $(this);
  if (el.text() == el.data("text-swap")) {
    el.text(el.data("text-original"));
  } else {
    el.data("text-original", el.text());
    el.text(el.data("text-swap"));
  }
});


app.smoothScroll = function(){
	$('button.smoothScroll').on('click', function(){
		var id = $(this).data('link');
	    var offset = -80;
		if(id === 'international-weddings'){
			var offset = 80;
		}
	    // smooth scroll to the anchor id
	    $('html, body').animate({
	        scrollTop: ($("#" + id).offset().top + offset) + 'px'
	    }, 500, 'swing');
	});
}

app.frontPageSlider = function() {
	var speed = $('.frontpage-slider').data('slideSpeed');
    $('.frontpage-slider').slick({
    	slidesToShow: 1,
  		slidesToScroll: 1,
    	dots: false,
    	arrows: false,
    	pauseOnFocus: false,
    	pauseOnHover: false,
    	speed: 900,
    	fade: true,
  		cssEase: 'linear',
    	// autoplay: true,
  		autoplaySpeed: speed,
  		adaptiveHeight: true,
  		responsive: [
		    {
		      breakpoint: 890,
		      settings: {
		        arrows: false,
		      },
		    }]
    });

    // On before slide change
    //$('.frontpage-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
	//	$('.info-content').slideUp();
	//	$('.info-icon').each(function(i){
	//		$(this).removeClass('toggled');
	//	});
	//});
}