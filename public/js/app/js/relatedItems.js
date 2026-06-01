/**
 * js/relatedItems.js
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Initialization functions for reading tools related items javascript
 */

/**
 * initRelatedItems
 * Initializes the related items block's roll-up feature
 */
function initRelatedItems() {
	$(document).ready(function(){
		$("#relatedItems").hide();
		$("#toggleRelatedItems").show();
	    $("#hideRelatedItems").click(function() {
			$("#relatedItems").hide('slow');
			$("#hideRelatedItems").hide();
			$("#showRelatedItems").show();
		});
		$("#showRelatedItems").click(function() {
			$("#relatedItems").show('slow');
			$("#showRelatedItems").hide();
			$("#hideRelatedItems").show();
		});
	});
}
