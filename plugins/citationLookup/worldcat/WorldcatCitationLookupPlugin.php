<?php
declare(strict_types=1);

Lumera\Modules\Plugins\CitationLookup\Worldcat\CoreWorldcatCitationLookupPlugin;
/**
 * @defgroup plugins_citationLookup_worldcat
 */

/**
 * @file plugins/citationLookup/worldcat/WorldcatCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class WorldcatCitationLookupPlugin
 * @ingroup plugins_citationLookup_worldcat
 *
 * @brief WorldCat citation database connector plug-in.
 */

class WorldcatCitationLookupPlugin extends CoreWorldcatCitationLookupPlugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }
}

?>