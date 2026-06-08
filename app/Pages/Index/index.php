<?php
declare(strict_types=1);

Lumera\Pages\Index\IndexHandler;
namespace App\Pages\Index;

/**
 * @defgroup pages_index
 */

/**
 * @file pages/index/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_index
 * @brief Handle site index requests.
 *
 */

switch ($op) {
    case 'index':
        define('HANDLER_CLASS', \App\Pages\Index\IndexHandler::class);
        
        break;
}
