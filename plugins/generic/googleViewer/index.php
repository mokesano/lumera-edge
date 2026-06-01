<?php
declare(strict_types=1);

/**
 * @defgroup plugins_generic_googleViewer
 */

/**
 * @file plugins/generic/googleViewer/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_googleViewer
 * @brief Wrapper for custom locale plugin. Plugin based on Translator plugin.
 *
 */

require_once('GoogleViewerPlugin.inc.php');

return new GoogleViewerPlugin();