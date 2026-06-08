<?php
declare(strict_types=1);

Lumera\Pages\SubscriptionManager\SubscriptionManagerHandler;
namespace App\Pages\SubscriptionManager;

/**
 * @defgroup pages_subscriptionManager
 */

/**
 * @file pages/subscriptionManager/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_subscriptionManager
 * @brief Handle requests for journal management functions.
 *
 */

switch ($op) {
    case 'index':
    case 'subscriptionsSummary':
    case 'subscriptions':
    case 'deleteSubscription':
    case 'renewSubscription':
    case 'editSubscription':
    case 'createSubscription':
    case 'selectSubscriber':
    case 'updateSubscription':
    case 'resetDateReminded':
    case 'subscriptionTypes':
    case 'moveSubscriptionType':
    case 'deleteSubscriptionType':
    case 'editSubscriptionType':
    case 'createSubscriptionType':
    case 'updateSubscriptionType':
    case 'subscriptionPolicies':
    case 'saveSubscriptionPolicies':
    case 'createUser':
    case 'updateUser':
    case 'payments':
    case 'savePaymentSettings':
    case 'viewPayments':
    case 'viewPayment':
    case 'payMethodSettings':
    case 'savePayMethodSettings':
    case 'suggestUsername':
    case 'userProfile':
        define('HANDLER_CLASS', \App\Pages\SubscriptionManager\SubscriptionManagerHandler::class);
        
        break;
}
