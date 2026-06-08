<?php
declare(strict_types=1);

Lumera\Domain\Announcement\CoreAnnouncementType;
namespace App\Domain\Announcement;

/**
 * @file core.Modules.announcement/AnnouncementType.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class AnnouncementType
 * @ingroup announcement
 * @see AnnouncementTypeDAO, AnnouncementTypeForm
 *
 * @brief Basic class describing an announcement type.
 *
 * WIZDAM MODERNIZATION:
 * - PHP 8.x Compatibility (Constructor)
 * - Strict SHIM
 */

class AnnouncementType extends CoreAnnouncementType {
    
    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function AnnouncementType() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error('Class AnnouncementType uses deprecated constructor parent::AnnouncementType(). Please refactor to parent::__construct().', E_USER_DEPRECATED);
        }
        self::__construct();
    }
}

?>