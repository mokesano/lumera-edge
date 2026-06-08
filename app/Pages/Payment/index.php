<?php
declare(strict_types=1);

Lumera\Pages\Payment\PaymentHandler;
namespace App\Pages\Payment;

/**
 * @defgroup pages_payment
 */

/**
 * @file pages/payment/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_payment
 * @brief Handle requests for interactions between the payment system and external
 * sites/systems.
 */

switch ($op) {
    case 'plugin':
        define('HANDLER_CLASS', \App\Pages\Payment\PaymentHandler::class);
        
        break;
}
