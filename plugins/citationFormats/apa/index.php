<?php
declare(strict_types=1);

/**
 * @defgroup plugins_citationFormats_apa
 */
 
/**
 * @file plugins/citationFormats/apa/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_citationFormats_apa
 * @brief Wrapper for APA citation plugin.
 *
 */

require_once('ApaCitationPlugin.inc.php');

return new ApaCitationPlugin();