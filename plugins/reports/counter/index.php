<?php
declare(strict_types=1);

/**
 * @defgroup plugins_reports_counter
 */

/**
 * @file plugins/reports/counter/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_reports_counter
 * @brief Wrapper for counter report plugin.
 *
 */

// Because of the use of Namespaces, this plugin now requires PHP 7.4 or better
if (version_compare(PHP_VERSION, '7.4.0') >= 0) {

require_once(dirname(__FILE__) . '/CounterReportPlugin.inc.php');

return new CounterReportPlugin();

}

?>