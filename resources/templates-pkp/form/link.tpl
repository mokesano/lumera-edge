{**
 * templates/form/link.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Form link control (used most commonly as a cancel link)
 *}

<div{if $FBV_layoutInfo} class="{$FBV_layoutInfo}"{/if}>
	<a href="{$FBV_href}" id="{$FBV_id}" class="{$FBV_class}">{translate key=$FBV_label}</a>
</div>
