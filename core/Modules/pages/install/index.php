<?php
declare(strict_types=1);

Lumera\Pages\Install\CoreInstallHandler;
/**
 * @defgroup pages_install
 */

/**
 * @file pages/install/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_install
 * @brief Handle installation requests.
 *
 */

switch ($op) {
	case 'index':
	case 'install':
	case 'upgrade':
	case 'installUpgrade':
		define('HANDLER_CLASS', 'CoreInstallHandler');
		
		break;
}

?>