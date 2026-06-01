<?php
declare(strict_types=1);

/**
 * @defgroup plugins_reports_views
 */

/**
 * @file plugins/reports/views/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_reports_views
 * @brief Wrapper for view report plugin.
 *
 */

require_once(dirname(__FILE__) . '/ViewReportPlugin.inc.php');

return new ViewReportPlugin();