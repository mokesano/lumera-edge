<?php
declare(strict_types=1);

/**
 * @defgroup plugins_generic_stopForumSpam
 */

/**
 * @file plugins/generic/stopForumSpam/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_generic_stopForumSpam
 * @brief Wrapper for the Stop Forum Spam plugin.
 *
 */

require_once('StopForumSpamPlugin.inc.php');

return new StopForumSpamPlugin();