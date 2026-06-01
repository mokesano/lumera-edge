<?php

/**
 * @defgroup pages_help
 */

/**
 * @file pages/help/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2000-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_help
 * @brief Handle requests for viewing help pages.
 *
 */

switch ($op) {
	case 'index':
	case 'toc':
	case 'view':
	case 'search':
	case 'chat': // <--- WIZDAM CHATBOX ROUTE
		define('HANDLER_CLASS', 'HelpHandler');
		import('app.Pages.help.HelpHandler');
		break;
}

?>