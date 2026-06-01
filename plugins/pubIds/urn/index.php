<?php
declare(strict_types=1);

/**
 * @defgroup plugins_pubIds_urn
 */

/**
 * @file plugins/pubIds/urn/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_pubIds_urn
 * @brief Wrapper for urn plugin.
 *
 */
 
require_once('URNPubIdPlugin.inc.php');

return new URNPubIdPlugin();