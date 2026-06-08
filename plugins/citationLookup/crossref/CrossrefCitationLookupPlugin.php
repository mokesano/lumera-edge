<?php
declare(strict_types=1);

Lumera\Modules\Plugins\CitationLookup\Crossref\CoreCrossrefCitationLookupPlugin;
/**
 * @defgroup plugins_citationLookup_crossref
 */

/**
 * @file plugins/citationLookup/crossref/CrossrefCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CrossrefCitationLookupPlugin
 * @ingroup plugins_citationLookup_crossref
 *
 * @brief CrossRef citation database connector plug-in.
 */

class CrossrefCitationLookupPlugin extends CoreCrossrefCitationLookupPlugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }
}

?>