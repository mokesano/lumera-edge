<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationFormats_proCite
 */
 
/**
 * @file plugins/citationFormats/proCite/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_citationFormats_proCite
 * @brief Wrapper for ProCite citation plugin.
 *
 */

require_once('ProCiteCitationPlugin.inc.php');

return new ProCiteCitationPlugin();