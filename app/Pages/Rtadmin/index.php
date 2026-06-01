<?php
declare(strict_types=1);

namespace App\Pages\Rtadmin;

/**
 * @defgroup pages_rtadmin
 */

/**
 * @file pages/rtadmin/index.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2003-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_rtadmin
 * @brief Handle requests for RT admin functions.
 *
 */

switch ($op) {
    //
    // General
    //
    case 'index':
    case 'validateUrls':
        define('HANDLER_CLASS', \App\Pages\Rtadmin\RTAdminHandler::class);
        import('app.Pages.Rtadmin.RTAdminHandler');
        break;
    case 'settings':
    case 'saveSettings':
        define('HANDLER_CLASS', \App\Pages\Rtadmin\RTSetupHandler::class);
        import('app.Pages.Rtadmin.RTSetupHandler');
        break;
    //
    // Versions
    //
    case 'createVersion':
    case 'exportVersion':
    case 'importVersion':
    case 'restoreVersions':
    case 'versions':
    case 'editVersion':
    case 'deleteVersion':
    case 'saveVersion':
        define('HANDLER_CLASS', \App\Pages\Rtadmin\RTVersionHandler::class);
        import('app.Pages.Rtadmin.RTVersionHandler');
        break;
    //
    // Contexts
    //
    case 'createContext':
    case 'contexts':
    case 'editContext':
    case 'saveContext':
    case 'deleteContext':
    case 'moveContext':
        define('HANDLER_CLASS', \App\Pages\Rtadmin\RTContextHandler::class);
        import('app.Pages.Rtadmin.RTContextHandler');
        break;
    //
    // Searches
    //
    case 'createSearch':
    case 'searches':
    case 'editSearch':
    case 'saveSearch':
    case 'deleteSearch':
    case 'moveSearch':
        define('HANDLER_CLASS', \App\Pages\Rtadmin\RTSearchHandler::class);
        import('app.Pages.Rtadmin.RTSearchHandler');
        break;
}
