<?php
declare(strict_types=1);

/**
 * @defgroup plugins_gateways_resolver
 */
 
/**
 * @file plugins/gateways/resolver/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_gateways_resolver
 * @brief Wrapper for Resolver gateway plugin.
 *
 */

require_once('ResolverPlugin.inc.php');

return new ResolverPlugin();