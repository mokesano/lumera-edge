<?php
declare(strict_types=1);

/**
 * @defgroup plugins_blocks_user
 */
 
/**
 * @file plugins/blocks/donation/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_user
 * @brief Wrapper for donation block plugin.
 *
 */

require_once('DonationBlockPlugin.inc.php');

return new DonationBlockPlugin();