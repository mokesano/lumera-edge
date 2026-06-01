<?php
declare(strict_types=1);

/**
 * @defgroup plugins_reports_timedView
 */

/**
 * @file plugins/reports/timedView/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_timedView
 * @brief Wrapper for timedView report plugin.
 *
 */

require_once(dirname(__FILE__) . '/TimedViewReportPlugin.inc.php');

return new TimedViewReportPlugin();