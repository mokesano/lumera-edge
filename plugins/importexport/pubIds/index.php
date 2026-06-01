<?php
declare(strict_types=1);

/**
 * @defgroup plugins_importexport_pubIds
 */

/**
 * @file plugins/importexport/pubIds/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_importexport_pubIds
 * @brief Wrapper for public identifiers XML import/export plugin.
 *
 */
require_once('PubIdImportExportPlugin.inc.php');

return new PubIdImportExportPlugin();