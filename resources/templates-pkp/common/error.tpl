{**
 * error.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Generic error page.
 * Displays a simple error message and (optionally) a return link.
 *
 *}
{strip}
{include file="common/header.tpl"}
{/strip}

<div class="errorText">
    <span>{translate key=$errorMsg params=$errorParams}</span>
</div>

{if $backLink}
<div class="actions-button">
    <input type="button" value="{translate key="$backLinkLabel"}" class="button" onclick="document.location.href='{$backLink}'" />
</div>
{/if}

{include file="common/footer.tpl"}
