<?php
declare(strict_types=1);

Lumera\Modules\Filter\Filter;
namespace Lumera\Modules\Metadata;

/**
 * @file core.Modules.metadata/CrosswalkFilter.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class CrosswalkFilter
 * @ingroup metadata
 * @see MetadataDescription
 *
 * @brief Class that provides methods to convert one type of
 * meta-data description into another. This is an abstract
 * class that must be sub-classed by specific cross-walk
 * implementations.
 */

class CrosswalkFilter extends Filter {
    
    /**
     * Constructor
     * @param $fromSchema string fully qualified class name of supported input meta-data schema
     * @param $toSchema string fully qualified class name of supported output meta-data schema
     */
    public function __construct($fromSchema, $toSchema) {
        parent::__construct('metadata::'.$fromSchema.'(*)', 'metadata::'.$toSchema.'(*)');
    }

    /**
     * [SHIM] Backward Compatibility
     * @param $fromSchema string
     * @param $toSchema string
     */
    public function CrosswalkFilter($fromSchema, $toSchema) {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::CrosswalkFilter(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($fromSchema, $toSchema);
    }
}
?>