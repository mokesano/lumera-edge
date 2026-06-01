{**
 * templates/notification/notification.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display a single notification.
 *}

<table width="100%" class="notifications">
	<tr>
		<td width="25">
		    <div class="notifyIcon {$notificationIconClass|escape}">&nbsp;</div>
		</td>
		<td class="notificationContent" colspan="2" width="80%">
			{$notificationDateCreated|date_format:"%d %b %Y %T"}
		</td>
		{if $notificationUrl != null}
			<td class="notificationFunction" style="min-width:60px"><a href="{$notificationUrl|escape}" target="_blank">{translate key="notification.location"}</a></td>
		{else}
			<td class="notificationFunction"></td>
		{/if}
		{if $isUserLoggedIn}
			<td class="notificationFunction"><a href="{url op="delete" path=$notificationId}">{translate key="common.delete"}</a></td>
		{/if}
	</tr>
	<tr>
		<td width="25">&nbsp;</td>
		<td class="notificationContent">
			<p{if !$notificationDateRead|date_format:"%d %b %Y %T"} style="font-weight: bold"{/if}>{$notificationContents|strip_unsafe_html|nl2br:"html"}
		</td>
	</tr>
</table>
