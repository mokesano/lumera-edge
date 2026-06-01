<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationFormats_mla
 */
 
/**
 * @file plugins/citationFormats/mla/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_citationFormats_mla
 * @brief Wrapper for MLA citation plugin.
 *
 */

require_once('MlaCitationPlugin.inc.php');

return new MlaCitationPlugin();