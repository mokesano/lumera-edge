<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationLookup_pubmed
 */

/**
 * @file plugins/citationLookup/pubmed/PubmedCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class PubmedCitationLookupPlugin
 * @ingroup plugins_citationLookup_pubmed
 *
 * @brief PubMed citation database connector plug-in.
 */

import('core.Modules.plugins.citationLookup.pubmed.CorePubmedCitationLookupPlugin');

class PubmedCitationLookupPlugin extends CorePubmedCitationLookupPlugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }
}

?>