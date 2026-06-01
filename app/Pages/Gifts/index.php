<?php
declare(strict_types=1);

namespace App\Pages\Gifts;

/**
 * @defgroup pages_gifts
 */

/**
 * @file pages/gifts/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_gifts
 * @brief Handle requests for journal gifts
 *
 *
 */

switch ($op) {
    case 'purchaseGiftSubscription':
    case 'payPurchaseGiftSubscription':
    case 'thankYou':
        define('HANDLER_CLASS', \App\Pages\Gifts\GiftsHandler::class);
        import('app.Pages.Gifts.GiftsHandler');
        break;
}
