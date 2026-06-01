<?php
declare(strict_types=1);

namespace App\Pages\Statistics;

/**
 * @file pages/statistics/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2017-2026 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class LoginHandler
 * @ingroup pages_login
 *
 * @brief URL Router untuk modul statistics ScholarWizdam
 */

switch ($op) {
    case 'index':
    case 'journal':
        define('HANDLER_CLASS', \App\Pages\Statistics\JournalStatsHandler::class);
        import('app.Pages.Statistics.JournalStatsHandler');
        break;
}
