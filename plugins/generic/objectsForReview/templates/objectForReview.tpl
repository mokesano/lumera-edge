{**
 * @file plugins/generic/objectsForReview/templates/objectForReview.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Detailed public object for review view.
 *
 *}
{assign var="pageTitle" value=plugins.generic.objectsForReview.public.objectForReview}
{include file="common/header.tpl"}

<br />

<div id="objectForReviewDetails">

{include file="$ofrTemplatePath/objectForReviewMetadata.tpl"}

<div style="clear:both;"></div>
</div>

{include file="common/footer.tpl"}
