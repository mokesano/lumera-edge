{**
 * plugins/importexport/mets/index.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * List of operations this plugin can perform
 *
 *}
{strip}
{assign var="pageTitle" value="plugins.importexport.METSExport.displayName"}
{include file="common/header.tpl"}
{/strip}

<br />

<h3>{translate key="plugins.importexport.METSExport.export"}</h3>
<ul>
	<li><a href="{plugin_url path="issues"}">{translate key="plugins.importexport.METSExport.export.issues"}</a></li>
</ul>

{include file="common/footer.tpl"}
