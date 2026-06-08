<?php
declare(strict_types=1);

Lumera\Pages\Notification\NotificationHandler;
/**
 * @defgroup pages_notification
 */

/**
 * @file pages/notification/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_notification
 * @brief Handle requests for viewing notifications.
 *
 */

switch ($op) {
	case 'index':
	case 'delete':
	case 'settings':
	case 'saveSettings':
	case 'getNotificationFeedUrl':
	case 'notificationFeed':
	case 'subscribeMailList':
	case 'saveSubscribeMailList':
	case 'mailListSubscribed':
	case 'confirmMailListSubscription':
	case 'unsubscribeMailList':
	case 'fetchNotification':
		define('HANDLER_CLASS', 'NotificationHandler');
		
		break;
}

?>