{**
 * templates/help/helpToc.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display the help table of contents
 *
 *}
{strip}
{translate|assign:applicationHelpTranslated key="help.wizdamHelp"}
{include file="core:help/helpToc.tpl"}
{/strip}
