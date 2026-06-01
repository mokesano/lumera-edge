{**
 * templates/notification/maillistSubscribed.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Displays the notification settings page and unchecks
 *
 *}
{strip}
{assign var="pageTitle" value="notification.mailList"}
{include file="common/header.tpl"}
{/strip}

<ul>
	<li>
		<span{if $error} class="core_form_error"{/if}>
			{translate key="notification.$status"}
		</span>
	</li>
<ul>

{include file="common/footer.tpl"}
