<?php
declare(strict_types=1);

namespace App\Pages\Payment;

/**
 * @defgroup pages_payment
 */

/**
 * @file pages/payment/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_payment
 * @brief Handle requests for interactions between the payment system and external
 * sites/systems.
 */

switch ($op) {
    case 'plugin':
        define('HANDLER_CLASS', \App\Pages\Payment\PaymentHandler::class);
        import('app.Pages.Payment.PaymentHandler');
        break;
}
