<?php
declare(strict_types=1);

namespace App\Pages\Gateway;

/**
 * @defgroup pages_gateway
 */

/**
 * @file pages/gateway/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
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
        import('app.Pages.Gateway.GatewayHandler');
        break;
}
