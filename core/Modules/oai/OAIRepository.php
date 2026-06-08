<?php
declare(strict_types=1);

namespace Lumera\Modules\Oai;

/**
 * @file core/Modules/oai/OAIRepository.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OAIRepository
 * @ingroup oai
 * @see OAI
 *
 * @brief Data structures associated with the OAI request handler.
 */

/**
 * OAI repository information.
 */
class OAIRepository {

    /** @var string name of the repository */
    public $repositoryName;

    /** @var string administrative contact email */
    public $adminEmail;

    /** @var int earliest *nix timestamp in the repository */
    public $earliestDatestamp;

    /** @var string delimiter in identifier */
    public $delimiter = ':';

    /** @var string example identifier */
    public $sampleIdentifier;

    /** @var string toolkit/software title (e.g. Open Journal Systems) */
    public $toolkitTitle;

    /** @var string toolkit/software version */
    public $toolkitVersion;

    /** @var string toolkit/software URL */
    public $toolkitURL;
}
?>