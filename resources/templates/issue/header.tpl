{**
 * templates/issue/header.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Header for issue pages.
 *}
{strip}
{if $issue && !$issue->getPublished()}
	{translate|assign:"previewText" key="editor.issues.preview"}
	{assign var="pageTitleTranslated" value="$issueHeadingTitle $previewText"}
{else}
	{assign var="pageTitleTranslated" value=$issueHeadingTitle}
{/if}
{if $issue && $issue->getShowTitle() && $issue->getLocalizedTitle() && ($issueHeadingTitle != $issue->getLocalizedTitle())}
	{* If the title is specified and should be displayed then show it as a subheading *}
	{assign var="pageSubtitleTranslated" value=$issue->getLocalizedTitle()}
{/if}
{include file="common/header.tpl"}
{/strip}
