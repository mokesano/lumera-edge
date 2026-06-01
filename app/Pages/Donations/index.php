<?php
declare(strict_types=1);

namespace App\Pages\Donations;

/**
 * @defgroup pages_donations
 */

/**
 * @file pages/donations/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_donations
 * @brief Handle requests for journal donations
 *
 *
 */

switch ($op) {
    case 'index':
    case 'thankYou':
        define('HANDLER_CLASS', \App\Pages\Donations\DonationsHandler::class);
        import('app.Pages.Donations.DonationsHandler');
        break;
}
