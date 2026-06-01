{**
 * plugins/generic/googleAnalytics/pageTagUrchin.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Google Analytics urchin.js (legacy) page tag.
 *
 *}
<!-- Google Analytics -->
<script src="//www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "{$googleAnalyticsSiteId|escape}";
urchinTracker();
{foreach from=$gsAuthorAccounts item=gsAuthorAccount}
	_uff = 0; // Reset flag to allow for additional accounts
	_uacct = "{$gsAuthorAccount|escape}";
{/foreach}
</script>
<!-- /Google Analytics -->

