<?php
declare(strict_types=1);

Lumera\Pages\Oai\OAIHandler;
namespace App\Pages\Oai;

/**
 * @defgroup pages_oai
 */

/**
 * @file pages/oai/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_oai
 * @brief Handle Open Archives Initiative protocol interaction requests.
 *
 */

switch ($op) {
    case 'index':
        define('HANDLER_CLASS', \App\Pages\Oai\OAIHandler::class);
        
        break;
}
