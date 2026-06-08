<?php
declare(strict_types=1);

Lumera\Modules\Plugins\MetadataPlugin;
namespace Lumera\Modules\plugins\metadata\mods34;

/**
 * @defgroup plugins_metadata_mods34
 */

/**
 * @file plugins/metadata/mods34/CoreMods34MetadataPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CoreMods34MetadataPlugin
 * @ingroup plugins_metadata_mods34
 *
 * @brief Abstract base class for MODS metadata plugins
 */

class CoreMods34MetadataPlugin extends MetadataPlugin {

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
		return 'Mods34MetadataPlugin';
	}

	/**
	 * @see CorePlugin::getDisplayName()
	 */
	function getDisplayName(): string {
		return __('plugins.metadata.mods34.displayName');
	}

	/**
	 * @see CorePlugin::getDescription()
	 */
	function getDescription(): string {
		return __('plugins.metadata.mods34.description');
	}
}

?>