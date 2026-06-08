<?php
declare(strict_types=1);

namespace Lumera\Modules\Oai;

/**
 * @file core/Modules/oai/OAIConfig.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAIConfig
 * @ingroup oai
 * @see OAI
 *
 * @brief Data structures associated with the OAI request handler.
 * * REFACTORED: Wizdam Edition (PHP 7.4 - 8.x Modernization)
 */

define('OAIRECORD_STATUS_DELETED', 0);
define('OAIRECORD_STATUS_ALIVE', 1);

/**
 * OAI repository configuration.
 */
class OAIConfig {

    /** @var string URL to the OAI front-end */
    public $baseUrl = '';

    /** @var string identifier of the repository */
    public $repositoryId = 'oai';

    /** @var string record datestamp granularity */
    // Must be either 'YYYY-MM-DD' or 'YYYY-MM-DDThh:mm:ssZ'
    public $granularity = 'YYYY-MM-DDThh:mm:ssZ';

    /** @var int TTL of resumption tokens */
    public $tokenLifetime = 86400;

    /** @var int maximum identifiers returned per request */
    public $maxIdentifiers = 500;

    /** @var int maximum records returned per request */
    public $maxRecords;

    /** @var int maximum sets returned per request */
    // Must be set to zero if sets not supported by repository
    public $maxSets = 50;

    /**
     * Constructor.
     */
    public function __construct($baseUrl, $repositoryId) {
        $this->baseUrl = $baseUrl;
        $this->repositoryId = $repositoryId;

        $this->maxRecords = Config::getVar('oai', 'oai_max_records');
        if (!$this->maxRecords) $this->maxRecords = 100;
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function OAIConfig($baseUrl, $repositoryId) {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::OAIConfig(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($baseUrl, $repositoryId);
    }
}
?>