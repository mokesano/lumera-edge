<?php
declare(strict_types=1);

/**
 * @file core/Modules/oai/OAISet.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAISet
 * @ingroup oai
 * @see OAI
 *
 * @brief Data structures associated with the OAI request handler.
 */

/**
 * OAI set.
 * Identifies a set of related records.
 */
class OAISet {

    /** @var string unique set specifier */
    public $spec;

    /** @var string set name */
    public $name;

    /** @var string set description */
    public $description;


    /**
     * Constructor.
     */
    public function __construct($spec, $name, $description) {
        $this->spec = $spec;
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function OAISet($spec, $name, $description) {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::OAISet(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($spec, $name, $description);
    }
}
?>