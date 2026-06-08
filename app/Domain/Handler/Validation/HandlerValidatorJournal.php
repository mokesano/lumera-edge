<?php
declare(strict_types=1);

Lumera\Domain\Handler\Validation\HandlerValidator;
namespace App\Domain\Handler\Validation;

/**
 * @file app.Domain.Handler.Validation/HandlerValidatorJournal.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class HandlerValidatorJournal
 * @ingroup handler_validation
 *
 * @brief Class to validate if a Journal is present
 */

class HandlerValidatorJournal extends HandlerValidator {
    
    /**
     * Constructor.
     * @param $handler Handler the associated form
     * @param $redirectToLogin bool Send to login screen on validation fail if true
     * @param $message string the error message for validation failures (i18n key)
     * @param $additionalArgs Array URL arguments to include in request
     */
    public function __construct($handler, $redirectToLogin = false, $message = null, $additionalArgs = array()) {
        parent::__construct($handler, $redirectToLogin, $message, $additionalArgs);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function HandlerValidatorJournal($handler, $redirectToLogin = false, $message = null, $additionalArgs = array()) {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error('Class ' . get_class($this) . ' uses deprecated constructor parent::HandlerValidatorJournal(). Please refactor to parent::__construct().', E_USER_DEPRECATED);
        }
        self::__construct($handler, $redirectToLogin, $message, $additionalArgs);
    }

    /**
     * Check if field value is valid.
     * Value is valid if it is empty and optional or validated by user-supplied function.
     * @return boolean
     */
    public function isValid() {
        $journal = Request::getJournal();
        return (boolean) $journal;
    }
}

?>