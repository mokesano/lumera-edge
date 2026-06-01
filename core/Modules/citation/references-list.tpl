{**
 * references-list.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Create a references list.
 *}
{if $ordering == $smarty.const.REFERENCES_LIST_ORDERING_NUMERICAL}
	<ol>
		{foreach from=$citationsOutput key=seq item=citationOutput}
			<li>{$citationOutput}</li>
		{/foreach}
	</ol>
{else}
	{foreach from=$citationsOutput key=seq item=citationOutput}
		{$citationOutput}
	{/foreach}
{/if}