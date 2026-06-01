<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationLookup_isbndb
 */

/**
 * @file plugins/citationLookup/isbndb/IsbndbCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class IsbndbCitationLookupPlugin
 * @ingroup plugins_citationLookup_isbndb
 *
 * @brief ISBNdb citation database connector plug-in.
 */

import('core.Modules.plugins.citationLookup.isbndb.CoreIsbndbCitationLookupPlugin');

class IsbndbCitationLookupPlugin extends CoreIsbndbCitationLookupPlugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }
}

?>