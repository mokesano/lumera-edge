<?php
declare(strict_types=1);

Lumera\Pages\Gifts\GiftsHandler;
namespace App\Pages\Gifts;

/**
 * @defgroup pages_gifts
 */

/**
 * @file pages/gifts/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
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
        
        break;
}
