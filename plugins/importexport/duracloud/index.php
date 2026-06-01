<?php
declare(strict_types=1);

/**
 * @defgroup plugins_importexport_duracloud
 */
 
/**
 * @file plugins/importexport/duracloud/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_duracloud
 * @brief Wrapper for DuraCloud import/export plugin.
 *
 */

require_once('DuraCloudImportExportPlugin.inc.php');

return new DuraCloudImportExportPlugin();