<?php
declare(strict_types=1);

Lumera\Modules\Plugins\CitationPlugin;
/**
 * @file plugins/citationFormats/mla/MlaCitationPlugin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class MlaCitationPlugin
 * @ingroup plugins_citationFormats_mla
 *
 * @brief MLA citation format plugin
 */

class MlaCitationPlugin extends CitationPlugin {
    
    /**
     * @param string $category
     * @param string $path
     * @param int|null $mainContextId
     * @return bool
     */
    public function register(string $category, string $path): bool {
        $success = parent::register($category, $path);
        $this->addLocaleData();
        return $success;
    }

    /**
     * Get the name of this plugin. The name must be unique within
     * its category.
     * @return string name of plugin
     */
    public function getName(): string {
        return 'MlaCitationPlugin';
    }

    /**
     * @return string
     */
    public function getDisplayName(): string {
        return __('plugins.citationFormats.mla.displayName');
    }

    /**
     * @return string
     */
    public function getCitationFormatName(): string {
        return __('plugins.citationFormats.mla.citationFormatName');
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return __('plugins.citationFormats.mla.description');
    }

}

?>