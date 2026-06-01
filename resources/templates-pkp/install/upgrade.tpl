{**
 * templates/install/upgrade.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Upgrade form.
 *
 *}
{strip}
{include file="common/header.tpl"}
{/strip}

{translate key="installer.upgradeInstructions" version=$version->getVersionString() baseUrl=$baseUrl}


<div class="separator"></div>


<form method="post" action="{url op="installUpgrade"}">
{include file="common/formErrors.tpl"}

{if $isInstallError}
	<div id="installError">
		<p>
			<span class="core_form_error">{translate key="installer.installErrorsOccurred"}:</span>
			<ul class="core_form_error_list">
				<li>{if $dbErrorMsg}{translate key="common.error.databaseError" error=$dbErrorMsg}{else}{translate key=$errorMsg}{/if}</li>
			</ul>
		</p>
	</div>{* installError *}
{/if}

<p><input type="submit" value="{translate key="installer.upgradeApplication"}" class="button defaultButton" /></p>

</form>

{include file="common/footer.tpl"}
