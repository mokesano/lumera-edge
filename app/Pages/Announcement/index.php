<?php
declare(strict_types=1);

namespace App\Pages\Announcement;

/**
 * @defgroup pages_announcement
 */

/**
 * @file pages/announcement/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_announcement
 * @brief Handle requests for public announcement functions.
 *
 */

switch ($op) {
    case 'index':
    case 'view':
        define('HANDLER_CLASS', \App\Pages\Announcement\AnnouncementHandler::class);
        import('app.Pages.Announcement.AnnouncementHandler');
        break;
}
