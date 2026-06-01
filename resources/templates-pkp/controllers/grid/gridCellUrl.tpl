{**
 * templates/controllers/grid/gridCell.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * a url grid cell
 *}
{assign var=cellId value="cell-"|concat:$id}
<span id="{$cellId}">
	<a href="{$label|escape}">{$label|escape}</a>
</span>

