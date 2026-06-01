{**
 * templates/about/memberships.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * About the Association memberships
 *
 *}
{strip}
{assign var="pageTitle" value="about.memberships"}
{include file="common/header.tpl"}
{/strip}
<div id="membershipFee">
<h3>{$membershipFeeName|escape}</h3>

<p>{$membershipFeeDescription|nl2br}<br />
{translate key="manager.subscriptionTypes.cost"} {$membershipFee|string_format:"%.2f"} ({$currency|escape})</p> 
</div>
{include file="common/footer.tpl"}

