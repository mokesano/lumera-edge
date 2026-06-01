<?php
declare(strict_types=1);

namespace App\Pages\Login;

/**
 * @defgroup pages_login
 */

/**
 * @file tools/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @brief Handle login/logout requests.
 *
 * @ingroup pages_login
 */

switch ($op) {
    case 'index':
    case 'implicitAuthLogin':
    case 'implicitAuthReturn':
    case 'signIn':
    case 'signOut':
    case 'lostPassword':
    case 'requestResetPassword':
    case 'resetPassword':
    case 'changePassword':
    case 'savePassword':
    case 'signInAsUser':
    case 'signOutAsUser':
    // --- [WIZDAM SSO] RUTE ORCID ---
    case 'orcid-auth':
    case 'orcid-callback':
    case 'orcid-unlink':
    // --- [WIZDAM SSO] RUTE GOOGLE ---
    case 'google-auth':
    case 'google-callback':
    case 'google-unlink':
        define('HANDLER_CLASS', \App\Pages\Login\LoginHandler::class);
        import('app.Pages.Login.LoginHandler');
        break;
}
