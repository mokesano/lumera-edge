<?php
declare(strict_types=1);

/**
 * @defgroup plugins
 */

/**
 * @file plugins/importexport/mets/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins
 * @brief Wrapper for METS export plugin.
 */

require_once('MetsExportPlugin.inc.php');

return new METSExportPlugin();