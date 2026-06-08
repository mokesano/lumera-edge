<?php
declare(strict_types=1);

Lumera\Modules\Plugins\ThemePlugin;
/**
 * @file plugins/themes/uncommon/UncommonThemePlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class UncommonThemePlugin
 * @ingroup plugins_themes_uncommon
 *
 * @brief "Uncommon" theme plugin
 */

class UncommonThemePlugin extends ThemePlugin {
    
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName(): string {
		return 'UncommonThemePlugin';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName(): string {
		return 'Uncommon Theme';
	}

	/**
	 * Get the description of this plugin.
	 * @return String
	 */
	function getDescription(): string {
		return 'Chunky, blue, solid layout';
	}

	/**
	 * Get the style sheet filename of this plugin.
	 */
	function getStylesheetFilename() {
		return 'uncommon.css';
	}
	
	/**
	 * Get the locale filename of this plugin.
	 */
	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>