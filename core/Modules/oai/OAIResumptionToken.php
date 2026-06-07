<?php
declare(strict_types=1);

/**
 * @file core/Modules/oai/OAIResumptionToken.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAIResumptionToken
 * @ingroup oai
 * @see OAI
 *
 * @brief Data structures associated with the OAI request handler.
 */

/**
 * OAI resumption token.
 * Used to resume a record retrieval at the last-retrieved offset.
 */
class OAIResumptionToken {

    /** @var string unique token ID */
    public $id;

    /** @var int record offset */
    public $offset;

    /** @var array request parameters */
    public $params;

    /** @var int expiration timestamp */
    public $expire;


    /**
     * Constructor.
     */
    public function __construct($id, $offset, $params, $expire) {
        $this->id = $id;
        $this->offset = $offset;
        $this->params = $params;
        $this->expire = $expire;
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function OAIResumptionToken($id, $offset, $params, $expire) {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::OAIResumptionToken(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($id, $offset, $params, $expire);
    }
}
?>