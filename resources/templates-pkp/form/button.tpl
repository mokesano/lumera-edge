{**
 * templates/form/button.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * form button
 *}

<div{if $FBV_layoutInfo} class="{$FBV_layoutInfo}"{/if}>
	<button class="{$FBV_class} button" type="{$FBV_type|escape}"{if $FBV_disabled} disabled="disabled"{/if} {$FBV_buttonParams}>{if $FBV_translate}{translate key=$FBV_label}{else}{$FBV_label}{/if}</button>
</div>
