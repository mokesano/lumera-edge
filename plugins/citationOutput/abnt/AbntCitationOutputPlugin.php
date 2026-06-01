<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationOutput_abnt
 */

/**
 * @file plugins/citationOutput/abnt/AbntCitationOutputPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class AbntCitationOutputPlugin
 * @ingroup plugins_citationOutput_abnt
 *
 * @brief ABNT citation style plug-in.
 */

import('core.Modules.plugins.citationOutput.abnt.CoreAbntCitationOutputPlugin');

class AbntCitationOutputPlugin extends CoreAbntCitationOutputPlugin {
    
	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }
}

?>