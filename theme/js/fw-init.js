/*!
 * fweb v1.0.0
 * Wordpress Flottaweb Theme
 * (c) 2019 
 * MIT License
 * git+https://domenico@grimaldistudio.com@github.com/grimaldistudio/fweb.git
 */

(function ($) {

	'use strict';

	$(document).ready((function() {

		// Comments

		$('.commentlist li').addClass('card mb-3');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here

	}));
        
        /* menu INIT */
                var header = $(".start-style");
                
		$(window).scroll((function() {    
			var scroll = $(window).scrollTop();
		
			if (scroll >= 10) {
				header.removeClass('start-style').addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass('start-style');
			}
		}));
                
                //Menu On Hover		
                $('body').on('mouseenter mouseleave','.nav-item',(function(e){
                        if ($(window).width() > 750) {
                                var _d=$(e.target).closest('.nav-item');_d.addClass('show');
                                setTimeout((function(){
                                _d[_d.is(':hover')?'addClass':'removeClass']('show');
                                }),1);
                        }
                }));	

}(jQuery));

