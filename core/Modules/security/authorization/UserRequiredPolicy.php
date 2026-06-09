<?php
declare(strict_types=1);

Lumera\Modules\Security\Authorization\AuthorizationPolicy;
namespace Lumera\Modules\Security\Authorization;

/**
 * @file core.Modules.security/authorization/UserRequiredPolicy.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class UserRequiredPolicy
 * @ingroup security_authorization
 *
 * @brief Policy to deny access if a context cannot be found in the request.
 */

class UserRequiredPolicy extends AuthorizationPolicy {
    /** @var CoreRequest */
    public $_request;

    /**
     * Constructor
     */
    public function __construct($request, $message = 'user.authorization.userRequired') {
        parent::__construct($message);
        // Removed & from reference
        $this->_request = $request;
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function UserRequiredPolicy($request, $message = 'user.authorization.userRequired') {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::UserRequiredPolicy(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($request, $message);
    }

    //
    // Implement template methods from AuthorizationPolicy
    //
    /**
     * @see AuthorizationPolicy::effect()
     */
    public function effect() {
        if ($this->_request->getUser()) {
            return AUTHORIZATION_PERMIT;
        } else {
            return AUTHORIZATION_DENY;
        }
    }
}

?>