<?php
declare(strict_types=1);

/**
 * @defgroup plugins_themes_custom
 */

/**
 * @file plugins/themes/custom/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_custom
 * @brief Wrapper for "custom" theme plugin.
 *
 */

require_once('CustomThemePlugin.inc.php');

return new CustomThemePlugin();