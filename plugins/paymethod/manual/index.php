<?php
declare(strict_types=1);

/**
 * @defgroup plugins_paymethod_manual
 */
 
/**
 * @file plugins/paymethod/manual/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_paymethod_manual
 * @brief Wrapper for manual payment plugin.
 */

require_once('ManualPaymentPlugin.inc.php');

return new ManualPaymentPlugin();