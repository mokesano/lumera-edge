{**
 * templates/proofreader/submission/scheduling.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Subtemplate defining the scheduling view.
 *
 *}
<div id="scheduling">
<h3>{translate key="submission.scheduling"}</h3>

{if $issue}
	{assign var=issueName value=$issue->getIssueIdentification()}
{else}
	{translate|assign:"issueName" key="submission.scheduledIn.tba"}
{/if}

{translate key="submission.scheduledIn" issueName=$issueName}

{if $issue}
	<a href="{url page="issue" op="view" path=$issue->getBestIssueId()}" class="action">{translate key="issue.toc"}</a>
{/if}
</div>
