<?php
declare(strict_types=1);

/**
 * @defgroup plugins
 */
 
/**
 * @file plugins/gateways/metsGateway/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins
 * @brief Wrapper for Journal Export gateway plugin.
 *
 */

require_once('MetsGatewayPlugin.inc.php');

return new METSGatewayPlugin();