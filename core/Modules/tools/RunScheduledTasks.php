<?php
declare(strict_types=1);

namespace Lumera\Modules\Tools;

use Lumera\Modules\CliTool\ScheduledTaskTool;

/**
 * @file core/Modules/Tools/RunScheduledTasks.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class RunScheduledTasks
 * @ingroup tools
 *
 * @brief CLI tool to execute a set of scheduled tasks.
 * [WIZDAM EDITION] Scheduled Task Runner Implementation.
 */

class RunScheduledTasks extends ScheduledTaskTool {
    
    /**
     * Constructor.
     */
    public function __construct(array $argv = []) {
        // [WIZDAM FIX] Call parent::__construct which handles argument parsing and file validation.
        parent::__construct($argv);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function runScheduledTasks($argv = []) {
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

// [WIZDAM] Safe instantiation
// CLI execution guard
if (PHP_SAPI === 'cli' && isset($argv) && basename(__FILE__) === basename($argv[0] ?? '')) {
    $tool = new RunScheduledTasks($argv);
    $tool->execute();
}