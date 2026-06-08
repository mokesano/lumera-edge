<?php
declare(strict_types=1);

Lumera\Modules\Plugins\Metadata\Mods34\Schema\CoreMods34Schema;
/**
 * @defgroup plugins_metadata_mods34_schema
 */

/**
 * @file plugins/metadata/mods34/schema/Mods34Schema.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Mods34Schema
 * @ingroup plugins_metadata_mods34_schema
 * @see CoreMods34Schema
 *
 * @brief Wizdam-specific implementation of the Mods34Schema.
 */

class Mods34Schema extends CoreMods34Schema {

    /**
     * Constructor
     */
    public function __construct() {
        // Configure the MODS schema.
        parent::__construct(ASSOC_TYPE_ARTICLE);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function Mods34Schema() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor " . get_class($this) . "(). Please refactor to use __construct().",
                E_USER_DEPRECATED
            );
        }
        $args = func_get_args();
        call_user_func_array([$this, '__construct'], $args);
    }
}

?>