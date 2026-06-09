<?php
declare(strict_types=1);

Lumera\Modules\Plugins\Plugin;
namespace Lumera\Modules\Plugins\CitationLookup\Worldcat;

/**
 * @defgroup plugins_citationLookup_worldcat
 */

/**
 * @file plugins/citationLookup/worldcat/CoreWorldcatCitationLookupPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CoreWorldcatCitationLookupPlugin
 * @ingroup plugins_citationLookup_worldcat
 *
 * @brief Cross-application WorldCat citation lookup plugin
 *
 * [WIZDAM REFACTOR]
 * - PHP 8.1+ Strict Compliance
 * - Explicit Visibility & Return Types
 */

class CoreWorldcatCitationLookupPlugin extends Plugin {
    
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    //
    // Override protected template methods from CorePlugin
    //
    
    /**
     * @see CorePlugin::register()
     * @param string $category
     * @param string $path
     */
    public function register(string $category, string $path, $mainContextId = null): bool {
        if (!parent::register($category, $path, $mainContextId)) {
            return false;
        }
        $this->addLocaleData();
        return true;
    }

    /**
     * @see CorePlugin::getName()
     * @return string
     */
    public function getName(): string {
        return 'WorldcatCitationLookupPlugin';
    }

    /**
     * @see CorePlugin::getDisplayName()
     * @return string
     */
    public function getDisplayName(): string {
        return __('plugins.citationLookup.worldcat.displayName');
    }

    /**
     * @see CorePlugin::getDescription()
     * @return string
     */
    public function getDescription(): string {
        return __('plugins.citationLookup.worldcat.description');
    }
}
?>