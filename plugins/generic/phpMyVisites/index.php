<?php
declare(strict_types=1);

/**
 * @defgroup plugins_generic_phpMyVisites
 */
 
/**
 * @file plugins/generic/phpMyVisites/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_phpMyVisites
 * @brief Wrapper for phpMyVisites plugin.
 *
 */

require_once('PhpMyVisitesPlugin.inc.php');

return new PhpMyVisitesPlugin();