<?php
declare(strict_types=1);

/**
 * @file core/Modules/Cache/MemcacheFalse.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2000-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MemcacheFalse
 * @ingroup cache
 * @see GenericCache
 *
 * @brief Provides caching based on Memcache.
 */

import('core.Modules.cache.GenericCache');

// FIXME This should use connection pooling
// WARNING: This cache MUST be loaded in batch, or else many cache
// misses will result.

// Pseudotypes used to represent false and null values in the cache
class memcache_false {
}
?>