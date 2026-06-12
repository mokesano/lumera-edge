<?php
declare(strict_types=1);

namespace App\Domain\Announcement;

use Lumera\Modules\Config\ConfigParser as Config;
use Lumera\Modules\Announcement\CoreAnnouncement;

/**
 * @defgroup announcement
 */

/**
 * @file core.Modules.announcement/Announcement.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Announcement
 * @ingroup announcement
 * @see AnnouncementDAO
 *
 * @brief Basic class describing a announcement.
 *
 * WIZDAM MODERNIZATION:
 * - PHP 8.x Compatibility (Constructor)
 * - Strict SHIM
 */

class Announcement extends CoreAnnouncement {
    
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function Announcement() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error('Class Announcement uses deprecated constructor parent::Announcement(). Please refactor to parent::__construct().', E_USER_DEPRECATED);
        }
        self::__construct();
    }
}
?>