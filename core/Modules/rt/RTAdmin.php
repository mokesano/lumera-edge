<?php
declare(strict_types=1);

Lumera\Modules\Rt\RTStruct;
namespace Lumera\Modules\Rt;

/**
 * @file core.Modules.rt/RTAdmin.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class RTAdmin
 * @ingroup rt
 *
 * @brief Class to process and respond to Reading Tools administration requests.
 * * REFACTORED: Wizdam Edition (PHP 8 Constructor, Visibility, Annotations)
 */

class RTAdmin {

    /**
     * Constructor.
     */
    public function __construct() {
        // Empty constructor
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function RTAdmin() {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::RTAdmin(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct();
    }

    /**
     * Import Reading Tool versions.
     * This function serves as a placeholder for version import logic.
     *
     * @return void
     */
    public function importVersions() { 
        // Empty implementation
    }
}

?>