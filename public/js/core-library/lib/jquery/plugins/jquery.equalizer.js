/**
 * jquery.equalizer.js
 * 
 * Normalizes the heights of a set of elements.
 * 
 * Usage:  $('.someSelector').equalizeElementHeights();
 *
 * See: http://api.jquery.com/map
 * 
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 */
(function($){
	
	$.fn.equalizeElementHeights = function() {
		var maxHeight = this.map(function(index,element){
			return $(element).height();
		}).get();
		
		return this.height(Math.max.apply(this, maxHeight));
	};
})(jQuery);
