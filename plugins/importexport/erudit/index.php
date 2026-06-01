<?php
declare(strict_types=1);

/**
 * @defgroup plugins_importexport_erudit
 */
 
/**
 * @file plugins/importexport/erudit/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_erudit
 * @brief Wrapper for Erudit XML export plugin.
 *
 */

require_once('EruditExportPlugin.inc.php');

return new EruditExportPlugin();