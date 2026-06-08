<?php
declare(strict_types=1);

Lumera\Modules\Cache\GenericCache;
namespace Lumera\Modules\cache;

/**
 * @file core/Modules/Cache/MemcacheNull.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2000-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class MemcacheNull
 * @ingroup cache
 * @see GenericCache
 *
 * @brief Provides caching based on Memcache.
 */

// FIXME This should use connection pooling
// WARNING: This cache MUST be loaded in batch, or else many cache
// misses will result.

class MemcacheNull {
}
?>