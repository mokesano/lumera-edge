{**
 * plugins/generic/announcementFeed/templates/block.tpl
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Announcement feed plugin navigation sidebar.
 *
 *}
<div class="block" id="sidebarAnnouncementFeed">
	<span class="blockTitle">{translate key="announcement.announcements"}</span>
	<a href="{url page="gateway" op="plugin" path="AnnouncementFeedGatewayPlugin"|to_array:"atom"}">
	<img src="{$baseUrl}/plugins/generic/announcementFeed/templates/images/atom10_logo.gif" alt="{translate key="plugins.generic.announcementfeed.atom.altText"}" border="0" /></a>
	<br />
	<a href="{url page="gateway" op="plugin" path="AnnouncementFeedGatewayPlugin"|to_array:"rss2"}">
	<img src="{$baseUrl}/plugins/generic/announcementFeed/templates/images/rss20_logo.gif" alt="{translate key="plugins.generic.announcementfeed.rss2.altText"}" border="0" /></a>
	<br />
	<a href="{url page="gateway" op="plugin" path="AnnouncementFeedGatewayPlugin"|to_array:"rss"}">
	<img src="{$baseUrl}/plugins/generic/announcementFeed/templates/images/rss10_logo.gif" alt="{translate key="plugins.generic.announcementfeed.rss1.altText"}" border="0" /></a>
</div>
