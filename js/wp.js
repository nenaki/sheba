(function($) {

	$window = $(window);

	$('.tnp-firstname').attr('placeholder', 'Enter Your Name');
	$('.tnp-email').attr('placeholder', 'Enter Your Email');
	$('.tnp-field > label').hide();

/*================================= NAVIGATION ===============================*/

	// Set the main navigation
	$('.smartmenu').smartmenus({
        markCurrentItem: true
	});

	// Activate the menu when the hamburger is clicked
	$('.hamburger').unbind('click').on('click', function(){
		$(this).toggleClass('open');
		$('.smartmenu').toggleClass('visible');
        console.log('clicked');
	});

	// Remove the .visible class on navigation if window resized from mobile navigation
	$window.on('resize' , function() {
		if($window.width() >= 1000) {
			$('.smartmenu').removeClass('visible');
			$('.hamburger').removeClass('open');
		}
	}).trigger('resize');

	/*================================= SCROLL TO HASH ===============================*/

$('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

		/*================================= PREVENT DEFAULT ACTION ON LINKS ===============================*/

			$('.void').on('click', function(e) {
				e.preventDefault();
			});

		/*================================= LAZY LOAD ===============================*/

		//var bLazy = new Blazy();


		/*================================= STYLE DROPDOWNS WITH CHOSEN PLUGIN ===============================*/

		$("select:not(.no-chosen)").chosen();


	/*================================= LIGHTBOX POPUP ===============================*/
    $('.lightbox').magnificPopup({
      type: 'iframe',
      iframe: {
         markup: '<div class="mfp-iframe-scaler" id="question-time">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe christmas-iframe" frameborder="0" allowfullscreen webkitallowfullscreen mozallowfullscreen></iframe>'+
                  '</div>'
    }});



})( jQuery );