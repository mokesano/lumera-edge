<?php
declare(strict_types=1);

Lumera\Pages\Rt\RTHandler;
namespace App\Pages\Rt;

/**
 * @defgroup pages_rt
 */

/**
 * @file pages/rt/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_rt
 * @brief Handle Reading Tools requests.
 *
 */

switch ($op) {
    case 'bio':
    case 'metadata':
    case 'context':
    case 'captureCite':
    case 'printerFriendly':
    case 'emailColleague':
    case 'emailAuthor':
    case 'suppFiles':
    case 'suppFileMetadata':
    case 'findingReferences':
        define('HANDLER_CLASS', \App\Pages\Rt\RTHandler::class);
        
        break;
}
