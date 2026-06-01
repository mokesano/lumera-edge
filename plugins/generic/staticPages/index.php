<?php
declare(strict_types=1);

/**
 * @file plugins/generic/staticPages/index.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Wrapper for StaticPages plugin.
 *
 * @package plugins.generic.staticPages
 *
 */

require_once('StaticPagesPlugin.inc.php');

return new StaticPagesPlugin();