(function( $ ) {
	
	'use strict';
	
	$(function () {

        if ( $('.zypento-hero-two').length ) {
            var heroTwoImage = $('.zypento-hero-two .zypento-hero-two-image').find('img').attr('src');
            console.log(heroTwoImage);
        }
        

        AOS.init();

    });


})( jQuery );