<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationParser_paracite
 */

/**
 * @file plugins/citationParser/paracite/ParaciteCitationParserPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class ParaciteCitationParserPlugin
 * @ingroup plugins_citationParser_paracite
 *
 * @brief ParaCite citation extraction connector plug-in.
 */

import('core.Modules.plugins.citationParser.paracite.CoreParaciteCitationParserPlugin');

class ParaciteCitationParserPlugin extends CoreParaciteCitationParserPlugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }
}

?>