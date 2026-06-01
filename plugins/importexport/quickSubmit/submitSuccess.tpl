{**
 * plugins/importexport/quickSubmit/submitSuccess.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display a message indicating that the article was successfuly submitted.
 *
 *}
{strip}
{assign var="pageTitle" value="plugins.importexport.quickSubmit.success"}
{include file="common/header.tpl"}
{/strip}

<p>{translate key="plugins.importexport.quickSubmit.successDescription"}  <a href="{plugin_url}">{translate key="plugins.importexport.quickSubmit.successReturn"}</a></p>

{include file="common/footer.tpl"}
