<?php
declare(strict_types=1);

namespace App\Pages\Information;

/**
 * @defgroup pages_information
 */

/**
 * @file pages/information/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_information
 * @brief Handle information requests.
 *
 */

switch ($op) {
    case 'index':
    case 'readers':
    case 'authors':
    case 'librarians':
    case 'competingInterestGuidelines':
    case 'sampleCopyrightWording':
        define('HANDLER_CLASS', \App\Pages\Information\InformationHandler::class);
        import('app.Pages.Information.InformationHandler');
        break;
}
