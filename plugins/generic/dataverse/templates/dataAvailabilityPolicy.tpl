{**
 * plugins/generic/dataverse/templates/dataAvailabilityPolicy.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display journal's data availability policy in editorial policies
 *
 *}
{strip}
	{assign var="pageTitle" value="plugins.generic.dataverse.dataAvailabilityPolicy.title"}
	{include file="common/header.tpl"}
{/strip}

<div>
	{$dataAvailabilityPolicy|strip_unsafe_html}
</div>

{include file="common/footer.tpl"}
