<?php
declare(strict_types=1);

namespace App\Pages\Sitemap;

/**
 * @defgroup pages_sitemap
 */

/**
 * @file pages/sitemap/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_sitemap
 * @brief Produce a sitemap in XML format for submitting to search engines.
 *
 */

switch ($op) {
    case 'index':
        define('HANDLER_CLASS', \App\Pages\Sitemap\SitemapHandler::class);
        import('app.Pages.Sitemap.SitemapHandler');
        break;
}
