{**
 * plugins/generic/dataverse/templates/dataCitationArticle.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Dataverse plugin: include data citation in article landing page
 *
 *}
{if $dataCitation}
	<div class="separator"></div>
	<div id="dataCitation">
		<h4>{translate key="plugins.generic.dataverse.dataCitation"}</h4>
		<p>{$dataCitation|strip_unsafe_html}</p>
	</div>
{/if}
