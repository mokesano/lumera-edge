<?php
declare(strict_types=1);

/**
 * @defgroup plugins_auth_ldap
 */
 
/**
 * @file plugins/auth/ldap/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_auth_ldap
 * @brief Wrapper for loading the LDAP authentiation plugin.
 *
 */

require_once('LDAPAuthPlugin.inc.php');

return new LDAPAuthPlugin();