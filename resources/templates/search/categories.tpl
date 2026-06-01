{**
 * templates/index/categories.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Site category list.
 *
 *}
{strip}
{assign var="pageTitle" value="navigation.categories"}
{include file="common/header.tpl"}
{/strip}

<br />

<a name="categories"></a>

<ul>
{foreach from=$categories item=categoryArray}
	{assign var=category value=$categoryArray.category}
	<li><a href="{url op="category" path=$category->getId()}">{$category->getLocalizedName()|escape}</a> ({$categoryArray.journals|@count})</li>
{/foreach}
</ul>

{include file="common/footer.tpl"}
