<?php
declare(strict_types=1);

Lumera\Pages\Sitemap\SitemapHandler;
namespace App\Pages\Sitemap;

/**
 * @defgroup pages_sitemap
 */

/**
 * @file pages/sitemap/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_sitemap
 * @brief Produce a sitemap in XML format for submitting to search engines.
 *
 */

switch ($op) {
    case 'index':
        define('HANDLER_CLASS', \App\Pages\Sitemap\SitemapHandler::class);
        
        break;
}
