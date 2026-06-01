{**
 * templates/manager/importexport/plugins.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * List available import/export plugins.
 *
 *}
{strip}
{assign var="pageTitle" value="manager.importExport"}
{include file="common/header.tpl"}
{/strip}

<ul>
	{foreach from=$plugins item=plugin}
	<li><a href="{url op="importexport" path="plugin"|to_array:$plugin->getName()}">{$plugin->getDisplayName()|escape}</a>:&nbsp;{$plugin->getDescription()|escape}</li>
	{/foreach}
</ul>

{include file="common/footer.tpl"}

