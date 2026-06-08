<?php
declare(strict_types=1);

namespace Lumera\Modules\Codelist;

/**
 * @defgroup qualifier
 */

/**
 * @file core/Modules/Codelist/Qualifier.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class Qualifier
 * @ingroup codelist
 * @see QualifierDAO
 *
 * @brief Basic class describing a BIC Qualifier.
 */

import('core.Modules.codelist.CodelistItem');

class Qualifier extends CodelistItem {

    /**
     * The numerical representation of these Subject Qualifiers in ONIX 3.0
     * @var string
     */
    protected string $_onixSubjectSchemeIdentifier = '17';

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function Qualifier() {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor parent::'" . get_class($this) . "'. Please refactor to parent::__construct().", 
                E_USER_DEPRECATED
            );
        }
        self::__construct();
    }

    /**
     * Get the ONIX Subject Scheme Identifier for this Qualifier.
     * @return string the numerical value representing this item in the ONIX 3.0 schema
     */
    public function getOnixSubjectSchemeIdentifier(): string {
        return $this->_onixSubjectSchemeIdentifier;
    }
}
?>