{**
 * core/Library/templates/common/formErrors.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * List errors that occurred during form processing.
 *}
{if $isError}
	<div id="formErrors">
		<p>
		<span class="core_form_error">{translate key="form.errorsOccurred"}:</span>
		<ul class="core_form_error_list">
		{foreach key=field item=message from=$errors}
			<li><a href="#{$field|escape}">{$message}</a></li>
		{/foreach}
		</ul>
		</p>
	</div>
	<script type="text/javascript">{literal}
		<!--
		// Jump to form errors.
		window.location.hash="formErrors";
		// -->
	{/literal}</script>
{/if}
