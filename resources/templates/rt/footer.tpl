{**
 * templates/rt/footer.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Common footer for RT pages.
 *
 *}
<br />

{if !$omitCloseButton}
<input type="button" onclick="window.close()" value="{translate key="common.close"}" class="button defaultButton" />
{/if}

{call_hook name="Templates::Rt::Footer::PageFooter"}
</div>
</div>
</div>
</div>
</body>
</html>

