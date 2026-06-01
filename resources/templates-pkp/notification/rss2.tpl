{**
 * templates/notification/rss2.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * RSS 2 feed template
 *
 *}
<?xml version="1.0" encoding="{$defaultCharset|escape}"?>
<rss version="2.0">
	<channel>
		{* required elements *}
		<title>{$siteTitle} {translate key="notification.notifications"}</title>
		<link>{$selfUrl|escape}</link>

		{* optional elements *}
		<language>{$locale|replace:'_':'-'|strip|escape:"html"}</language>
		<generator>{translate key=$appName} {$version|escape}</generator>
		<docs>http://blogs.law.harvard.edu/tech/rss</docs>
		<ttl>60</ttl>

		{$formattedNotifications}
	</channel>
</rss>
