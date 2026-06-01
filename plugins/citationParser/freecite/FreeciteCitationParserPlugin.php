<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationParser_freecite
 */

/**
 * @file plugins/citationParser/freecite/FreeciteCitationParserPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FreeciteCitationParserPlugin
 * @ingroup plugins_citationParser_freecite
 *
 * @brief FreeCite citation extraction connector plug-in.
 */

import('core.Modules.plugins.citationParser.freecite.CoreFreeciteCitationParserPlugin');

class FreeciteCitationParserPlugin extends CoreFreeciteCitationParserPlugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }
}

?>