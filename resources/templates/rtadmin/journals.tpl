{**
 * templates/rtadmin/journals.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * RTAdmin journal list
 *
 *}
{strip}
{assign var="pageTitle" value="rt.readingTools"}
{include file="common/header.tpl"}
{/strip}

<h3>{translate key="user.myJournals"}</h3>

<ul>
	{foreach from=$journals item=journal}
		<li><a href="{url journal=$journal->getPath() page="rtadmin"}">{$journal->getLocalizedTitle()|escape}</a></li>
	{/foreach}
</ul>

{include file="common/footer.tpl"}
