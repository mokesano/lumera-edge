<?php
declare(strict_types=1);

namespace App\Pages\Admin;

/**
 * @defgroup pages_admin
 */

/**
 * @file pages.admin.index.php
 *
 * Copyright (c) 2013-2025 Lumera Edge Project
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_admin
 * @brief Handle requests for publisher administration functions.
 *
 */

switch ($op) {
    //
    // Publisher Settings
    //
    case 'settings':
    case 'saveSettings':
        define('HANDLER_CLASS', \App\Pages\Admin\AdminPublisherSettingsHandler::class);
        import('app.Pages.Admin.AdminPublisherSettingsHandler');
        break;
    //
    // Press Management
    //
    case 'presses':
    case 'createPress':
    case 'editPress':
    case 'updatePress':
    case 'deletePress':
    case 'movePress':
        define('HANDLER_CLASS', \App\Pages\Admin\AdminPressHandler::class);
        import('app.Pages.Admin.AdminPressHandler');
        break;
    //
    // Languages
    //
    case 'languages':
    case 'saveLanguageSettings':
    case 'installLocale':
    case 'uninstallLocale':
    case 'reloadLocale':
    case 'reloadDefaultEmailTemplates':
    case 'downloadLocale':
        define('HANDLER_CLASS', \App\Pages\Admin\AdminLanguagesHandler::class);
        import('app.Pages.Admin.AdminLanguagesHandler');
        break;
    //
    // Authentication sources
    //
    case 'auth':
    case 'updateAuthSources':
    case 'createAuthSource':
    case 'editAuthSource':
    case 'updateAuthSource':
    case 'deleteAuthSource':
        define('HANDLER_CLASS', \App\Pages\Admin\AuthSourcesHandler::class);
        import('app.Pages.Admin.AuthSourcesHandler');
        break;
    //
    // Merge users
    //
    case 'mergeUsers':
        define('HANDLER_CLASS', \App\Pages\Admin\AdminPeopleHandler::class);
        import('app.Pages.Admin.AdminPeopleHandler');
        break;
    //
    // AREA ADMIN WIZDAM PAYMENT ---
    //
    case 'payment-settings':
    case 'save-payment-settings':
        define('HANDLER_CLASS', \App\Pages\Admin\AdminPaymentHandler::class);
        import('app.Pages.Admin.AdminPaymentHandler');
        break;
    //
    // Administrative functions
    //
    case 'systemInfo':
    case 'phpinfo':
    case 'expireSessions':
    case 'clearTemplateCache':
    case 'clearDataCache':
    case 'downloadScheduledTaskLogFile':
    case 'clearScheduledTaskLogFiles':
        define('HANDLER_CLASS', \App\Pages\Admin\AdminFunctionsHandler::class);
        import('app.Pages.Admin.AdminFunctionsHandler');
        break;

    //
    // Main administration page
    //
    // Categories
    //
    case 'categories':
    case 'createCategory':
    case 'editCategory':
    case 'updateCategory':
    case 'deleteCategory':
    case 'moveCategory':
    case 'setCategoriesEnabled':
        define('HANDLER_CLASS', \App\Pages\Admin\AdminCategoriesHandler::class);
        import('app.Pages.Admin.AdminCategoriesHandler');
        break;

    case 'index':
    case 'aboutPublisher':
    case 'saveAboutPublisher':
        define('HANDLER_CLASS', \App\Pages\Admin\AdminHandler::class);
        import('app.Pages.Admin.AdminHandler');
        break;
}
