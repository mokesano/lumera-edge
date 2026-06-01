<?php
declare(strict_types=1);

/**
 * @defgroup plugins_blocks_navigation
 */
 
/**
 * @file plugins/blocks/navigation/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_navigation
 * @brief Wrapper for navigation block plugin.
 *
 */

require_once('NavigationBlockPlugin.inc.php');

return new NavigationBlockPlugin();