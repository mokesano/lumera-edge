<?php
declare(strict_types=1);

Lumera\Pages\User\UserIndexHandler;
Lumera\Pages\User\ProfileHandler;
Lumera\Pages\User\RegistrationHandler;
Lumera\Pages\User\EmailHandler;
Lumera\Pages\User\UserSubscriptionHandler;
Lumera\Pages\User\UserGiftHandler;
Lumera\Pages\User\UserHandler;
Lumera\Pages\User\CoreUserHandler;
namespace App\Pages\User;

/**
 * @defgroup pages_user
 */

/**
 * @file pages/user/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2017-2026 Rochmady
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_user
 * @brief Handle requests for user functions.
 *
 */

switch ($op) {
    //
    // Index
    //
    case 'index':
        define('HANDLER_CLASS', \App\Pages\User\UserIndexHandler::class);
        
        break;
    //
    // Profiles & Account
    //
    case 'my-profile':         // [WIZDAM] Lihat profil sendiri
    case 'update-profile':     // [WIZDAM] Form ubah profil
    case 'public-profile':     // [WIZDAM] Lihat profil orang lain
    case 'saveProfile':        // (POST Internal)
    case 'changePassword':
    case 'savePassword':       // (POST Internal)
    case 'linked-accounts':    // [WIZDAM ROUTING] KEBAB-CASE URL ---
        define('HANDLER_CLASS', \App\Pages\User\ProfileHandler::class);
        
        break;
    //
    // Registration
    //
    case 'register':
    case 'registerUser':
    case 'activateUser':
        define('HANDLER_CLASS', \App\Pages\User\RegistrationHandler::class);
        
        break;
    //
    // Email
    //
    case 'email':
        define('HANDLER_CLASS', \App\Pages\User\EmailHandler::class);
        
        break;
    //
    // Subscriptions & Payments
    //
    case 'subscriptions':
    case 'purchaseSubscription':
    case 'payPurchaseSubscription':
    case 'completePurchaseSubscription':
    case 'payRenewSubscription':
    case 'payMembership':
        define('HANDLER_CLASS', \App\Pages\User\UserSubscriptionHandler::class);
        
        break;

    //
    // Gifts
    //
    case 'gifts':
    case 'redeemGift':
        define('HANDLER_CLASS', \App\Pages\User\UserGiftHandler::class);
        
        break;
    //
    // Core Utilities / Misc.
    //
    case 'setLocale':
    case 'become':
    case 'authorizationDenied':
    case 'viewCaptcha':
        define('HANDLER_CLASS', \App\Pages\User\UserHandler::class);
        
        break;
    //
    // Interest
    //
    case 'getInterests':
        define('HANDLER_CLASS', \App\Pages\User\CoreUserHandler::class);
        
        break;
}
