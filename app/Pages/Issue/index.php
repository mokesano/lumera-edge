<?php
declare(strict_types=1);

namespace App\Pages\Issue;

/**
 * @defgroup pages_issue
 */

/**
 * @file pages/issue/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_issue
 * @brief Handle requests for issue functions.
 *
 */

switch ($op) {
    case 'index':
    case 'current':
    case 'view':
    case 'archive':
    case 'viewIssue':
    case 'viewDownloadInterstitial':
    case 'viewFile':
    case 'download':
        define('HANDLER_CLASS', \App\Pages\Issue\IssueHandler::class);
        import('app.Pages.Issue.IssueHandler');
        break;
}
