<?php
declare(strict_types=1);

/**
 * @defgroup plugins_reports_reviews
 */
 
/**
 * @file plugins/reports/reviews/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for review report plugin.
 *
 * @ingroup plugins_reports_reviews
 */

require_once('ReviewReportPlugin.inc.php');

return new ReviewReportPlugin();