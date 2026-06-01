{**
 * linkAction/linkActionOptions.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Create a link action
 *
 * Parameters:
 *  action: A LinkAction object.
 *  contextId: The name of the context in which the link
 *   action is being placed. This is required to disambiguate
 *   actions with the same id on one page.
 *}

{* Generate the link action's options. *}
{ldelim}
	{if $selfActivate}
		selfActivate: {$selfActivate},
	{/if}
	staticId: '{$staticId}',
	{assign var="actionRequest" value=$action->getActionRequest()}
	actionRequest: '{$actionRequest->getJSLinkActionRequest()}',
	actionRequestOptions: {ldelim}
		{foreach name=actionRequestOptions from=$actionRequest->getLocalizedOptions() key=optionName item=optionValue}
			{$optionName}: {if $optionValue}'{$optionValue|escape:javascript}'{else}false{/if}{if !$smarty.foreach.actionRequestOptions.last},{/if}
		{/foreach}
	{rdelim}
{rdelim}
