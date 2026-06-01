<?php
declare(strict_types=1);

/**
 * @defgroup plugins_importexport_quickSubmit
 */
 
/**
 * @file plugins/importExport/quickSubmit/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Wrapper for QuickSubmit plugin.
 *
 * @ingroup plugins_importexport_quickSubmit
 */

require_once('QuickSubmitPlugin.inc.php');

return new QuickSubmitPlugin();