<?php
declare(strict_types=1);

Lumera\Modules\Security\Authorization\AuthorizationPolicy;
namespace Lumera\Modules\security\authorization;

/**
 * @file core.Modules.security/authorization/HttpsPolicy.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class HttpsPolicy
 * @ingroup security_authorization
 *
 * @brief Class to control access to handler operations based on protocol.
 */

class HttpsPolicy extends AuthorizationPolicy {
    /** @var CoreRequest */
    public $_request;

    /**
     * Constructor
     *
     * @param $request CoreRequest
     */
    public function __construct($request) {
        parent::__construct();
        // Removed & from reference assignment
        $this->_request = $request;

        // Add advice
        // redirectSSL is a method of CoreRequest
        $callOnDeny = array($request, 'redirectSSL', array());
        $this->setAdvice(AUTHORIZATION_ADVICE_CALL_ON_DENY, $callOnDeny);
    }

    /**
     * [SHIM] Backward Compatibility
     * @param $request CoreRequest
     */
    public function HttpsPolicy($request) {
        trigger_error(
            "Class '" . get_class($this) . "' uses deprecated constructor parent::HttpsPolicy(). Please refactor to use parent::__construct().",
            E_USER_DEPRECATED
        );
        self::__construct($request);
    }

    //
    // Implement template methods from AuthorizationPolicy
    //
    /**
     * @see AuthorizationPolicy::applies()
     */
    public function applies() {
        return (boolean)Config::getVar('security', 'force_ssl');
    }

    /**
     * @see AuthorizationPolicy::effect()
     */
    public function effect() {
        // Check the request protocol
        if ($this->_request->getProtocol() == 'https') {
            return AUTHORIZATION_PERMIT;
        } else {
            return AUTHORIZATION_DENY;
        }
    }
}

?>