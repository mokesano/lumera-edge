<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationFormats_proCite
 */
 
/**
 * @file plugins/citationFormats/refWorks/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_citationFormats_proCite
 * @brief Wrapper for RefWorks citation plugin.
 *
 */

require_once('RefWorksCitationPlugin.inc.php');

return new RefWorksCitationPlugin();