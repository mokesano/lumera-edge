<?php
declare(strict_types=1);

namespace Lumera\Modules\Tools;

use Lumera\Modules\CliTool\UpgradeTool;

/**
 * @file core/Modules/tools/upgrade.php
 *
 * Copyright (c) 2013-2025 Lumera Edge Project
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Upgrade
 * @ingroup tools
 *
 * @brief CLI tool for upgrading Lumera Edge.
 * [LUMERA EDGE EDITION] Lumera Edge Upgrade Tool Implementation.
 */

class AppUpgradeTool extends UpgradeTool {
    /**
     * Constructor.
     * @param array $argv command-line arguments
     */
    public function __construct(array $argv = []) {
        // [WIZDAM FIX] Call parent::__construct which handles command validation and argument parsing.
        parent::__construct($argv);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function __construct($argv = []) {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor parent::" . get_class($this) . "(). Please refactor to use parent::__construct().",
                E_USER_DEPRECATED
            );
        }
        $args = func_get_args();
        call_user_func_array([$this, '__construct'], $args);
    }
}

// [LUMERA EDGE] Safe instantiation
// CLI execution guard
if (PHP_SAPI === 'cli' && isset($argv) && basename(__FILE__) === basename($argv[0] ?? '')) {
    $tool = new AppUpgradeTool($argv);
    $tool->execute();
}