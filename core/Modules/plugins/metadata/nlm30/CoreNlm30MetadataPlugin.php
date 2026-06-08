<?php
declare(strict_types=1);

Lumera\Modules\Plugins\MetadataPlugin;
namespace Lumera\Modules\Plugins\Metadata\Nlm30;

/**
 * @defgroup plugins_metadata_nlm30
 */

/**
 * @file plugins/metadata/nlm30/CoreNlm30MetadataPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CoreNlm30MetadataPlugin
 * @ingroup plugins_metadata_nlm30
 *
 * @brief Abstract base class for NLM 3.0 metadata plugins
 */

class CoreNlm30MetadataPlugin extends MetadataPlugin {

	/**
	 * Constructor
	 */
    function __construct() {
        parent::__construct();
    }

	//
	// Override protected template methods from CorePlugin
	//
	
	/**
	 * @see CorePlugin::getName()
	 */
	function getName(): string {
		return 'Nlm30MetadataPlugin';
	}

	/**
	 * @see CorePlugin::getDisplayName()
	 */
	function getDisplayName(): string {
		return __('plugins.metadata.nlm30.displayName');
	}

	/**
	 * @see CorePlugin::getDescription()
	 */
	function getDescription(): string {
		return __('plugins.metadata.nlm30.description');
	}
}

?>