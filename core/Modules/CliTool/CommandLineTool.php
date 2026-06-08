<?php
declare(strict_types=1);

namespace Lumera\Modules\CliTool;
/**
 * @defgroup tools
 */

/**
 * @file core/Modules/CliTool/CliTool.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CliTool
 * @ingroup tools
 *
 * @brief Initialization code for command-line scripts.
 */

/** Initialization code */
// Set current working directory
define('PWD', getcwd());

// Ensure we are in the base directory defined by tools/bootstrap.php
if (defined('INDEX_FILE_LOCATION')) {
    chdir(dirname(INDEX_FILE_LOCATION));
}

if (!defined('STDIN')) {
    define('STDIN', fopen('php://stdin','r'));
}

define('SESSION_DISABLE_INIT', 1);

// Load Core Bootstrap
// [WIZDAM] Standardized bootstrap loading
require('./core/Includes/bootstrap.php');

class CommandLineTool {

    /** @var string|null the script being executed */
    protected ?string $scriptName = null;

    /** @var array Command-line arguments */
    protected array $argv = [];

    /**
     * Constructor.
     */
    public function __construct($argv = []) {
        // Handle backward compatibility: convert to array if needed
        if (!is_array($argv)) {
            $argv = func_get_args();
        }
        
        // [WIZDAM SECURITY] SAPI Check
        // Ensure this is truly running via CLI to prevent web-based invocation attacks.
        if (php_sapi_name() !== 'cli') {
            die('Access Denied: This script can only be executed from the command-line.');
        }

        // Initialize the request object
        // [WIZDAM] Modern Singleton Access
        $application = Application::get();
        $request = $application->getRequest();

        // [WIZDAM LEGACY SUPPORT]
        // Ideally we should use a CLIRouter, but legacy plugins expect a PageRouter context.
        // We maintain this for compatibility with the existing ecosystem.
        
        $router = new PageRouter();
        $router->setApplication($application);
        $request->setRouter($router);

        // Initialize the locale and load generic plugins.
        AppLocale::initialize();
        PluginRegistry::loadCategory('generic');

        $this->argv = $argv;

        $this->scriptName = isset($this->argv[0]) ? array_shift($this->argv) : '';

        if (isset($this->argv[0]) && $this->argv[0] == '-h') {
            $this->usage();
            exit(0);
        }
    }

    /**
     * Print command usage information.
     */
    public function usage(): void {
        // To be overridden by subclasses
    }
}