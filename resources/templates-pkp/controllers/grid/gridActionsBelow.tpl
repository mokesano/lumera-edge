{**
 * templates/controllers/grid/gridActionsBelow.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Grid actions in bottom position
 *}

<div class="actions pkp_linkActions grid_link_actions_below">
	{foreach from=$grid->getActions($smarty.const.GRID_ACTION_POSITION_BELOW) item=action}
		{if is_a($action, 'LegacyLinkAction')}
			{if $action->getMode() eq $smarty.const.LINK_ACTION_MODE_AJAX}
				{assign var=actionActOnId value=$action->getActOn()}
			{else}
				{assign var=actionActOnId value=$gridActOnId}
			{/if}
			{include file="linkAction/legacyLinkAction.tpl" action=$action id=$gridId actOnId=$actionActOnId}
		{else}
			{include file="linkAction/linkAction.tpl" action=$action contextId=$gridId}
		{/if}
	{/foreach}
	<div class="core_helpers_clear"></div>
</div>
