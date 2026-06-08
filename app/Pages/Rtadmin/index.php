<?php
declare(strict_types=1);

Lumera\Pages\Rtadmin\RTAdminHandler;
Lumera\Pages\Rtadmin\RTSetupHandler;
Lumera\Pages\Rtadmin\RTVersionHandler;
Lumera\Pages\Rtadmin\RTContextHandler;
Lumera\Pages\Rtadmin\RTSearchHandler;
namespace App\Pages\Rtadmin;

/**
 * @defgroup pages_rtadmin
 */

/**
 * @file pages/rtadmin/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
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
        
        break;
    case 'settings':
    case 'saveSettings':
        define('HANDLER_CLASS', \App\Pages\Rtadmin\RTSetupHandler::class);
        
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
        
        break;
}
