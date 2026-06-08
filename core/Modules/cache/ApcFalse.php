<?php
declare(strict_types=1);

namespace Lumera\Modules\cache;

/**
 * @file core/Modules/Cache/ApcFalse.php
 *
 * Copyright (c) 2013-2019 Sangia Publishing House
 * Copyright (c) 2000-2019 Rochmady and Wizdam Team
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ApcFalse
 * @ingroup cache
 * @see GenericCache
 *
 * @brief Provides caching based on APCu's variable store.
 * [WIZDAM] Renamed from APCCache to APCuCache to reflect modern PHP usage.
 */

import('core.Modules.cache.GenericCache');

// Helper class untuk menyimpan nilai boolean false
// (Karena apcu_fetch mengembalikan false jika gagal, kita butuh cara membedakannya)
class ApcFalse {};
?>