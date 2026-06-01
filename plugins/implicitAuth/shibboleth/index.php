<?php
declare(strict_types=1);

/**
 * @defgroup plugins_implicitAuth_shibboleth
 */

/**
 * @file plugins/implicitAuth/shibboleth/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_implicitAuth_shibboleth
 * @brief Wrapper for the shibboletz plugin.
 *
 */

require_once('ShibAuthPlugin.inc.php');

return new ShibAuthPlugin();