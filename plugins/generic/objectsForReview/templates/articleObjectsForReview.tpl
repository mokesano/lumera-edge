{**
 * @file plugins/generic/objectsForReview/templates/articleObjectsForReview.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Display objects reviewed by the article.
 *
 *}

<div class="separator"></div>
<div id="objectsForReviewListing">
	<h3>{translate key="plugins.generic.objectsForReview.public.articleObjectsForReview"}</h3>
	{foreach from=$objectsForReview item=objectForReview name=objectsForReview}
		<div class="objectForReviewListing" style="clear:left;">

			{include file="$ofrTemplatePath/objectForReviewMetadata.tpl"}

			<div{if not $smarty.foreach.objectsForReview.last} class="separator"{/if} style="clear:both;"></div>

		</div>
	{/foreach}
</div>

