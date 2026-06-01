{**
 * plugins/generic/usageStats/templates/privacyInformation.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display usage stats privacy information and an opt-out option.
 *
 *}
{include file="common/header.tpl"}

{translate key="plugins.generic.usageStats.optout.description" privacyStatementUrl=$privacyStatementUrl}
<form action="{url}" method="POST">
	{if $hasOptedOut}
		{translate key="plugins.generic.usageStats.optout.done"}
		<input type="submit" name="opt-in" class="button defaultButton" value="{translate key="plugins.generic.usageStats.optin"}"/>
	{else}
		{translate key="plugins.generic.usageStats.optout.cookie" privacyStatementUrl=$privacyStatementUrl}
		<input type="submit" name="opt-out" class="button defaultButton" value="{translate key="plugins.generic.usageStats.optout"}"/>
	{/if}
</form>

{include file="common/footer.tpl"}
