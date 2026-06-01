<?php
declare(strict_types=1);

/**
 * @defgroup plugins_generic_webFeed
 */
 
/**
 * @file plugins/generic/webFeed/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_webFeed
 * @brief Wrapper for Web Feeds plugin.
 *
 */

require_once('WebFeedPlugin.inc.php');

return new WebFeedPlugin();