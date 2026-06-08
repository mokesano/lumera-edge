<?php
declare(strict_types=1);

Lumera\Modules\Security\Authorization\PolicySet;
Lumera\Modules\Security\Authorization\ContextRequiredPolicy;
namespace App\Domain\Security\Authorization\Internal;

/**
 * @file app/Domain/Security/Authorization/Internal/JournalPolicy.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class JournalPolicy
 * @ingroup security_authorization_internal
 *
 * @brief Policy that ensures availability of an Wizdam journal in
 * the request context.
 */

class JournalPolicy extends PolicySet {
    
    /**
     * Constructor
     * @param $request CoreRequest
     */
    public function __construct($request) {
        parent::__construct();

        // Ensure that we have a journal in the context.
        
        $this->addPolicy(new ContextRequiredPolicy($request, 'user.authorization.noJournal'));
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function JournalPolicy($request) {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::JournalPolicy(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($request);
    }
}

?>