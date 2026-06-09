<?php
declare(strict_types=1);

Lumera\Modules\Form\Validation\FormValidator;
namespace Lumera\Modules\Form\Validation;

/**
 * @file core.Modules.form/validation/FormValidatorPost.inc.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2024-2026 Rochmady and Lumera Teams
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorPost
 * @ingroup form_validation
 *
 * @brief Form validation check to make sure the form is POSTed.
 * [WIZDAM EDITION] Refactored for PHP 8.x
 */

class FormValidatorPost extends FormValidator {
    
    /**
     * Constructor.
     * @param Form $form
     * @param string $message the locale key to use (optional)
     */
    public function __construct($form, string $message = 'form.postRequired') {
        // 'dummy' field and REQUIRED type are passed to satisfy parent signature,
        // as this validator checks the request method, not a specific field.
        parent::__construct($form, 'dummy', FORM_VALIDATOR_REQUIRED_VALUE, $message);
    }

    /**
     * [SHIM] Backward Compatibility
     */
    public function FormValidatorPost($form, $message = 'form.postRequired') {
        if (Config::getVar('debug', 'deprecation_warnings')) {
            trigger_error(
                "Class '" . get_class($this) . "' uses deprecated constructor. Please refactor to parent::__construct().", 
                E_USER_DEPRECATED
            );
        }
        self::__construct($form, $message);
    }

    //
    // Public methods
    //
    /**
     * Check if form was posted.
     * overrides FormValidator::isValid()
     * @return boolean
     */
    public function isValid() {
        // [WIZDAM] Use Application context to retrieve request instead of static wrapper
        return Application::get()->getRequest()->isPost();
    }
}

?>