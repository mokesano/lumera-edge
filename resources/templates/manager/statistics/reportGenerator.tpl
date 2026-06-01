{**
 * templates/manager/statistics/reportGenerator.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Report generator page.
 *
 *}
{strip}
{assign var="pageTitle" value="manager.statistics.reports"}
{assign var="pageCrumbTitle" value="manager.statistics.reports"}
{include file="common/header.tpl"}
{/strip}

{url|assign:reportGeneratorUrl router=$smarty.const.ROUTE_COMPONENT component="statistics.ReportGeneratorHandler" op="fetchReportGenerator" escape=false}
{load_url_in_div id="reportGeneratorContainer" url="$reportGeneratorUrl"}

{include file="common/footer.tpl"}
