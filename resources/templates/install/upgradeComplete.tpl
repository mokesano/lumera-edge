{**
 * templates/install/upgradeComplete.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display confirmation of successful upgrade.
 * If necessary, will also display new config file contents if config file could not be written.
 *
 *}
{strip}
{assign var="pageTitle" value="installer.wizdamUpgrade"}
{include file="core:install/upgradeComplete.tpl"}
{/strip}
