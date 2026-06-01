<?php
declare(strict_types=1);

/**
 * @defgroup plugins_pubIds_doi
 */

/**
 * @file plugins/pubIds/doi/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_pubIds_doi
 * @brief Wrapper for DOI plugin.
 *
 */
require_once('DOIPubIdPlugin.inc.php');

return new DOIPubIdPlugin();