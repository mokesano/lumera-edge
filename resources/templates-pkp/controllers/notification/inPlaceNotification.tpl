{**
 * controllers/notification/inPlaceNotification.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display in place notifications.
 *}

<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#{$notificationId|escape:javascript}').coreHandler('$.core.controllers.NotificationHandler',
		{ldelim}
			{include file="core:controllers/notification/notificationOptions.tpl"}
		{rdelim});
	{rdelim});
</script>
<div id="{$notificationId|escape}" class="core_notification"></div>
