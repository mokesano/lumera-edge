<?php
declare(strict_types=1);

namespace Lumera\Modules\cache;

/**
 * @file core/Modules/Cache/GenericCacheMiss.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2000-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class GenericCacheMiss
 * @ingroup cache
 *
 * @brief Provides implementation-independent caching. Although this class is intended
 * to be overridden with a more specific implementation, it can be used as the
 * null cache.
 */

// Pseudotype to represent a cache miss
class GenericCacheMiss {
    // No properties or methods; this is just a marker class.
}
?>