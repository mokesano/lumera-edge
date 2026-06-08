<?php
declare(strict_types=1);

Lumera\Pages\Gateway\GatewayHandler;
namespace App\Pages\Gateway;

/**
 * @defgroup pages_gateway
 */

/**
 * @file pages/gateway/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_gateway
 * @brief Handle gateway interaction requests.
 *
 */

switch ($op) {
    case 'index':
    case 'lockss':
    case 'plugin':
        define('HANDLER_CLASS', \App\Pages\Gateway\GatewayHandler::class);
        
        break;
}
