{**
 * templates/controllers/grid/feature/gridOrderFinishControls.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Controls (button and link) to finish the ordering action in grids.
 *}
<div class="grid_controls order_finish_controls">
{fbvElement type="link" class="cancelFormButton core_helpers_align_left" id=$gridId|concat:"-cancel" label="grid.action.cancelOrdering"}
{fbvElement type="link" class="saveButton core_helpers_align_right" id=$gridId|concat:"-saveButton" label="common.done"}
</div>
