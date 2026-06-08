<?php
declare(strict_types=1);

Lumera\Pages\Search\SearchHandler;
namespace App\Pages\Search;

/**
 * @defgroup pages_search
 */

/**
 * @file pages/search/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_search
 * @brief Handle search requests.
 *
 * [WIZDAM EDITION] Refactored for PHP 8.1+ Strict Compliance
 */

switch ($op) {
    case 'index':
    case 'search':
    case 'authors':
    case 'titles':
    case 'categories':
    case 'category':
        define('HANDLER_CLASS', \App\Pages\Search\SearchHandler::class);
        
        break;
}
