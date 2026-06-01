{**
 * controllers/notification/errorNotificationContent.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display error notification content.
 *}
{foreach item=message from=$errors}
	<ul>
		<li>{$message|escape}</li>
	</ul>
{/foreach}
