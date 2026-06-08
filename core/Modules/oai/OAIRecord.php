<?php
declare(strict_types=1);

namespace Lumera\Modules\Oai;

/**
 * @file core/Modules/oai/OAIRecord.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAIRecord
 * @ingroup oai
 * @see OAI
 *
 * @brief Data structures associated with the OAI request handler.
 */

/**
 * OAI record.
 * Describes metadata for a single record in the repository.
 */
class OAIRecord extends OAIIdentifier {

    /** @var int record status (e.g. OAIRECORD_STATUS_DELETED) */
    public $status;

    /** @var array record data */
    public $data;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
        $this->data = array();
        $this->status = null;
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function OAIRecord() {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::OAIRecord(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct();
    }

    /**
     * Set the value for a specific data field.
     * @param string $name
     * @param mixed $value
     */
    public function setData($name, $value) {
        $this->data[$name] = $value;
    }

    /**
     * Get the value for a specific data field.
     * @param string $name
     * @return mixed
     */
    public function getData($name) {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            return null;
        }
    }
}
?>