<?php
declare(strict_types=1);

namespace App\Pages\Donations;

/**
 * @defgroup pages_donations
 */

/**
 * @file pages/donations/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
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
