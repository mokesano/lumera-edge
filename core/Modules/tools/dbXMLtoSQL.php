<?php
declare(strict_types=1);

namespace Lumera\Modules\tools;

/**
 * @file core/Modules/Tools/DbXmlToSql.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class DbXmlToSql
 * @ingroup tools
 *
 * @brief CLI tool to output the SQL statements corresponding to an XML database schema.
 * [WIZDAM EDITION] Modernized CLI Tool.
 */

require(__DIR__ . '/bootstrap.php');

import('core.Modules.CliTool.XmlToSqlTool');

/** Default XML file to parse if none is specified */
define('DATABASE_XML_FILE', 'dbscripts/xml/wizdam_schema.xml');

class DbXmlToSql extends XmlToSqlTool {
    /**
     * Constructor.
     * @param array $argv command-line arguments
     * If specified, the first argument should be the file to parse
     */
    public function __construct(array $argv = []) {
        parent::__construct($argv);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function dbXMLtoSQL() {
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

// [WIZDAM] Safe instantiation using Null Coalescing Operator
$tool = new DbXmlToSql($argv ?? []);
$tool->execute();

?>