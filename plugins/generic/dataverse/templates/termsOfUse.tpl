{**
 * plugins/generic/dataverse/templates/termsOfUse.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display terms of use of Dataverse configured for journal
 *
 *}
{strip}
    {assign var=pageTitle value="plugins.generic.dataverse.termsOfUse.title"}
    {include file="common/header.tpl"}
{/strip}

<div>
	{$termsOfUse|strip_unsafe_html}
</div>
<div class="separator"></div>

{include file="rt/footer.tpl"}
