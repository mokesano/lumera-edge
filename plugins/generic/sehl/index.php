<?php
declare(strict_types=1);

/**
 * @defgroup plugins_generic_sehl
 */
 
/**
 * @file plugins/generic/sehl/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_sehl
 * @brief Wrapper for SEHL (Search Engine HighLighting) plugin.
 *
 */

require_once('SehlPlugin.inc.php');

return new SehlPlugin();