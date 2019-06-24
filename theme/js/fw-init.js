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

}(jQuery));