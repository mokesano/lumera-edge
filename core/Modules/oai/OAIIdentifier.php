<?php
declare(strict_types=1);

/**
 * @file core/Modules/oai/OAIIdentifier.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAIIdentifier
 * @ingroup oai
 * @see OAI
 *
 * @brief Data structures associated with the OAI request handler.
 */

/**
 * OAI identifier.
 */
class OAIIdentifier {

    /** @var string unique OAI record identifier */
    public $identifier;

    /** @var int last-modified *nix timestamp */
    public $datestamp;

    /** @var array sets this record belongs to */
    public $sets;

    /** @var string if this record is deleted */
    public $status;

    /**
     * Constructor.
     */
    public function __construct() {
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function OAIIdentifier() {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::OAIIdentifier(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct();
    }
}
?>