<?php
declare(strict_types=1);

namespace App\Pages\Index;

/**
 * @defgroup pages_index
 */

/**
 * @file pages/index/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_index
 * @brief Handle site index requests.
 *
 */

switch ($op) {
    case 'index':
        define('HANDLER_CLASS', \App\Pages\Index\IndexHandler::class);
        import('app.Pages.Index.IndexHandler');
        break;
}
